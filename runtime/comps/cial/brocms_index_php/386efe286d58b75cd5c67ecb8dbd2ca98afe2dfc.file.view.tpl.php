<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 15:07:50
         compiled from "./home/views/cial\message\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3243751f0cec6229fc7-26401708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386efe286d58b75cd5c67ecb8dbd2ca98afe2dfc' => 
    array (
      0 => './home/views/cial\\message\\view.tpl',
      1 => 1373939659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3243751f0cec6229fc7-26401708',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'user' => 0,
    'public' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0cec633e331_08526234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0cec633e331_08526234')) {function content_51f0cec633e331_08526234($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>站内信</h3>
	</div>
		
	<div class="ucontent">
		<div style="float:left;" class="uzcolor"><b><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index">收件箱</a></b><?php if ($_SESSION['sendmessage']==1){?> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/write">写消息</a><?php }?></div>
		
		
		<div style="float:left; width:100%;height:40px;line-height:40px">
			标题：&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</b>
		</div>

		<div style="float:left;width:100%;height:40px;float:left;margin-bottom:20px;">
			<div style="height:40px;width:40px;margin-right:20px;float:left;"><img src="<?php if ($_smarty_tpl->tpl_vars['user']->value['upic']){?><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['upic'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
.gif<?php }?>" width="40" height="40"></div>
			<div style="height:40px;float:left;">
				<a target="_top" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</a><br>				发表于：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['message']->value['ptime'],"%Y-%m-%d %H:%M:%S");?>

			</div>
		</div>
		
		<div style="float:left;width:90%;margin-bottom:20px;">
			<?php echo $_smarty_tpl->tpl_vars['message']->value['content'];?>

		</div>
		<form>
		<div style="clear:left;float:left;width:400px;">
			<?php if ($_SESSION['sendmessage']==1){?>
			<a style="background:#888;color:white;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/write/id/<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
">&nbsp;回 复&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php }?>
			<a style="background:#888;color:white;" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
">&nbsp;删 除&nbsp;</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a style="background:#888;color:white;" href="javascript:history.back()">&nbsp;返 回&nbsp;</a>
		</div>
		</form>
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				

<?php }} ?>