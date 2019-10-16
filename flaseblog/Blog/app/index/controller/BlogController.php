<?php
namespace app\index\controller;
use libs\Controller;
use libs\Upload;
use app\index\model\BlogModel;
use app\index\model\CommentModel;
/**
 * 
 */
class BlogController extends Controller
{
	public function addBlog(){
		$this->display('blog/addblog.tpl');
	}
	public function doAddBlog(){
		$title=$_POST['title'];
		$content=$_POST['content'];
		//单文件上传
		$imageNames=Upload::save('upload');
		// print_r($imageNames);
		$image='';
		if (!empty($imageNames)) {
			$image=$imageNames[0];
		}
		// print_r($image);
		$model=new BlogModel();
		$args=[ 
			'uid'=>$_SESSION['uid'],
			'title'=>$title,
			'content'=>$content,
			'image'=>$image,
			'view'=>0,
			'created'=>time(),
			'updated'=>time(),
		];
		$suc=$model->saveBlog($args);
		if ($suc) {
			echo "添加成功";
		}else{echo "添加失败";}
	}
	public function delblog(){
		$bid=$_GET['bid'];
		$model=new BlogModel();
		$suc=$model->delBlog($bid);
		if ($suc) {
			//删除成功,跳转回个人信息
			$uid=$_SESSION['uid'];
			header('location:?c=account&a=detail&uid='.$uid);
		}else{
			echo "删除失败";
		}
	}
	//修改博客
	public function changBlog($uid){
		$model=new BlogModel();
		$suc=$model->changBlog();
	} 
	//查看博客
	public function doKan(){
		$bid=$_GET['bid'];
		$model=new BlogModel();
		$blog=$model->getBlogById($bid);
		//阅读量增加
		$this->assign('blog',$blog);
		$suc=$model->addView($bid);
		$commentm=new CommentModel();
		$comments=$commentm->getCommentBid($bid);
		$this->assign('comments',$comments);
		$this->display("blog/kanblog.tpl");
	}
	public function changeBlog(){
		$bid=$_GET['bid'];
		$model=new BlogModel();
		$blog=$model->getBlogById($bid);
		$this->assign('blog',$blog);
		$this->display('blog/uptail.tpl');
	}
	public function dochangeBlog(){
		$bid =$_GET['bid'];
		$title =$_POST['title'];
		$content = $_POST['content'];
		$model= new BlogModel();
		$suc=$model->updateBlog($bid,$title,$content);
		if ($suc) {
		 	header('location:?c=blog&a=detail&bid='.$bid);
		 	// echo "更新成功";
		 }else{
		 	echo "更新失败";
		 }
	}
	public function List(){
		$model=new BlogModel();
		//获取所有博客
		$blogs=$model->getAllBlog();
		$this->assign('blogs',$blogs);
		// print_r($blogs);
		
		//按照阅读量排序
		$views=$model->getViewTop5();
		$this->assign('views',$views);
		//按照创建时间
		$createds=$model->getCreatedTop5();
		$this->assign('createds',$createds);
		$this->display('blog/list.tpl');
	}
}