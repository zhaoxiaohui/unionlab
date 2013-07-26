<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 14:55:02
         compiled from "./admin/views/default\group\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2663851f0cbc6938201-86994974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e267bbfe7b3b9cbfdddf04105a71d760c4b3f30' => 
    array (
      0 => './admin/views/default\\group\\index.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2663851f0cbc6938201-86994974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'app' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f0cbc6a44860_40653261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f0cbc6a44860_40653261')) {function content_51f0cbc6a44860_40653261($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户组管理>编辑用户组</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	  
			<div class="msg-box">
				<ul class="viewmess">
				
				
					<li class="dark-row">
						<span class="list_width width_font">用户名</span>
						<span class="list_width width_font" style="width:400px">用户组描述</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['total']);
?>
						<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:10px; padding-bottom:10px">
							
							<span style="font-weight:bold" class="list_width"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/gid/<?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['groupname'];?>
</a></span>
							
							<span class="list_width" style="width:400px"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['description'],"50");?>
</span>
						
							<span class="list_width" style="width:160px;">
						
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">修改</a>】
							<?php if ($_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id']!=1){?>
							【<a onclick="return confirm('确定要删除用户组<?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['username'];?>
吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">删除</a>】
							<?php }?>
							</span>
						</li>
					<?php endfor; endif; ?>
				</ul>	
			</div>
                   
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>