<html>
	<head>
		<title><{ $appname|truncate:200 }></title>
		<meta name="Author" content="309lab" />
		<meta name="Keywords" content="<{$keywords}>" />
		<meta name="description" content="<{$description}>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/global.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/layout.css">
		<link rel="stylesheet" type="text/css" href="<{$res}>/css/print.css">
		<script src="<{$public}>/js/ajax3.0.js"></script>
		<script src="<{$res}>/js/common.js"></script>
		<script src="<{$res}>/js/win.js"></script>
		
	</head>
	<body>
		<div id="content">
			<div id="header">
				<div id="top">
					<div id="top_left">
						<{nocache}>
						<{ if $smarty.session.login eq 1 }>
          						&nbsp;欢迎回来 <b><a href="<{$app}>/user/index/uid/<{$smarty.session.id}>"><{ $smarty.session.username }></a></b>&nbsp;｜&nbsp;<a href="<{$app}>/login/logout">退出</a>&nbsp;｜&nbsp;<span class="<{if $mtotal gt 0}>mail2<{else}>mail1<{/if}>"><a href="<{$app}>/user/index/uid/<{$smarty.session.id}>/message/1">站内信[<span style="color:#A00"><{$mtotal}></span>]</a></span>
						<{ else }>
						<form action="<{$app}>/login" method="post">
							&nbsp;
							用户名:<input class="inputheight" name="username" type="text" size="10">&nbsp;
							密码:<input class="inputheight" name="userpwd" type="password" size="10">
							<input type="submit" class="button"  name="loginsubmit" value="登录">&nbsp;
							<a href="<{$app}>/login/register"><span style="color:red">注册</span></a>
						</form>
						<{ /if }>
						<{/nocache}>
					</div>

					<div id="top_right">
						<form action="<{$app}>/search/index" method="post">
							<input type="radio" <{ if $serType eq "title" or $serType eq null }> checked <{ /if }> name="serType" value="title">标题
							<input type="radio" <{ if $serType eq "content"}> checked <{ /if }> name="serType" value="content">内容
							<input type="radio" <{ if $serType eq "keyword"}> checked <{ /if }> name="serType" value="keyword">关键字
							<input type="text"  name="search" size="15" value="<{ $search }>" maxlength="255">
							<input type="submit"  class="button"  value="搜索">&nbsp;
						</form>
					</div>
				</div>
				
				<div class="box_head">
					<a href="<{$app}>"><img  src="<{$public}>/images/logo.jpg"></a>
				</div>
				
				<div class="nav"> </div>
			</div>	
			<div id="menu">
				<ul>
					<li><a href="<{$app}>">首页</a></li><li class="menudiv"> </li>
				
					<{ section name=li loop=$menu }>
						<li><a href="<{$app}>/list/index/pid/<{ $menu[li].id }>"><{ $menu[li].title }></a></li><li class="menudiv"> </li>
					<{ /section }>
					<li><a href="http://bbs.byr.cn/index" target="_blank">北邮人论坛</a></li>
				</ul>			
			</div>
			<div class="nav"> </div>
			<div id="container">
			

