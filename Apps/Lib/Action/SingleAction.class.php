<?php
class SingleAction extends Action{
	public function index(){
		import("@.Model.Cate");
		$this->folder=$_SESSION['folder']?$_SESSION['folder']:"temp001";
		$this->color=$_SESSION['color']?$_SESSION['color']:"red";
		$menu=M('menu')->order('sort asc')->where(array('cate'=>'single'))->select();
		// $menuRes=Cate::fenleiForLevel($menu,"--");
		$this->assign('menu',$menu);		
		$this->display();
	} 
	public function addSingle(){
		$dataSingle=array();
		$dataSingle['title']=$_POST['title'];
		$dataSingle['cate']=$_POST['cate'];
		$dataSingle['faburen']=$_POST['faburen'];
		$dataSingle['content']=$_POST['content'];
		$time=time();
		$dataSingle['createtime']=$time;
		if(M('single')->add($dataSingle)){
			$this->redirect("Single/viewSingle");
		}
		else{
			echo mysql_error();
		}
		}
	public function viewSingle(){
		$data=M('single')->order('id desc')->select();
		$this->assign('data',$data);
		$singleJson=json_encode($data);
		$res=file_put_contents('./Pub/json/single.json',$singleJson);
		if($res === false)
		{
			echo "内容存入失败";
		}
		$this->display();
	}
	public function editSingle(){
		$dataSingle=M('single')->where(array('id'=>$_GET['singleid']))->select();
		// var_dump($dataSingle);
		// die;
		$this->assign('editdataSingle',$dataSingle);
		$menu=M('menu')->order('sort asc')->where(array('cate'=>'single'))->select();
		$this->assign('menu',$menu);		
		$this->display();
	}
	public function delSingle(){
		if(M('single')->where(array('id'=>$_GET['singleid']))->delete()){
			$this->redirect('Single/viewSingle');
		}
		else{
			$this->error("删除失败！");
		}
	}
}
?>