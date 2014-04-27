/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2014-03-19 09:34:10
 * @version $Id$
 */
window.onload=function(){
		var oInput=document.getElementById('search');
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
	}
