<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 14:32:37
         compiled from "./home/views/cial\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1002651ef7505c66041-86801122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50ac646498de35582d7f1d999bc4531423a07422' => 
    array (
      0 => './home/views/cial\\user\\index.tpl',
      1 => 1373939660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1002651ef7505c66041-86801122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef7505d08122_55972895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef7505d08122_55972895')) {function content_51ef7505d08122_55972895($_smarty_tpl) {?><html>
	<head>
		<title>用户中心</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="Author" content="高洛峰，细说PHP" />
	</head>

	<frameset rows="61,*" cols="*" framespacing="0" frameborder="no" border="0">
 		<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/top" name="top" scrolling="no" noresize="noresize" />
		<frameset cols="280, *">
  			<frame src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/uid/<?php echo $_GET['uid'];?>
" name="menu" noresize="noresize" scrolling="no" />
			
			<?php if ($_GET['message']==1){?>					
				<frame src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/index/uid/<?php echo $_GET['uid'];?>
" name="main" noresize="noresize" scrolling="yes"/>
			<?php }else{ ?>
				<frame src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/dynamic/index/uid/<?php echo $_GET['uid'];?>
" name="main" noresize="noresize" scrolling="yes"/>
			<?php }?>
  		
		</frameset>
	</frameset>
</html>


<?php }} ?>