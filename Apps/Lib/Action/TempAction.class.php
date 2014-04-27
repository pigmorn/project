<?php
	class TempAction extends Action{
		public function index(){
			import("@.Action.MenuAction");
			import("@.Model.Cate");
			$menuFirst=MenuAction::outputMenu();//包含level值的menu全部
			$menuLast=Cate::newMenu($menuFirst,$menuFirst);//最终输出的遍历好的数组数据
			$this->display("website/temp001/index");
			
		}
	}

?>