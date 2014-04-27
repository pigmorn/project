<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻页</title>
<link rel="stylesheet" type="text/css" href="css/xinwen_styleone1.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<script src="js/xinwen1.js"></script>

</head>

<body>
	<div id="wrap">
         <div id="head">
                <div id="logo">
                    <span><img src="images/logo.png" /></span>
                </div>
                <div id="nav">
             <?php
                $path=$_GET['path']."menu.xml";
                $root=simplexml_load_file($path);
                foreach ($root->thread as $v) {
                    if($v->pid==0){

                        ?>
                        <a href="<?php echo $v->url;
                        echo "?name=".$v->name.'&path='.$_GET['path']; ?>"><?php echo $v->name;?></a>
                        <span></span>
                        <?php
                    }
                 
                }

            ?>
                </div>
           	    <div id="nav_bg" style="left:59px;">
                    <div>
                    <?php
                foreach ($root->thread as $v) {
                    if($v->pid==0){

                        ?>
                         <a href="<?php echo $v->url;
                        echo '?name='.$v->name.'&path='.$_GET['path']; ?>"><?php echo $v->name;?></a>
                        <span></span>
                        <?php
                        }
                 
                    }

            ?>
                    </div>
                </div>
            </div>
        <div id="banner">
            <img src="images/banner.jpg" />
   	    </div> 
          
        
        <div id="left">
        	<span class="title"><?php echo $_GET['name'];?></span>
             <ul>
              
            <?php
                $path=$_GET['path']."single.xml";
                $root=simplexml_load_file($path);

                 foreach ($root->thread as $v) {
                      if($v->name==$_GET['name'])
                       {
                        foreach ($root->thread as $n) {
                            $id=(int)$v->id;
                            $pid=(int)$n->pid;
                            if($id==$pid){
                                ?>
                                  <li><a href="<?php echo $n->url;
                        echo '?name='.$v->name.'&name2='.$n->name.'&path='.$_GET['path']; ?>">
                        <?php echo $n->name;
                        ?></a></li>
                            <?php
                            }     
                        }   
                       

            ?>
            </ul>
        </div>
          
       	<div id="right">
        	<span></span>
            
            <div id="content">
                <?php
                   
                    

                ?>
            	<span id="title">
                    <?php
                    echo $v->title;
                    ?></span>
                <span class="publish">
                	发布时间：
                	<span class="time">2014-4-11</span>
                </span>
                <div class="neirong">
                 <?php
                    echo $v->content;
                       }
                   }
                    
                    ?>
                </div>
            </div>
            
        </div>   
   
        
    </div>
        <div id="footer">
        	<a href="#">友情链接</a>
        	<a href="#">人才招聘</a>
        	<a href="#">联系我们</a><br />
        	<span>版权所有：大众汽车公司 ©2004 Microsoft Corporation.</span>
            <span>技术支持：杨枫工作室</span>
        </div>
</body>
</html>
