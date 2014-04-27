<?php
class ListAction extends Action{
	public function index(){
		import("@.Model.Cate");
		$menuone=M('menu')->where(array('pid'=>0,'cate'=>'list'))->select();
		//将第一个下标加到数组中
		foreach (array_keys($menuone) as $v) {
			array_push($menuone[$v],$v);
		}
		$menu=M('menu')->select();
		$menuRes=Cate::newMenu($menu,$menuone);
		$menuJson=json_encode($menuRes);
		$this->assign('menuJson',$menuJson);
		$this->assign("menuone",$menuRes);
		$this->display();
	}
	public function addList(){
		$data=array();
		$arr=explode(".",$_POST['cate']);
		$cate=$arr[1];
		if($_POST['child'])
		{
			$data['cate']=$_POST['child'];
		}
		else{
			$data['cate']=$cate;
		}
		$data['title']=$_POST['title'];
		$data['content']=$_POST['content'];
		$data['faburen']=$_POST['faburen'];
		$time=time();
		$data['createtime']=$time;
		if(M('List')->add($data)){
			$this->redirect("List/viewList");
		}
		
	}
	public function viewList(){
		$this->List=M('List')->order('id desc')->select();
		$this->display();

	}
	public function List
}
?>