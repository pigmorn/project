// JavaScript Document
window.onload=function(){
		//弹性菜单获取的元素
		var oDiv=document.getElementById('block');
		var oDiv1=document.getElementById('nav');
		var oA=oDiv1.getElementsByTagName('a');
		
		//弹性菜单特效

		for(var i=0;i<oA.length;i++){
				oA[i].index=i;
				oA[i].onmouseover=function(){
						away=60+this.index*110;
						menuInterval();
					};
				//鼠标离开时移动块回到原位
//				oA[i].onmouseout=function(){
//						away=60;
//						menuInterval();
//					};
			}
	
	};
var timer=null;
function menuInterval(){
		if(timer){
				clearInterval(timer);
			}
		timer=setInterval(menuMove,15);
	};
var step=0;
var l=0;
function menuMove(){
		var odiv=document.getElementById('nav_bg');
		var adiv=odiv.getElementsByTagName('div')[0];
		step+=(away-odiv.offsetLeft)/12;
		step=step*0.75;
		l=parseInt(odiv.offsetLeft+step);
		odiv.style.left=l+'px';
		adiv.style.left=-l+60+'px';
	};