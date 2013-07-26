<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 09:37:54
         compiled from "./admin/views/default\column\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2688151ef2ff20e9231-12053266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e3c3deea3c9e8149e7c3c08e9d1eae756eefba6' => 
    array (
      0 => './admin/views/default\\column\\mod.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2688151ef2ff20e9231-12053266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'select' => 0,
    'app' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef2ff21d0228_95422949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef2ff21d0228_95422949')) {function content_51ef2ff21d0228_95422949($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>修改栏目</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					<li class="light-row">
						<span class="col_width">上级栏目</span>
							<?php echo $_smarty_tpl->tpl_vars['select']->value;?>

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
						<input type="hidden" id="picId" name="picid" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['picid'];?>
">
						<input type="hidden"  name="picname" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['picname'];?>
">
		
						<img  style="cursor:pointer;"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')"  src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['post']->value['picname'];?>
" alt="图片预览" width=100 height="100" id="pic">		
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button"  class="button"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')" value="替换...">	
				
					</li>
					<li class="light-row">
						<span class="col_width">是否审核</span>
						<input type="radio"  name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']==1){?>checked<?php }?>  value="1"> 需要
						<input type="radio"  name="audit" <?php if ($_smarty_tpl->tpl_vars['post']->value['audit']==0){?>checked<?php }?> value="0"> 没必要
					</li>	
					<li class="dark-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button" value="修 改">&nbsp;&nbsp;
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