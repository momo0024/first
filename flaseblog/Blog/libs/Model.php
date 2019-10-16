<?php
// libs/model.php
//所有 Model层的 父类
namespace libs;

// 此处DB不用起别名, 因为DB类和当前类是同一个命名空间下,不会有问题
// use libs\DB;

class Model
{
    protected $db;

    public function __construct()
    {
        // Model父类中特殊传递 链接的数据库名
        $this->db = new DB('mysql:dbname=blog');
    }

    //查所有
    protected function fetchAll($query, $bindings = [])
    {
        return $this->db->fetchAll($query, $bindings);
    }

    //增删改: model中 添加个中间环节来调用db, 可以简化子类的调用!
    protected function exec($query, $bindings = [])
    {
        return $this->db->exec($query, $bindings);
    }
     protected function fetchObject($query,$bingings=[]){
        return $this->db->fetch($query,$bingings,DB::FETCH_OBJ);
    }
}
