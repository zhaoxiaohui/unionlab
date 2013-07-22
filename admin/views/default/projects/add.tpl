<{include file="public/header.tpl"}>
		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->项目管理->添加项目</div>
			</div>	
			<{ include file="public/title.tpl" }>
		    <form name="article" method="post" action="<{$url}>/insert" enctype="multipart/form-data">
			<div class="msg-box">
				<ul class="viewmess">
					
					<li class="light-row">
						<span class="col_width">项目名字&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="proName" size="30" value="<{ $post.title }>" maxlength="40">
					</li>

					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">项目描述</span>
						<textarea class="text-box" name="proSum" cols="40" rows="4"><{ $post.summary }></textarea>&nbsp;&nbsp;小于100个汉字.
					</li>
				

					<li class="light-row">
                                            <span class="col_width">项目人员&nbsp;<span class = "red_font">*</span></span>
						<input type="text" class="text-box" name="proTeam" size="25" value="<{ $post.comefrom }>" maxlength="25">
					</li>
					<li class="dark-row">
						<span class="col_width">项目关键字&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="proKeyword" size="25" value="<{ $post.keyword }>" maxlength="20">&nbsp;&nbsp;用于文章搜索,多个请用逗号","隔开.
					</li>
		
                                        <li class="light-row-row">
                                            <span class="col_width" style="float:left;">上传项目文件 </span>
						<span id="apic" style="float:left !important;float:none;width:300px;">
						<input type="file" name="projects[]" ><br>
						</span>
                                            
                                        </li>
					
	
					<li class="light-row-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<{include file="public/footer.tpl"}>	


