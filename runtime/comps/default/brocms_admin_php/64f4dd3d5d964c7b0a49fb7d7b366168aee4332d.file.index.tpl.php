<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 10:07:00
         compiled from "./admin/views/default\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2568551ed2adc047f91-33784377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f4dd3d5d964c7b0a49fb7d7b366168aee4332d' => 
    array (
      0 => './admin/views/default\\index\\index.tpl',
      1 => 1374541931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2568551ed2adc047f91-33784377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ed2adc0c1c99_53199080',
  'variables' => 
  array (
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed2adc0c1c99_53199080')) {function content_51ed2adc0c1c99_53199080($_smarty_tpl) {?><html>
	<head>
		<title>管理平台</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="309Lab" />
	</head>

	<frameset rows="61,*,24" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="200, *">
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu" name="menu" noresize="noresize" scrolling="no" />
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" name="main" noresize="noresize" scrolling="yes"/>
		</frameset>
  		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/bottom" name="bottom" scrolling="No" noresize="noresize" />
	</frameset>
</html>


<?php }} ?>