<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 14:32:51
         compiled from "./home/views/cial\user\set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2732051ef75136bee36-16204287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02dd71381b668e775f2df0ad3dcbad5ba3876903' => 
    array (
      0 => './home/views/cial\\user\\set.tpl',
      1 => 1373939660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2732051ef75136bee36-16204287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'user' => 0,
    'flush' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef7513773a59_78042591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef7513773a59_78042591')) {function content_51ef7513773a59_78042591($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div  class="top">	
	<div class="uhead">
		<h3>账号设置</h3>
	</div>
		
	<div class="ucontent">
		<div class="uzcolor"><b><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/set">账户资料</a></b> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/pset">密码设置</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/tset">头像设置</a></div> 

		<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/set" method="post">
			<div>
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
				<b>用户邮箱：</b><br>
				<input type="text" name="email" disabled style="height:30px" size="40" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
			</div>
			
			<div>
				<b>用户名称：</b><br> 
				<input type="text" name="name" disabled style="height:30px" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
			</div>

			<div>
				<b>个人简介：</b><br>
				<textarea cols="30" rows="3" name="info" style="height:60px"><?php echo $_smarty_tpl->tpl_vars['user']->value['info'];?>
</textarea><br>
				<span style="font-size:12px">请输入个人简介，简介内容不超过40字。</span>
			</div>

			<div style="height:32px;margin-top:10px">
				<input class="button" name="sub" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="submit" value="提交">
				<input class="button" style="width:80px;height:30px;font-size:16px;font-weight:bold" type="reset" value="撤消">
			</div>
			<?php if ($_smarty_tpl->tpl_vars['flush']->value){?>
				<script>
					window.top.frames["menu"].location.reload(true);
				</script>
			<?php }?>
		</form>				
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>