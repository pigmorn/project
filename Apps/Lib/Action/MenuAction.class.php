<?php
class MenuAction extends Action{
	public function index(){
		$res=$this->outputMenu();
		$this->assign('menu',$res);
		$menuJson=json_encode($res);
		$res=file_put_contents('./Pub/json/menu.json',$menuJson);
		if($res === false)
		{
			echo "内容存入失败";
		}
		$this->display();
	}
	public static function outputMenu(){
		import("@.Model.Cate");
		$folder=$_SESSION['folder']?$_SESSION['folder']:"temp001";
		$color=$_SESSION['color']?$_SESSION['color']:"red";
		$menu=M('menu')->order('sort asc')->select();
		$menuRes=Cate::fenleiForLevel($menu,"--");
		return $menuRes;		
	}
	public static function menu(){
		$menu=M('menu')->select();
		return $menu;
	}
	public function addMenu(){
		$this->folder=$_SESSION['folder']?$_SESSION['folder']:"temp001";
		$this->color=$_SESSION['color']?$_SESSION['color']:"red";
		$this->pid=$_GET['pid']?$_GET['pid']:0;
		$this->display();
	}
	public function runAddMenu(){
		$data=array();
		$data['name']=$_POST['menuName'];
		$cate=$_POST['cate'];
		$arr=explode('.', $cate);
		$data['cate']=$arr[0];
		$data['zhonglei']=$arr[1];
		$data['sort']=$_POST['sort'];
		$data['pid']=$_POST['pid'];
		$data['url']="./".$arr[0].".html";
		if(M('menu')->add($data)){
			$this->redirect("Menu/index");
		}
	}
	public function delMenu(){
		if(M('menu')->where(array('id'=>$_GET['id']))->delete())
		{
			$this->redirect("Menu/index");
		}
		else
		{
			$this->error("删除失败！");
		}
	}
	public function editMenu(){
		echo "111";
		$this->folder=$_SESSION['folder'];
		$this->menu=M('menu')->where(array('id'=>$_GET['id']))->find();
		$this->display();
	}
}
?>