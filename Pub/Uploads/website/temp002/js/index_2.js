/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2014-03-19 09:34:10
 * @version $Id$
 */
window.onload=function(){
		var oInput=document.getElementById('search');
		var oUl=document.getElementById('scroll');
		var aLi=oUl.getElementsByTagName('li');
		var lBtn=document.getElementById('btn_left');
		var rBtn=document.getElementById('btn_right');
		var timer=null;
		var timer2=null;
		var timer3=null;
		var iNow=0;
		var iNow2=0;
		var iNow3=0;
		
		oUl.innerHTML+=oUl.innerHTML;
		oUl.style.width=(aLi[0].offsetWidth+52)*aLi.length+'px';
		
		//输入框的处理
		oInput.onfocus=function(){
				if(this.value=='Search...'){
						this.value='';
					}
			}
		oInput.onblur=function(){
				if(oInput.value==''){
						oInput.value='Search...';
					}
			}
			
		
		//页面一开始默认的向左滚动	
		timer=setInterval(function(){
				iNow--;
				startMove(oUl,{left:196*iNow},function(){
						if(oUl.offsetLeft<=-(aLi.length/2)*(aLi[0].offsetWidth+52)){
								oUl.style.left=0+'px';
								iNow=0;
							}
					});
			
			},2000);
		
		
		lBtn.onclick=function(){
				iNow2=iNow3||iNow;
				if(timer3){
					clearInterval(timer3);
				}
				if(timer){
					clearInterval(timer);
				}
				
				timer2=setInterval(function(){
					iNow2++;
					startMove(oUl,{left:196*iNow2},function(){
							if(oUl.offsetLeft>=0){
									oUl.style.left=-(aLi.length/2)*(aLi[0].offsetWidth+52)+'px';
									iNow2=-(aLi.length/2);
								}
						});
					},2000);
					
			}
		
		rBtn.onclick=function(){
				iNow3=iNow2||iNow;
				if(timer2){
					clearInterval(timer2);
				}
				if(timer){
					clearInterval(timer);
				}
				timer3=setInterval(function(){
					iNow3--;
					startMove(oUl,{left:196*iNow3},function(){
							if(oUl.offsetLeft<=-(aLi.length/2)*(aLi[0].offsetWidth+52)){
									oUl.style.left=0+'px';
									iNow3=0;
								}
						});
					
					},2000);                          
			}
		
		//向左滚动函数
		
	}
