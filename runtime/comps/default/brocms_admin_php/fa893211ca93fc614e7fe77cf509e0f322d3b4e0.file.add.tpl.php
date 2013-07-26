<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 14:55:05
         compiled from "./admin/views/default\user\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1694351f0cbc9b1e2d8-83547633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa893211ca93fc614e7fe77cf509e0f322d3b4e0' => 
    array (
      0 => './admin/views/default\\user\\add.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1694351f0cbc9b1e2d8-83547633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0cbc9c35cb0_26568145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0cbc9c35cb0_26568145')) {function content_51f0cbc9c35cb0_26568145($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户管理>添加用户</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/insert">
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">用户组</span>
						<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
 <label for="jz"><input id="jz" type="checkbox" name="jz" <?php if ($_smarty_tpl->tpl_vars['post']->value['jz']==1){?>checked<?php }?> value="1"> 记住选项</label>
					</li>
					<li class="light-row">
						<span class="col_width">用户名&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="username" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
" class="text-box">
						可以使用中文，但禁止除[@][.]以外的特殊符号
					</li>
					<li class="dark-row">
						<span class="col_width">登录密码<span class="red_font">*</span></span>
						<input name="userpwd" type="password"  value="<?php if ($_smarty_tpl->tpl_vars['post']->value['srcpwd']==null){?>brophp<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['post']->value['srcpwd'];?>
<?php }?>" class="text-box"> 
						初使密码为brophp
					</li>
					<li class="light-row">
						<span class="col_width">确认密码<span class="red_font">*</span></span>
						<input name="repwd" type="password"  value="<?php if ($_smarty_tpl->tpl_vars['post']->value['srcpwd']==null){?>brophp<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['post']->value['srcpwd'];?>
<?php }?>"  size="20" class="text-box">
					</li>
					<li class="dark-row">
						<span class="col_width">电子邮件<span class="red_font">*</span></span>
						<input name="email" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
" class="text-box">
						请正确添写你的电子邮件地址
					</li>	

					<li class="light-row">
						<span class="col_width">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</span>
						<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['post']->value['sex']=="1"||$_smarty_tpl->tpl_vars['post']->value['sex']==null){?> checked <?php }?> value="1"> 男 &nbsp;
        					<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['post']->value['sex']=="2"){?> checked <?php }?> value="2"> 女 &nbsp;
         					<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['post']->value['sex']=="0"){?> checked <?php }?> value="0"> 保密 
					</li>
					<li class="dark-row">
						<span class="col_width">是否禁用</span>
						<input type="checkbox" name="disable" <?php if ($_smarty_tpl->tpl_vars['post']->value['disable']==1){?>checked<?php }?> value="1"> 禁用该用户 &nbsp;
        					
					</li>
				
					<li class="light-row">
						<span class="col_width"> &nbsp; </span>
						<input type="submit" class="button"  value="添 加">&nbsp;&nbsp;
						<input type="reset" class="button" value="重 置">
					</li>
				</ul>	
			</div>
                    </form>	
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>