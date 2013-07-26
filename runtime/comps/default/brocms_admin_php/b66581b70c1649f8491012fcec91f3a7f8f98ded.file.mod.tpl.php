<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 14:55:11
         compiled from "./admin/views/default\user\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1234851f0cbcf59a5c3-43962908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b66581b70c1649f8491012fcec91f3a7f8f98ded' => 
    array (
      0 => './admin/views/default\\user\\mod.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234851f0cbcf59a5c3-43962908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'post' => 0,
    'select' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0cbcf6803e2_67470103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0cbcf6803e2_67470103')) {function content_51f0cbcf6803e2_67470103($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户管理>修改用户</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
			<div class="msg-box">
				<ul class="viewmess">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					<li class="dark-row">
						<span class="col_width">用户组</span>
						<?php echo $_smarty_tpl->tpl_vars['select']->value;?>

					</li>
					<li class="light-row">
						<span class="col_width">用户名&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input name="username" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['post']->value['username'];?>
" class="text-box">
						可以使用中文，但禁止除[@][.]以外的特殊符号
					</li>
					<li class="dark-row">
						<span class="col_width">登录密码<span class="red_font">*</span></span>
						<input name="userpwd" type="password"  value="" class="text-box"> 如果为空则不修改密码 
					
					</li>
					<li class="light-row">
						<span class="col_width">确认密码<span class="red_font">*</span></span>
						<input name="repwd" type="password"  value=""  size="20" class="text-box">
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
						<input type="submit" class="button"  value="修 改">&nbsp;&nbsp;
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