<?php

// Upload.class.php
// 类文件的命名方式有两种格式
// 类名.php
// 类名.class.php
// 期望:  Upload::save(文件夹路径); 就可以把文件保存到对应的文件夹下, 并且返回 文件名称数组
namespace libs;
class Upload
{
    public static function save($dir)
    {
        $var = reset($_FILES);
        $var = reset($var); //两行代码不要合写, 会报错

        if (is_array($var)) {
            //说明是3维数组,即多文件上传
            $arr = reset($_FILES); //得到的是首个值
            foreach ($arr as $key => $value) {
                foreach ($value as $k => $v) {
                    $newArr[$k][$key] = $v;
                }
            }
        } else {
            //否则就是单文件
            $newArr = $_FILES;
        }
        //人性化的考虑: 用户传递目录如果不存在就创建一个
        if (!file_exists($dir)) {
            mkdir($dir);
        }
        $filenames = []; //存放循环保存成功的文件名
        foreach ($newArr as $key => $value) {
            if ($value['error'] != 0) {
                //有错误, 跳过本次循环保存
                continue;
            }
            $tmp_name = $value['tmp_name']; //临时存放

            //唯一名称
            $uniqueName = md5(microtime(true) . mt_rand(100000, 999999));
            //后缀名
            $name = $value['name'];
            //读取后缀名 jpg
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $uniqueName .= '.' . $ext;

            $dst = $dir . '/' . $uniqueName;

            $suc = move_uploaded_file($tmp_name, $dst);
            if ($suc) {
                //索引数组新增数据的写法
                // 数组[] = 新值;
                $filenames[] = $uniqueName;
            }
        }
        return $filenames;
    }
}
