<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 09:40:26
         compiled from "./home/views/cial\index\notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2459951ef308af04ec1-27934184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17e71bd4c037151e71d265eaf2b44f9ec31ff037' => 
    array (
      0 => './home/views/cial\\index\\notice.tpl',
      1 => 1373939659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2459951ef308af04ec1-27934184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef308b05cd72_04555272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef308b05cd72_04555272')) {function content_51ef308b05cd72_04555272($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="article">
		<div class="dt"><div>系统公告</div></div>		
        	
		<div class="dd">
			<div id="title">
				<div class="nav"> </div>
				<h1><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['notice']->value['title'],100);?>
</h1>
				<div class="nav"> </div>
			</div>
		
			<div class="nav"> </div>
			<div id="ccont">
				<?php echo $_smarty_tpl->tpl_vars['notice']->value['content'];?>

			</div>
			<div class="nav"> </div>
		<div>	
	</div>
	</div>
	<div class="nav"> </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>