// JavaScript Document
window.onload=function(){
		//弹性菜单获取的元素
		var oDiv=document.getElementById('block');
		var oDiv1=document.getElementById('nav');
		var oA=oDiv1.getElementsByTagName('a');
		//banner轮播图获取的元素
		var oBtn=document.getElementById('btn');
		var oa=oBtn.getElementsByTagName('a');
		var oDiv_banner=document.getElementById('banner');
		var oUl_banner=oDiv_banner.getElementsByTagName('ul')[0];
		var aLi_banner=oDiv_banner.getElementsByTagName('li');
		var oImage_banner=oDiv_banner.getElementsByTagName('img');
		//图片展示获取的元素
		var oDiv_show=document.getElementById('product_show');
		var oUl_show=oDiv_show.getElementsByTagName('ul')[0];
		var aLi_show=oDiv_show.getElementsByTagName('li');
		var aImage_show=oDiv_show.getElementsByTagName('img');
		var iSpeed=5;
		var Img_show=180;
		var timer1=null;
		//循环按钮
		var iNow=0;
		//循环li图片
		var iNow2=0;
		var img_width=960;
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
			
			
		//banner图片滚动
		//按钮变换
		oUl_banner.style.width=parseInt(img_width*oImage_banner.length)+'px';
		
		for(var i=0;i<oa.length;i++){
				 oa[i].index=i;
				 oa[i].onclick=function(){
					 	for(var i=0;i<oa.length;i++){
								oa[i].className='';
							};
							
					 	this.className='active';
						startMove(oUl_banner,{left : -this.index*img_width});
					 };
			}
		//开启定时器，轮播图和按钮	
		setInterval(toRun,3000);
		
		function toRun(){
			if(iNow==oa.length-1){
					
					aLi_banner[0].style.position='relative';
					aLi_banner[0].style.left=img_width*oa.length+'px';//当轮播图到最后一张时将第一张定位到最后一张后
					iNow=0;
				}
			else{  
				iNow++;
			}
			iNow2++;
			for(var i=0;i<oa.length;i++){
						oa[i].className='';
					}
			oa[iNow].className='active';
			
			startMove(oUl_banner,{left : -iNow2*img_width},function(){
					if(iNow==0){
							aLi_banner[0].style.position='static';
							oUl_banner.style.left=0;//当到第一张时将整个ul拉回到初始位置
							iNow2=0;
						}
				});
		}
		
		//产品展示特效
		oUl_show.innerHTML+=oUl_show.innerHTML;
		oUl_show.style.width=(Img_show+15)*aLi_show.length+'px';
		timer_show();
		oUl_show.onmouseover=function(){
				clearInterval(timer1);
			}
		oUl_show.onmouseout=function(){
			timer_show();
			}
		//编写开启产品展示块的定时器的函数
		function timer_show(){
			timer1=setInterval(function(){
					if(oUl_show.offsetLeft<-oUl_show.offsetWidth/2){
							oUl_show.style.left=0+'px';
						}
					oUl_show.style.left=oUl_show.offsetLeft-iSpeed+'px';	
				},30);
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