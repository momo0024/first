<?php

//libs/Controller.php

namespace libs;

use Smarty;

class Controller
{
    protected $smarty;

    public function __construct()
    {
        $this->init();
    }

    //初始化的操作单独写在一个 init 方法里, 方便子类可以重写
    protected function init()
    {
        //父类实例化开启session,子类就不用开启session
        session_start();
        $this->smarty = new Smarty();
        // 路径是相对于 入口文件的
        $this->smarty->setTemplateDir('app/index/view');
        //编译文件存放的路径
        $this->smarty->setCompileDir('runtime/index/compile');
    }

    protected function assign($key, $value)
    {
        $this->smarty->assign($key, $value);
    }

    protected function display($path)
    {
        $this->smarty->display($path);
    }
}
