<{ include file="public/header.tpl" }>
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
<{ include file="public/footer.tpl" }>

