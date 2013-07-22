<{include file="public/header.tpl"}>	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>项目管理>编辑项目</div>
			</div>	
		    <{ include file="public/title.tpl" }>
                 
		    <form  method="post" action="main.php?action=projects">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">项目名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<{ $list }>
				</ul>	
			</div>
                    </form>
		</div>
<{include file="public/footer.tpl"}>	


