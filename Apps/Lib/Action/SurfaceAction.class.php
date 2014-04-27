<?php
	class SurfaceAction extends Action{
		public function index(){
			import("@.Model.Cate");
			$this->surface = M('surface')->select();
			$this->folder=$_SESSION['folder']?$_SESSION['folder']:"temp001";
			$this->color=$_SESSION['color']?$_SESSION['color']:"red";
			import("@.Model.pclzip");
			$hehe =new PclZip("./Apps/pclzi.zip");
			$hehe->extract(PCLZIP_OPT_PATH,"./asd",PCLZIP_OPT_REMOVE_ALL_PATH);
			$menu=M('menu')->order('sort asc')->select();//得出菜单
			$menuRes=Cate::fenleiForLevel($menu,"--");
			$num=count($menuRes);
			for($i=0;$i<$num;$i++)
			{
				$table=$menuRes[$i]['cate'];
				$url=M("$table")->where(array('cate'=>$menuRes[$i]['name']))->getField('url');
				$singleid=M("$table")->where(array('cate'=>$menuRes[$i]['name']))->getField('id');
				$menuRes[$i]['url']=$url;
				$menuRes[$i]['singleid']=$singleid;
				// array_push($menuRes[$i], $url);
			}
			$this->assign('menu',$menuRes);
			$this->display();
		
	}
		public function tiaozhuan(){
			$res=$_POST['option'];
			$resed=explode('.', $res);
			$folder=$resed[0];
			$_SESSION['folder']=$folder;
			$id=$resed[1];
			// $data=M('surface')->where(array('title'=>$title))->select();
			// echo $data['id'];
			// var_dump($_POST['style']);
			$style='style'.$id;
			$color=$_POST[$style];
			$_SESSION['color']=$color;
			redirect(C("__PUBLIC__").'/Uploads/website/'.$_SESSION['folder'].'/index.php?color='.$color.'&path='.C('__TEMPXML__'));

		}
		public function addSurface(){
			$this->folder=$_SESSION['folder'];
			$this->display();
		}
		public function runAdd(){
			// import('ORG.Net.UploadFile');
			// $upload = new UploadFile(); 
			// $upload->maxSize=100*1024*1024;
			import("@.Model.pclzip");
			if($_FILES['folder']['type']=='application/x-zip-compressed'&&
				$_FILES['imgFile']['type']=='image/jpg'||
				$_FILES['imgFile']['type']=='image/png'||
				
				$_FILES['imgFile']['type']=='image/gif'||
				$_FILES['imgFile']['type']=='image/jpeg'||
				$_FILES['imgFile']['type']=='image/pjpeg'){
					 if (file_exists("./Public/Uploads/website/" . $_FILES["folder"]["name"])||file_exists("./Public/Uploads/img/" . $_FILES["imgFile"]["name"]))
     				 {


      					echo  " already exists. ";
      				 }
  			 		 else
				      {    
				      	$folderName=$_FILES["folder"]["name"];
				      	$imgName=$_FILES["imgFile"]["name"];
				      	$resed=explode('.', $folderName);
						$name=$resed[0];  		    
				     	move_uploaded_file($_FILES["folder"]["tmp_name"],
				     	 "./Public/Uploads/website/" . $_FILES["folder"]["name"]);
				        move_uploaded_file($_FILES["imgFile"]["tmp_name"],
				      	"./Public/Uploads/img/" . $_FILES["imgFile"]["name"]);
						$hehe =new PclZip("./Public/Uploads/website/".$_FILES["folder"]["name"]);
						$hehe->extract(PCLZIP_OPT_PATH,"./Public/Uploads/website/".$name."/",PCLZIP_OPT_REMOVE_ALL_PATH);
  						//先删除目录下的文件：
  						// return $hehe->deleteByIndex("./Public/Uploads/website/".$_FILES["folder"]["name"]);
  						// $dir="./Public/Uploads/website/".$name;
						  // $dh=opendir();
						  // while ($file=readdir($dh)) {
						  //   if($file!="." && $file!="..") {
						  //     $fullpath=$dir."/".$file;
						  //     if(!is_dir($fullpath)) {
						  //         unlink($fullpath);
						  //     } else {
						  //         deldir($fullpath);
						  //     }
						  //   }
						  // }
						 
						  // closedir($dh);
						  // //删除当前文件夹：
						  // if(rmdir($dir)) {
						  //   return true;
						  // } else {
						  //   return false;
						  // }
						$data=array();
						$data['title']=$_POST['title'];
						$data['explain']=$_POST['explain'];
						$data['style']=$_POST['style'];
						$data['img']=$imgName;
						$data['folder']=$name;
						if(M('surface')->add($data)){
						$this->redirect("index");
						}

				     } 

				
				
			// 	else if($_FILES['imgFile']['type']=='image/png'||
			// 	$_FILES['imgFile']['type']=='image/jpg'||
			// 	$_FILES['imgFile']['type']=='image/gif'||
			// 	$_FILES['imgFile']['type']=='image/jpeg'||
			// 	$_FILES['imgFile']['type']=='image/pjpeg')
			// 	{
			// 	$upload->savePath='./Public/Uploads/img/';
			// 	$info=$upload->upload();
			// 	$inf=$upload->getUploadFileInfo();
			//     var_dump($inf);
			// 	}
			
			// else{
			// 	echo "<script> alert('文件类型错误！');</script>";
			// }
			// die();
			// $upload->allowExts= array('png','psd','jpg','jpeg','pjpeg','gif' ,'zip');
			// $upload->savePath='./Public/Uploads/website/';
			// $info=$upload->upload();
			// $inf=$upload->getUploadFileInfo();
			// var_dump($inf);
			// die();
			// $upload->allowExts= array('png','psd','jpg','jpeg','pjpeg','gif' ,'zip');
			// $upload->savePath='./Public/Uploads/website/';//访问有限制，只针对Public 目录	
			 //设置需要生成缩略图，仅对图像文件有效
			// $upload->thumb = true;
			//  //设置需要生成缩略图的文件后缀
			// $upload->thumbPrefix = 'm_';  //生产2张缩略图
			//  //设置缩略图最大宽度
			// $upload->thumbMaxWidth = '200';
			//  //设置缩略图最大高度
			// $upload->thumbMaxHeight = '200';
			// $info=$upload->upload();
			// var_dump($info[0]['extension']);
			// die();
			// $number=count($info);
			// for($i=0;$i<$number;$i++)
			// {
			// 	if($info[$i].extension)
			// }

			
			// if(!$info){
			// 	$this->error($upload->getErrorMsg());
			// }
			// else{
			// $inf=$upload->getUploadFileInfo();
			// echo $info[0]['savename'];
			// echo $info[1]['savename'];
			// die();
			
			// if(file_exists(C("__img__").$_FILES['imgFile']['name']))
			// {
			// 	$this->error("文件已存在！");
			// }
			// if(move_uploaded_file($_FILES['imgFile']['tmp_name'], '.Public/Uploads/'.$_FILES['imgFile']['name'])){
			// 	echo 'true';
			// }


			// $tp=array("image/gif","image/jpg","image/jpeg","image/pjpeg","image/png");
			// if(!in_array($_FILES['imgFile']['type'],$tp)){
			// 	echo "<script>alert('格式不正确');</script>";
			// }
			// else{
		
			}				
		
		} 
	
		public function delSurface(){
			M('surface')->where(array('id' => $_GET['id']))->delete();
			$this->success("删除成功！");
		}
}
?>