<?php
	class Cate 
	{
		static Public function fenleiForLevel($cate,$html="--",$pid=0,$level=0){
			$arr=array();
			foreach ($cate as $v) {
				if($v['pid']==$pid){
					$v['level']=$level+1;
					$v['html']=str_repeat($html,$level);
					$arr[]=$v;
					$arr=array_merge($arr,self::fenleiForLevel($cate,$html,$v['id'],$level+1));
				}
			}
			return $arr;
		}
		//将二级菜单融入指定的一级菜单中
		static Public function newMenu($total,$menu){
			$num=count($menu);
			$arr=array();
			for($i=0; $i<$num; $i++) {
				foreach ($total as $m) {
					if($menu[$i]['id']==$m['pid'])
					{
						$id=$m['id'];
						$arr[$id]=$m['name'];
						$menu[$i]['child']=array();
						$menu[$i]['child']=array_merge($menu[$i]['child'],$arr);
					}
				}
			}
			return $menu;

		} 
	}
?>