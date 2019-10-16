<?php
namespace app\index\controller;

use app\index\model\AccountModel;
use libs\Controller;
use libs\Validate;
use libs\Captcha;
use app\index\model\Blogmodel;

class AccountController extends Controller{
	#显示注册界面
	public function reg(){

	$this->display('account/reg.tpl');
	
	}
	public function doreg(){
		//1.从post中读取所有的值
		$user=$_POST['user'];
		$pwd=$_POST['pwd'];
		$pwd2=$_POST['pwd2'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$captcha=$_POST['captcha'];
		//2. 格式验证
		if ($pwd !== $pwd2) {
			die("两次密码输入不一致");
		}
		//Validate::静态方法调用
		if (!Validate::isUser($user)) {
			die("用户名错误");
		}
		if (!Validate::isPwd($pwd)) {
			die("密码错误");
		}
		if (!Validate::isEmail($email)) {
			die("邮箱错误");
		}
		if (!Validate::isPhone($phone)) {
			die("手机号格式错误");
		}
		$code=$_SESSION['code'];
		if (strtolower($code)!=strtolower($captcha)) {
			die("验证码错误");
		}
		//存入数据库
		$model = new AccountModel();

		$args=[
			'username'=>$user,
			'password'=>md5($pwd),
			'phone'=>$phone,
			'email'=>$email,
			'balance' =>0,
			'created'=>time(),
			'admin'=>0
		];

		$suc = $model->saveUser($args);
		// echo $suc ? '注册成功' : '注册失败';
		if ($suc) {
			header('location:index.php?c=account&a=login');
		}else{
			echo "<h1>注册失败</h1>";
		}
}
		//验证码
		public function captcha(){
			$c =  new Captcha();
			$code=$c->show();
			//验证码存session 备用
			$_SESSION['code']=$code;
	}
	//显示登录界面
	public function login(){
		$this->display('account/login.tpl');
	}
	public function dologin(){
		$user=$_POST['user'];
		$pwd=$_POST['pwd'];
		$captcha=$_POST['captcha'];
		if (!Validate::isUser($user)) {
			die("用户名错误");
		}
		if (!Validate::isPwd($pwd)) {
			die("密码错误");
		}
		$code=$_SESSION['code'];
		if (strtolower($code)!==strtolower($captcha)) {
			die("<script>alert('验证码错误')</script>");
		}
		$model = new AccountModel();
		$obj=$model->getUser($user,md5($pwd));
		//判断用户名是否登录
		if ($obj) {
			//session存入值, 用来保存登录状态
			$_SESSION['uid']=$obj[0][0];
			$_SESSION['username']=$obj[0][1];
			$_SESSION['pwd']=$obj->pwd;
			header('location:index.php');
		}else{
			echo "登陆失败";
		}
	}
		public function detail(){
			$uid=$_GET['uid'];
			$model= new AccountModel();
			$user=$model->getUserInfo($uid);
			//把读取的值绑定到前端页面
			$this->assign('user',$user);
			//展示blogmodel的所有博客
			$bmodel=new BlogModel();
			$blogs=$bmodel->getBlogBy($uid);
			$this->assign('blogs',$blogs);
			$this->display('account/detail.tpl');	
	}
	public function logout(){
		//退出操作:清除登录状态的session内容
		session_destroy();
		session_unset();
		header('location:index.php');
	}
}