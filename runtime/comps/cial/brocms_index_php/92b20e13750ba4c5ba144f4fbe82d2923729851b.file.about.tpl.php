<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 23:27:38
         compiled from "./home/views/cial\index\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:717251ef3bec138580-03564815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b20e13750ba4c5ba144f4fbe82d2923729851b' => 
    array (
      0 => './home/views/cial\\index\\about.tpl',
      1 => 1374679642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '717251ef3bec138580-03564815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef3bec1b0a96_85660514',
  'variables' => 
  array (
    'public' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef3bec1b0a96_85660514')) {function content_51ef3bec1b0a96_85660514($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<style type="text/css">
body, html{width: 100%;height: 100%;overflow: hidden;margin:0;}
#allmap {height: 100%;overflow: hidden;}

dl,dt,dd,ul,li{
    margin:0;
    padding:0;
    list-style:none;
}
dt{
    font-size:14px;
    font-family:"微软雅黑";
    font-weight:bold;
    border-bottom:1px dotted #000;
    padding:5px 0 5px 5px;
    margin:5px 0;
}
dd{
    padding:5px 0 0 5px;
}
li{
    line-height:28px;
}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=75a817d8bc215a7ad70f23c5a437281a "></script>
<script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
<link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />

<title>SearchInfoWindow</title>
</head>
<body>

<div id="allmap" style="overflow:hidden;zoom:1;position:relative;">	
    <div id="map" style="height:100%;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;"></div>
   
    <div id="panelWrap" style="width:0px;position:absolute;top:0px;right:0px;height:100%;overflow:auto;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;">
        <div style="width:20px;height:200px;margin:-100px 0 0 -10px;color:#999;position:absolute;opacity:0.5;top:50%;left:50%;">此处用于展示结果面板</div>
        <div id="panel" style="position:absolute;"></div>
    </div>
</div>



<script type="text/javascript">
    var map = new BMap.Map('map');
    var poi = new BMap.Point(116.367538,39.964225);
    map.centerAndZoom(poi, 16);
    map.enableScrollWheelZoom();
    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}));  //右上角，仅包含平移和缩放按钮
    map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT, type: BMAP_NAVIGATION_CONTROL_PAN}));  //左下角，仅包含平移按钮
    map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, type: BMAP_NAVIGATION_CONTROL_ZOOM}));  //右下角，仅包含缩放按钮

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
    '<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/map_logo.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
    '联系人：赵方<br/>邮箱：zfsse@bupt.edu.cn<br/>地址：北京市海淀区西土城路十号北京邮电大学明光楼309<br/><a href="/brocms/index.php">返回网站</a>' +
  '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
	searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
			title  : "移动计算与智能感知技术研究中心",      //标题
			width  : 290,             //宽度
			height : 105,              //高度
			panel  : "panel",         //检索结果面板
			enableAutoPan : true,     //自动平移
			searchTypes   :[
				BMAPLIB_TAB_SEARCH,   //周边检索
				BMAPLIB_TAB_TO_HERE,  //到这里去
				BMAPLIB_TAB_FROM_HERE //从这里出发
			]
		});
    var marker = new BMap.Marker(poi); //创建marker对象
    marker.enableDragging(); //marker可拖拽
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    marker.addEventListener("click", function(e){
	    searchInfoWindow.open(marker);
    })
    map.addOverlay(marker); //在地图中添加marker
    searchInfoWindow.open(marker); //在marker上打开检索信息串口
    $("close").onclick = function(){
        searchInfoWindow.close();
    }
    $("open").onclick = function(){
		var enableSendToPhone = false;
        if ($("enableSendToPhone").checked) {
            enableSendToPhone = true;
        }
		searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
			title  : "移动计算与智能感知技术研究中心",      //标题
			width  : 290,             //宽度
			height : 105,              //高度
			panel  : "panel",         //检索结果面板
			enableAutoPan : true,     //自动平移
			enableSendToPhone: enableSendToPhone, //是否启用发送到手机
			searchTypes   :[
				BMAPLIB_TAB_SEARCH,   //周边检索
				BMAPLIB_TAB_TO_HERE,  //到这里去
				BMAPLIB_TAB_FROM_HERE //从这里出发
			]
		});
        if ($("enableAutoPan").checked) {
            searchInfoWindow.enableAutoPan();
        } else {
            searchInfoWindow.disableAutoPan();
        };
        searchInfoWindow.open(marker);
    }
    $("show").onclick = function(){
        searchInfoWindow.show();
    }
    $("hide").onclick = function(){
        searchInfoWindow.hide();
    }
    $("getPosition").onclick = function(){
        var position = searchInfoWindow.getPosition();
        alert("经度：" + position.lng + "；纬度：" + position.lat);
    }
    $("setValue").onclick = function(){
        searchInfoWindow.setPosition(new BMap.Point($("lng").value, $("lat").value));
        searchInfoWindow.setTitle($("title").value);
        searchInfoWindow.setContent($("content").value);
    }
    $("getContent").onclick = function(){
        alert(searchInfoWindow.getContent());
    }
    $("getTitle").onclick = function(){
        alert(searchInfoWindow.getTitle());
    }
    function $(id){
        return document.getElementById(id);
    }

//样式1
var searchInfoWindow1 = new BMapLib.SearchInfoWindow(map, "信息框1内容", {
    title: "信息框1", //标题
    panel : "panel", //检索结果面板
    enableAutoPan : true, //自动平移
    searchTypes :[
        BMAPLIB_TAB_FROM_HERE, //从这里出发
        BMAPLIB_TAB_SEARCH   //周边检索
    ]
});
function openInfoWindow1() {
    searchInfoWindow1.open(new BMap.Point(116.319852,40.057031));
}

//样式2
var searchInfoWindow2 = new BMapLib.SearchInfoWindow(map, "信息框2内容", {
    title: "信息框2", //标题
    panel : "panel", //检索结果面板
    enableAutoPan : true, //自动平移
    searchTypes :[
        BMAPLIB_TAB_SEARCH   //周边检索
    ]
});
function openInfoWindow2() {
    searchInfoWindow2.open(new BMap.Point(116.324852,40.057031));
}

//样式3
var searchInfoWindow3 = new BMapLib.SearchInfoWindow(map, "信息框3内容", {
    title: "信息框3", //标题
    width: 290, //宽度
    height: 40, //高度
    panel : "panel", //检索结果面板
    enableAutoPan : true, //自动平移
    searchTypes :[
    ]
});
function openInfoWindow3() {
    searchInfoWindow3.open(new BMap.Point(116.328852,40.057031)); 
}


    var isPanelShow = false;
    //显示结果面板动作
    $("showPanelBtn").onclick = function(){
        if (isPanelShow == false) {
            isPanelShow = true;
            $("showPanelBtn").style.right = "300px";
            $("panelWrap").style.width = "300px";
            $("map").style.marginRight = "300px";
            $("showPanelBtn").innerHTML = "";
        } else {
            isPanelShow = false;
            $("showPanelBtn").style.right = "0px";
            $("panelWrap").style.width = "0px";
            $("map").style.marginRight = "0px";
            $("showPanelBtn").innerHTML = "";
        }
    }
</script>


</body>
</html>
<?php }} ?>