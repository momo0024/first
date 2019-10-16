<?php
//libs/Validate.php
//验证类

namespace libs;
// 静态方法的实际应用
// 静态方法可以由类来直接调用，通常把一些具有相同功能的可以独立存在的方法
// 封装到一个类中，这样可以让代码更加标准
class Validate
{
    //手机号格式
    public static function isPhone($value)
    {
        $pattern = '#^(\+86 )?1(3\d|4[57]|5[0-357-9]|7[0367]|8[0-35-9])\d{8}$#';
        return preg_match($pattern, $value);
    }

    //邮箱格式
    public static function isEmail($value)
    {
        $pattern = '#^[\w.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)?\.[a-zA-Z0-9]{2,6}$#';
        return preg_match($pattern, $value);
    }

    //用户名: 返回值是 是否在 2-100之间
    public static function isUser($value)
    {
        //考虑到用户名 会中英文混合, 所以长度 用 mb 库来读取
        //读取字符串长度: strlen(); 中文算3 英文算1
        //mb_strlen(); 中英文都算1个
        $len = mb_strlen($value);
        return $len >= 2 && $len <= 100;

        //上方写法 等同于
        if ($len >= 2 && $len <= 100) {
            return true;
        } else {
            return false;
        }
    }

    //密码: >6位,  由数字 和 字母组成
    public static function isPwd($value)
    {
        $len = mb_strlen($value);

        $haveNum = preg_match('#\d#', $value);
        $haveEng = preg_match('#[a-zA-Z]#', $value);

        return $len > 6 && $haveNum && $haveEng;
    }
}