<div class="line1">
	<div id="col_1">	
		       	<div class="dt"><strong>系统公告</strong></div>
        		<div class="dd dot">
          			<ul>
					<{section loop=$notice name="nls" max=10}>
					
						<li><a href="<{$url}>/notice/id/<{$notice[nls].id}>" target="_blank" style="color:#<{$notice[nls].color}>"><{$notice[nls].title}></a></li>
						
					<{ sectionelse }>
						<li>目前没有任何公告</li>
					<{ /section }>
          			</ul>
			</div>
	</div>

	<div id="col_2">
			<div id="pwSlidePlayer" class="pwSlide cc" onmouseover="pwSlidePlayer('pause');" onmouseout="pwSlidePlayer('goon');">
			<{section name=pic loop=$play max=6}>
			
				<div id="Switch_<{$smarty.section.pic.index}>" <{ if $smarty.section.pic.first ne true }>style="display:none;"<{/if}>>
                       		 	<a href="<{$app}>/article/index/aid/<{$play[pic].aid}>" target="_blank"><img src="<{$public}>/uploads/<{$play[pic].picname}>" />
						<h3><{$play[pic].title}></h3>
				 	</a>
                		</div>
			<{ sectionelse }>
				<div id="Switch_0" >
                       			 <a href="http://bbs.lampbrother.net" target="_blank"><img src="<{$public}>/images/BUPT_LOGO.gif" />
						<h3>北邮欢迎你！</h3>
				 	</a>
                		</div>
			<{/section}>
				<div class="pwSlide-bg"></div>
				<ul id="SwitchNav"></ul>
			</div>
			<div class="c"></div>
			<script src="<{$res}>/js/player.js"></script>
			<script>pwSlidePlayer('play',1);</script>

	</div>

	<div id="col_3">
    			<div id="jh" class="dt"><strong><h3 class="cview" onmouseover="show(0)">强烈推荐</h3> <h3 onmouseover="show(1)">本月热点</h3> <h3 onmouseover="show(2)">最近更新</h3></strong></div>
			<div id="jhc">
        		<div class="dd dot">
          			<ul>
					<{ section name=rec loop=$recommends max=10 }>
						<li><a href="<{$app}>/article/index/aid/<{ $recommends[rec].id }>"><{ $recommends[rec].title|truncate:17}></a> <span style="font-size:10px">(<span class="redh"><{$recommends[rec].recommend}></span>人推荐)</span></li>
					<{ sectionelse }>
						<li>目前没有任何推荐文章</li>
					<{ /section }>
          			</ul>
			</div>
        		 <div class="dd dot" style="display:none">
          			<ul>
					<{ section name=hot loop=$hots max=10 }>
						<li><a href="<{$app}>/article/index/aid/<{ $hots[hot].id }>"><{ $hots[hot].title|truncate:17}></a>&nbsp;&nbsp;<span style="font-size:10px">(浏览<span class="redh"><{$hots[hot].views}></span>次)</span></li>
					<{ sectionelse }>
						<li>目前没有任何热门文章</li>
					<{ /section }>
          			</ul>
			</div>
			<div class="dd dot" style="display:none">
            			<ul>
					<{ section name=new loop=$news max=10 }>
						<li><a href="<{$app}>/article/index/aid/<{ $news[new].id }>"><{ $news[new].title|truncate:17 }></a></li>
					<{ sectionelse }>
						<li>目前没有任何文章更新</li>
					<{ /section }>
          			</ul>
			</div>
			</div>
	</div>

		<script>
			var h3s=document.getElementById("jh").getElementsByTagName("h3");
			var jhcs=document.getElementById("jhc").getElementsByTagName("div");
		
			function show(num) {
				for(var i=0; i<h3s.length; i++){
					if(num==i){
						h3s[num].className="cview";
						jhcs[num].style.display="block";
					}else{
						h3s[i].className="";
						jhcs[i].style.display="none";
					}
				}
			}
		</script>
</div>
		

		<{ section name=col loop=$cols }>
			
			<div class="<{if $smarty.section.col.index mod 3 eq 0}>mbox1<{elseif $smarty.section.col.index mod 3 eq 1}>mbox2<{else}>mbox3<{/if}>">
				
       				<div class="dt"><strong><a href="<{$app}>/list/index/pid/<{ $cols[col].id }>"><{ $cols[col].title|truncate:25 }></a></strong><span class="more"><a href="<{$app}>/list/index/pid/<{ $cols[col].id }>">更多...</a></span></div>
        			<div class="dd">
					<{if $smarty.section.col.index mod 3 eq 1}>
					<div class="left">
						<a href="<{$app}>/list/index/pid/<{ $cols[col].id }>"><img src="<{$public}>/uploads/<{ $cols[col].imgname }>" border="0" width="80" height="80"></a>
						<{ if $cols[col].subcol ne null }>
							<ul>
								<{ section name=sub loop=$cols[col].subcol max=4 }>
									<li><a href="<{$app}>/list/index/pid/<{ $cols[col].subcol[sub].id }>">&nbsp;&nbsp;&nbsp;<{ $cols[col].subcol[sub].title }></a></li>
								<{ /section }>
							</ul>
						<{ /if }>
					</div>
					<{/if}>
					<div class="right dot">
						<ul>
							<{ section name=article loop=$cols[col].art max=10 }>
								<li><a href="<{$app}>/article/index/aid/<{ $cols[col].art[article].id }>"><{ $cols[col].art[article].title|truncate:25 }></a></li>
							<{ sectionelse }>
								<li>该栏目中没有任何文章</li>
							<{ /section }>
						</ul>
					</div>
					
       				</div>
			
       		 	</div>
		
		<{ /section }>
	<div class="nav"> </div>
	<div id="link">
       		<div class="dt"><strong><span>友情链接</span></strong></div>
        	<div class="dd">
               		<ul>
				<{ section name=ls loop=$links }>
					<li><a href="<{ $links[ls].url }>" target="_blank">
						<{ if $links[ls].list }>
							<img height="40" alt="<{ $links[ls].webname }>" src="<{$public}>/uploads/logos/<{ $links[ls].logo }>" border="0" >
						<{else}>
							<{ $links[ls].webname }>
						<{/if}>

					</a></li>
				<{ /section }>
          		</ul>
		</div>
      	 </div>
	<div class="nav"> </div>
	
				</div>
			<div id="footer">
				<a href="<{$app}>/index/about" target="_blank">联系我们</a> ┆ <a href="<{$root}>/admin.php">管理登录</a> ┆ <a href="/brocms/index.php/login/register">会员注册</a><br>
				Copyright &copy; 2008-2012 移动计算与智能感知技术研究中心</a>. All rights reserved<br>
				Powered by 309<br>
				
			</div>
		</div>
		
	</body>
</html>
	
	
	
	