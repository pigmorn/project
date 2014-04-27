<?php
return array(
	'DB_DSN'=>'mysql://root:zhuchen@localhost:3306/templates',
	// '__PUBLIC__'=>__ROOT__.'/'.APP_NAME.'/Public',
	'__PUBLIC__'=>'../../Pub',
	'__FORWARDURL__'=>__ROOT__.'/'.APP_NAME.'/',
	'__ACTIONXML__'=>'./Pub/xml/',
	'__TEMPXML__'=>'../../../xml/',
	'DB_PREFIX'=>'tmp_',// 数据库表前缀
	'__img__'=>__ROOT__.'/Public/upload/images/',
	'__ACTION__'=>__ROOT__.'/Apps/Lib/Action/',
	'myClass'=>  LIB_PATH.'pclZip.class.php',
	'APP_DEBUG'=>'true',
);
?>