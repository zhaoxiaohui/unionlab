<?php
	define("DEBUG", 0);				      //开启调试模式 1 开启 0 关闭
	define("DRIVER", "pdo");		              //数据库的驱动，本系统支持pdo(默认)和mysqli两种
	//define("DSN", "mysql:host=localhost;dbname=brophp"); //如果使用PDO可以使用，不使用则默认连接MySQL
	define("HOST", "localhost");			      //数据库主机
	define("USER", "root");                               //数据库用户名
	define("PASS", "ss");                              //数据库密码
	define("DBNAME", "brocms");			      //数据库名
	define("TABPREFIX", "bro_");                           //数据表前缀
        //缓存开关 1开启，0为关闭
	define("CTIME", "3600");                       	       //缓存时间
	define("TPLPREFIX", "tpl");                           //模板文件的后缀名


	//$memServers = array("localhost", 11211);	     //使用memcache服务器
	
/*	//如果有多台memcache服务器可以使用二维数组
	$memServers = array(
			array("192.168.0.10", 11211),
			array("192.168.0.3", 11211),
			array("192.168.0.20", 11211),
			array("192.168.0.12", 11211)
		); */
	
      
	define("ARTICLE_PAGE_SIZE", "20");                                //后台文章每页显示的数目
	define("COMMENT_PAGE_SIZE", "20");                                //后台文章每页显示的数目
	define("PICTURE_PAGE_SIZE", "20");                                //后台图片每页显示的数目
	define("WATER","20130723184337_744.png");                                   //水印图片名称
	define("POSITION", "9");
	$styleList = array("default" => "默认风格", "cial"=> "时代经典");  	//系统风格数组
	$pictureSize = array('maxWidth' => 500, 'maxHeight' => 500); 		//定义生成后的大小
	$thumbSize = array('width' => 200, 'height' => 30);   			//定义缩略图的大小
	define("APP_NAME", "北邮-易鼎天成联合实验室");
	define("KEYWORD", "北邮，易鼎天成，联合实验室，移动互联网");
	define("DESCRIPTION", "移动计算与智能感知技术研究中心");
