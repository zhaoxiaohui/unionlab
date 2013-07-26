<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 09:37:22
         compiled from "./admin/views/default\column\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1119851ef2fd257d377-79225264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059428808048ead29caa752658c047e0631a8ff1' => 
    array (
      0 => './admin/views/default\\column\\add.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1119851ef2fd257d377-79225264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'jz' => 0,
    'post' => 0,
    'app' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef2fd2640728_10922879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef2fd2640728_10922879')) {function content_51ef2fd2640728_10922879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>添加栏目</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">上级栏目</span>
							<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
	<label for="jz"><input id="jz" type="checkbox" name="jz" <?php echo $_smarty_tpl->tpl_vars['jz']->value;?>
 value="1"> 记住选项</label>
						</li>
					<li class="dark-row">
						<span class="col_width">栏目标题<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="title" size="20" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
					</li>
					<li class="light-row">
						<span class="col_width" style="margin-top:30px">栏目描述</span>
						<textarea class="text-box" name="description" cols="30" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value['description'];?>
</textarea>
					</li>
					<li class="dark-row">
					
						<span class="col_width" style="margin-top:45px">栏目图片<span class="red_font">*</span></span>
						<input type="hidden" id="picId" name="picid" value="">
						<img  style="cursor:pointer;"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')"  src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/no_image.gif" alt="图片预览" width=100 height="100" id="pic">		
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button"  class="button"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')" value="浏览...">	
				
					</li>
					<li class="light-row">
						<span class="col_width">是否审核</span>
						<input type="radio"  name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']==1){?>checked<?php }?>  value="1"> 需要
						<input type="radio"  name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']==0){?>checked<?php }?> value="0"> 没必要
					</li>	
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>


<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>