<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 09:38:11
         compiled from "./admin/views/default\play\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322251ef3003988d41-38096404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a668da9f5e5bb2efdc2eb0a4def97409bf52050a' => 
    array (
      0 => './admin/views/default\\play\\add.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322251ef3003988d41-38096404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'article' => 0,
    'app' => 0,
    'public' => 0,
    'starttime' => 0,
    'endtime' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef3003a5d325_98832213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef3003a5d325_98832213')) {function content_51ef3003a5d325_98832213($_smarty_tpl) {?><!DOCTYPE html PUBLIC
          "-//W3C//DTD XHTML 1.0 Transitional//EN"
          "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>幻灯管理>添加幻灯</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="light-row">
						<span class="col_width">文章地址<span class="red_font">*</span></span>
						article/aid/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>

						<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
					</li>
					<li class="dark-row">
						<span class="col_width">幻灯标题<span class="red_font">*</span></span>
						 <input type="text" class="text-box" name="title" maxlength="80" size="40" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
					</li>
					<li class="light-row">
					
						<span class="col_width" style="margin-top:45px">幻灯图片<span class="red_font">*</span></span>
						<input type="hidden" id="picId" name="picid" value="">
						<img  style="cursor:pointer;"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')"  src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/no_image.gif" alt="图片预览" width=100 height="100" id="pic">		
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button"  class="button"  onclick="showWin('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/image/open')" value="浏览...">	
				
					</li>
					<li class="dark-row">
						<span class="col_width">开始日期<span class="red_font">*</span></span>
						<?php echo $_smarty_tpl->tpl_vars['starttime']->value;?>
 &nbsp;
					
					</li>
					<li class="light-row">
						<span class="col_width">失效日期<span class="red_font">*</span></span>
						<?php echo $_smarty_tpl->tpl_vars['endtime']->value;?>
 &nbsp;<input type="button" onclick="document.getElementById('endtime').value=''" class="button" value="清空">(设置留空则为长期显示)
					</li>

				
					<li class="dark-row">
						<span class="col_width">是否显示</span>
						
						<input type="radio" name="display"  <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="1"||$_smarty_tpl->tpl_vars['post']->value['display']==null){?> checked <?php }?> value="1"> 显示
						<input type="radio" name="display" <?php if ($_smarty_tpl->tpl_vars['post']->value['display']=="0"){?> checked <?php }?> value="0"> 不显示
					</li>
					<li class="light-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" class="button" value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>