<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 10:09:16
         compiled from "./home/views/cial\article\comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1570251ede5cc947a37-59337541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '478619d6bde744589d4043f2866b0cf23dce6f1a' => 
    array (
      0 => './home/views/cial\\article\\comment.tpl',
      1 => 1373939659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1570251ede5cc947a37-59337541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
    'app' => 0,
    'public' => 0,
    'res' => 0,
    'page' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ede5ccb03814_56922331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ede5ccb03814_56922331')) {function content_51ede5ccb03814_56922331($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.replace.php';
?>	<div class="comm">
		<div class="dt"><div><b>评论列表</b></div></div>	
		
		<div class="dd">
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['con'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['con']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['name'] = 'con';
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comment']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['con']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['con']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['con']['total']);
?>
			<div class="commtitle">
				<div class="pleft">
					<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['uid'];?>
"><img width="40" height="40" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['upic']){?>uploads/user/<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['upic'];?>
<?php }else{ ?>images/<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['sex'];?>
.gif<?php }?>" />&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['username'];?>
</b></a>
					<?php if ($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['cmt']==0){?>
						<img alt="中立" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/cmt-neu.gif">  
					<?php }elseif($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['cmt']==1){?>
						<img alt="好评" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/cmt-good.gif">
					<?php }elseif($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['cmt']==-1){?>
						<img alt="差评" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/cmt-bad.gif">
					<?php }?>
				
					于 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['ptime'],"%Y-%m-%d %H:%M");?>
 说到
				</div>
				<div class="pright"> 
				<?php if ($_SESSION['login']==1&&$_SESSION['sendcomment']=="1"){?>
				<a href="javascript:quote('<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['username'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['ptime'],'%Y-%m-%d %H:%M');?>
')">回复</a>
				<?php }?>
				&nbsp;<?php if (($_SESSION['sendcomment']=="1"&&$_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['uid']==$_SESSION['id'])||$_SESSION['articleadmin']==1){?>

				<span style="cursor:pointer;" onclick="editc('<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['id'];?>
',this.parentNode.parentNode.nextSibling.innerHTML,'<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['cmt'];?>
','<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['ptime'],'%Y-%m-%d %H:%M');?>
',<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
)">编辑</span>
				<span style="cursor:pointer;" onclick="if(confirm('确定要删除这条评论吗？')) delc('<?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['id'];?>
',<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
)">删除</span>

				<?php }?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				</div>


			</div><div class="commtent">
				<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['con']['index']]['content'],"&quot;",'"'),"&#039;","'");?>

			</div>
			<?php endfor; else: ?>
				暂无评论！
			<?php endif; ?>
			<div class="page">
				<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
	
			</div>
		</div>
	</div>
<?php }} ?>