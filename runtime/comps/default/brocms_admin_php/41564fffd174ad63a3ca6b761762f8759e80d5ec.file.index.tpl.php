<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 17:24:36
         compiled from "./admin/views/default\column\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1817651ee4bd438b708-33596081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41564fffd174ad63a3ca6b761762f8759e80d5ec' => 
    array (
      0 => './admin/views/default\\column\\index.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1817651ee4bd438b708-33596081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee4bd441b6c5_85201130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee4bd441b6c5_85201130')) {function content_51ee4bd441b6c5_85201130($_smarty_tpl) {?><script>
	var url='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
		<div id="main">
			<div class="head-dark-box">
				<div class="tit">内容管理>栏目管理>编辑栏目</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width2 width_font">栏目名称</span>
						<span class="width_font">操&nbsp;&nbsp;作</span>
					</li>
					<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

					<li class="light-row">
						<span class="col_width">
							<input type="submit" name="order" class="button" value="重新排序">
						</span>
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>