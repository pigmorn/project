<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>首页</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" type="text/css" href="css/reset.css" />

<link href="css/index_red.css"  rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/index_2.js"></script>
<script src="js/move.js" type="text/javascript"></script>
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/jqFancyTransitions.1.8.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#banner').jqFancyTransitions({ 
        effect: 'zipper', // wave, zipper, curtain
        width: 940, // width of panel
        height: 324, // height of panel
        strips: 15, // number of strips
        delay: 3000, // delay between images in ms
        stripDelay: 20, // delay beetwen strips in ms
        titleOpacity: 0.8, // opacity of title
        titleSpeed: 2000, // speed of title appereance in ms
        position: 'curtain', // top, bottom, alternate, curtain
        direction: 'fountainAlternate', // left, right, alternate, random, fountain, fountainAlternate
        navigation: true, // prev and next navigation buttons
        links: false // show images as links
    });
})
</script>
</head>
<body>
    <div id="header">
    
    	<div id="header_top">
    		<div id="header_center">
            	<img src="images/styletwoimages/logo.png">
                <span class="header_word">
                企业自动生成系统
                </span>
           	    <input type="text" id="search" value="Search...">
                <a href="#"></a>
            </div>
        </div>
        
    	<div id="nav">
        	<ul>
            <?php
                $path=$_GET['path']."menu.xml";
                $root=simplexml_load_file($path);
                foreach ($root->thread as $v) {
                    if($v->pid==0){

                        ?>
                        <li><a href="#"><?php echo $v->name;?></a></li>
                        <span></span>
                        <?php
                    }
                 
                }

            ?>
<!--             
            	<li><a href="#">公司信息</a></li>
            	<li><a href="#">新闻动态</a></li>
            	<li><a href="#">产品中心</a></li>
            	<li><a href="#">联系我们</a></li> -->
            </ul>
        </div>
        
    </div>


    <div id="wrap">
		<div class="focus">
    	<div id="banner">
        	<img  width:"940" height="324"src="images/styletwoimages/banner1.png">
        	<img  width:"940" height="324"src="images/styletwoimages/banner2.png">
        	<img  width:"940" height="324"src="images/styletwoimages/banner3.png">
        </div>
        </div>

    	<div id="left">
        
    		<div id="left_top">
            	<ul>
                	<li><a href="#">产品系列一</a></li>
                	<li><a href="#">产品系列二</a></li>
                	<li><a href="#">产品系列三</a></li>
                	<li><a href="#">产品系列四</a></li>
                	<li><a href="#">产品系列五</a></li>
                </ul>
            </div>
            
    		<div id="left_bottom">
            	<div><img src="images/styletwoimages/connect.png"></div>
        		<span class="contect">地址：XX省XX市XX区</span>    
        		<span class="contect">电话：0571-98765432</span>    
        		<span class="contect">传真：0571-98765430</span>    
        		<span class="contect">传真：0571-98765435</span>    
        		<span class="contect">邮箱：boss@mail.com</span>    
        		<span class="contect">邮编：31245</span>    
            </div>
    	
        </div>

    	<div id="right">
        
    		<div id="right_top">
            	<span class="title_bg1"><img src="images/styletwoimages/gongsijianjie.png"></span>
    			<div id="right_top_left">
                	<p>公司位于工业园区, 处于繁华的国道之畔，占地面积三千六百平方米，
                    建筑面积五千五百平方米。自1990年成立以来公司不断发展壮大，
                    逐步发展成品牌为龙头、以市场需求为导向的食品销售企业。
                    公司不断探索商业模式转型，加速创新突破发展，销售规模得以较快扩大。
                    公司不断探索商业模式转型，加速创新突破发展，销售规模得以较快扩大。
                    采用国内先进设备，最新引进的现代化的生产流水线，一直本着质量第一，
                    信誉至上的经营理念，使得我们的产品得到了广大顾客的一致好评，产品销往全国各地，企业也得到迅速的发展。</p>
                </div>
                
                <span class="title_bg2"><img src="images/styletwoimages/zuixindongtai.png"></span>
    			<div id="right_top_right">
                	<ul>
                    	<li><a href="#">3月"企业文化月"活动预览</a></li>
                    	<li><a href="#">3月"企业文化月"活动预览</a></li>
                    	<li><a href="#">3月"企业文化月"活动预览</a></li>
                    	<li><a href="#">3月"企业文化月"活动预览</a></li>
                    	<li><a href="#">3月"企业文化月"活动预览</a></li>
                    	<li><a href="#">3月"企业文化月"活动预览</a></li>
                    	<li><a href="#">3月"企业文化月"活动预览</a></li>
                    </ul>
                </div>
    		</div>
            
    		<div id="right_center">
            	<ul>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list1.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list2.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list3.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list1.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list3.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list2.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list3.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                	<li>
                    	<a href="3"><img src="images/styletwoimages/pro_list2.png"></a>
                    	<span class="pro_name">Product Name</span>
                        <font>Price:<span class="pro_price">$12.99</span></font>
                    </li>
                </ul>
            </div>
            <hr width="700px" color="#999" size="1px">
            
    		<div id="right_bottom">
            	<img src="images/styletwoimages/teseproduct.png">
            	<div id="left_bg">
                	<div id="right_bg">
                    	<a  href="javascript:" id="btn_left"></a>
                    	<a  href="javascript:" id="btn_right"></a>
                        <div id="scroll_wrap">
                    	<ul id="scroll"> 
                        	<li>
                            	<a href="#">
                                	<img src="images/styletwoimages/tese_pro1.jpg">
                                	<span>Elegant MP3 player skin PSD download</span>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<img src="images/styletwoimages/tese_pro2.jpg">
                                	<span>Download shopping bag & icons (PSD & PNG)</span>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<img src="images/styletwoimages/tese_pro3.jpg">
                                	<span>High resolution abstract bokeh background</span>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<img src="images/styletwoimages/tese_pro1.jpg">
                                	<span>Elegant MP3 player skin PSD download</span>
                                </a>
                            </li>
                        	<li>
                            	<a href="#">
                                	<img src="images/styletwoimages/tese_pro2.jpg">
                                	<span>Download shopping bag & icons (PSD & PNG)</span>
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
    	
        </div>

    </div>


    <div id="footer">
    	<ul>
        	<li><a href="#">友情链接</a>&nbsp;|</li>
        	<li><a href="#">招纳贤士</a>&nbsp;|</li>
        	<li><a href="#">关于我们</a>&nbsp;|</li>
        	<li><a href="#">联系我们</a>&nbsp;|</li>
        	<li><a href="#">给我留言</a></li>
        </ul>
        <span>版权：某某公司某某版权</span>
        <span>技术支持：杨枫工作室</span>
    </div>
</body>
</html>