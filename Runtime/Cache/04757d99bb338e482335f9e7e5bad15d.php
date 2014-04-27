<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link rel="stylesheet" type="text/css" href="css/index_red.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<script src="js/index_1.js"></script>
<script src="js/move.js"></script>
</head>

<body>
<div id="wrap">
    <div id="head">
        <div id="logo">
            <span><img src="images/logo.png" /></span>
        </div>
        <div id="nav">
            <?php
 $path=$_GET['path']."menu.xml"; $root=simplexml_load_file($path); foreach ($root->thread as $v) { if($v->pid==0){ ?>
                        <a href="<?php echo $v->url; echo "?name=".$v->name.'&path='.$_GET['path']; ?>"><?php echo $v->name;?></a>
                        <span></span>
                        <?php
 } } ?>
<!--             <a href="#">首页</a>
            <span></span>
            <a href="#">公司信息</a>
            <span></span>
            <a href="#">新闻动态</a>
            <span></span>
            <a href="#">产品中心</a>
            <span></span>
            <a href="#">联系我们</a> -->
        </div>
        <div id="nav_bg" style="left:59px;">
        	<div>
                <?php
 foreach ($root->thread as $v) { if($v->pid==0){ ?>
                         <a href="<?php echo $v->url; echo '?name='.$v->name.'&path='.$_GET['path']; ?>"><?php echo $v->name;?></a>
                        <span></span>
                        <?php
 } } ?>
            <!-- <a href="#">首页</a>
            <span></span>
            <a href="#">公司信息</a>
            <span></span>
            <a href="#">新闻动态</a>
            <span></span>
            <a href="#">产品中心</a>
            <span></span>
            <a href="#">联系我们</a> -->
            </div>
        </div>
    </div>
    <div id="banner">
    	<ul>
        	<li><img src="images/carone.png" /></li>
        	<li><img src="images/cartwo.png" /></li>
        	<li><img src="images/carthree.png" /></li>
        </ul>
        <div id="btn">
            <a href="#" class="active"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </div>
    
    
    <div id="left">
            <span class="title">新闻动态</span>
            <a href="#" class="title1">更多>></a>
            <ul id="news">
            	<li>
                	<a href="#">本年度将推出帝豪5A7系列产品！</a>
                	<span>2014-2-1</span>
                </li>
            	<li>
                	<a href="#">本年度将推出帝豪5A7系列产品！</a>
                	<span>2014-2-1</span>
                </li>
            	<li>
                	<a href="#">本年度将推出帝豪5A7系列产品！</a>
                	<span>2014-2-1</span>
                </li>
            	<li>
                	<a href="#">本年度将推出帝豪5A7系列产品！</a>
                	<span>2014-2-1</span>
                </li>
            	<li>
                	<a href="#">本年度将推出帝豪5A7系列产品！</a>
                	<span>2014-2-1</span>
                </li>
            	<li>
                	<a href="#">本年度将推出帝豪5A7系列产品！</a>
                	<span>2014-2-1</span>
                </li>
            </ul>
    </div>
    
    
    <div id="right">
            <span class="title">公司简介</span>
            <a href="#" class="title1">详细>></a>
            <span id="article">
&nbsp;&nbsp;典雅的设宝马汽车宝马汽车计是整个
 三十年代后期一系列轿车的一个特点，
 327是所有宝马车中外观最漂亮的车型之
 一，它是早期326的双门跑车版。因为公
 司决定首先推出328双座车，所以327推迟
 到1937年才推出，它是装有328跑车
 的2公升发动机的高性能车型...<a href="#">详情+</a>       
 		     </span>
    </div>
    
    
    <div id="product_show">
            <span class="title">产品展示</span>
            <a href="#" class="title1">更多>></a>
    	<ul>
        	<li><img src="images/product_1.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        	<li><img src="images/product_2.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        	<li><img src="images/product_3.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        	<li><img src="images/product_4.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        	<li><img src="images/product_5.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        	<li><img src="images/product_1.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        	<li><img src="images/product_2.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        	<li><img src="images/product_3.png" />
            	<a href="#"><span>帝豪5A7系列产品<br />价格：18W</span></a>
            </li>
        </ul>
    </div>
    
    
    <div id="footer">
    	<div class="link">
        	<a href="#">关于我们</a><span></span>
        	<a href="#">人才招聘</a><span></span>
        	<a href="#">友情链接</a><span></span>
        	<a href="#">联系我们</a>
        </div>
    	<div class="copyright">版权所有：大众汽车公司 ©2004 Microsoft Corporation.</div>
    	<div class="support">技术支持：杨枫工作室</div>
    </div>
    
</div>
</body>
</html>