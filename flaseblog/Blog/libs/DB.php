<?php
//libs/DB.php
namespace libs;

//带有命名空间, 所以要加PDO的别名
use PDO;

class DB
{
    //常量
    const FETCH_NUM   = 0;
    const FETCH_ASSOC = 1;
    const FETCH_OBJ   = 2;
    const FETCH_BOTH  = 3;

    protected $dsn;
    protected $usr;
    protected $pwd;

    protected $link;

    //只读
    public function __get($key)
    {
        return $this->$key;
    }

    public function __construct($dsn = 'mysql:dbname=blog', $usr = 'root', $pwd = 'root')
    {
        $this->dsn = $dsn;
        $this->usr = $usr;
        $this->pwd = $pwd;

        $this->link = new PDO($dsn, $usr, $pwd);
    }

    //如果方法中某个参数的值是固定的几个选项, 就用常量
    public function fetchAll($query, $bindings = [], $type = self::FETCH_BOTH)
    {
        $stmt = $this->getStmt($query, $bindings);
        return $stmt->fetchAll($this->getFetchType($type));
    }

    //读取单条记录
    public function fetch($query, $bindings = [], $type = self::FETCH_BOTH)
    {
        $stmt = $this->getStmt($query, $bindings);
        return $stmt->fetch($this->getFetchType($type));
    }

    //读取条数
    public function rowCount($query, $bindings = [])
    {
        $stmt = $this->getStmt($query, $bindings);
        return $stmt->rowCount();
    }

    //增删改
    public function exec($query, $bindings = [])
    {
        //参数3, true代表增删改
        return $this->getStmt($query, $bindings, true);
    }
    private function getFetchType($type)
    {
        switch ($type) {
            case self::FETCH_ASSOC:
                return PDO::FETCH_ASSOC;
                break;
            case self::FETCH_BOTH:
                return PDO::FETCH_BOTH;
                break;
            case self::FETCH_NUM:
                return PDO::FETCH_NUM;
                break;
            case self::FETCH_OBJ:
                return PDO::FETCH_OBJ;
                break;
            default:
                return PDO::FETCH_BOTH;
                break;
        }
    }

    //此方法会有两种情况被调用, 查询 或 增伤改
    //bool类型, 就两个值 true  false
    //如果某个参数 就两个可选值, 习惯用bool
    //$type : false代表查询, true 代表增删改
    private function getStmt($query, $bindings = [], $type = false)
    {
        if (empty($bindings)) {
            if ($type) {
                return $this->link->exec($query);
            } else {
                $stmt = $this->link->query($query);
            }
        } else {
            //预处理
            $stmt = $this->link->prepare($query);
            foreach ($bindings as $key => $value) {
                // $stmt->bindValue(':字符', 参数, 类型)
                if (is_int($value)) {
                    $stmt->bindValue(":$key", $value, PDO::PARAM_INT);
                } else {
                    $stmt->bindValue(":$key", $value);
                }
            }
            $suc = $stmt->execute();
            //新增报错信息代码
            if($suc===false){
                echo "<pre>";
                var_dump($stmt);
                print_r($stmt->erroinfo());
                die();
            }
            if ($type) {
                //true 增删改
                return $suc;
            }
        }
        return $stmt;
    }

}
