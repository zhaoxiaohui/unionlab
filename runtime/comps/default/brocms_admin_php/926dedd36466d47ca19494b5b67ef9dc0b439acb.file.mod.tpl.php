<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 10:10:16
         compiled from "./admin/views/default\article\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2894551ede608022dd8-18359273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926dedd36466d47ca19494b5b67ef9dc0b439acb' => 
    array (
      0 => './admin/views/default\\article\\mod.tpl',
      1 => 1374124940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2894551ede608022dd8-18359273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'select' => 0,
    'app' => 0,
    'ck' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ede60811dd07_93470763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ede60811dd07_93470763')) {function content_51ede60811dd07_93470763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
		  	<div class="head-dark-box">
				<div class="tit">后台管理->文章管理->修改文章</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					<li class="dark-row">
						<span class="col_width">文章类别</span>
						  <?php echo $_smarty_tpl->tpl_vars['select']->value;?>
	
					</li>
					<li class="light-row">
						<span class="col_width">文章标题&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" maxlength="40"> &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" class="button" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/play/add/aid/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'" value="设置幻灯播放">
					</li>

					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">文章摘要</span>
						<textarea class="text-box" name="summary" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['post']->value['summary'];?>
</textarea>&nbsp;&nbsp;小于100个汉字.
					</li>

					<li class="light-row">
						<span class="col_width">文章来源</span>
						<input type="text" class="text-box" name="comefrom" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['comefrom'];?>
" maxlength="25">
					</li>
					<li class="dark-row">
						<span class="col_width">关键字&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="keyword" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keyword'];?>
" maxlength="20">&nbsp;&nbsp;用于文章搜索,多个请用逗号","隔开.
					</li>
					<li class="light-row">
						<span class="col_width">是否推荐</span>
						<input type="radio"  name="recommend"<?php if ($_smarty_tpl->tpl_vars['post']->value['recommend']==1){?>checked<?php }?>  value="1"> 推荐
						<input type="radio"  name="recommend" <?php if ($_smarty_tpl->tpl_vars['post']->value['recommend']==0){?>checked<?php }?> value="0"> 不推荐
					</li>
					<li class="dark-row">
						<span class="col_width">是否充许评论</span>
						<input type="radio"  name="allow"<?php if ($_smarty_tpl->tpl_vars['post']->value['allow']==1){?>checked<?php }?>  value="1"> 充许
						<input type="radio"  name="allow" <?php if ($_smarty_tpl->tpl_vars['post']->value['allow']==0){?>checked<?php }?> value="0"> 不充许
					</li>
				
					<li class="light-row" style="margin:0px; padding:0px">
						<textarea cols="80" rows="10" name="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
						<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

					</li>
				
	
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button"  value="修 改">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="if(confirm('确定要删除吗?')) window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'" class="button" value="删 除">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>