<?php /* Smarty version Smarty-3.1.8, created on 2013-07-25 10:50:26
         compiled from "./admin/views/default\play\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607551f09272a15725-26913752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5f9846ac805f3019239db3f5b2d1e338f17c99' => 
    array (
      0 => './admin/views/default\\play\\index.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607551f09272a15725-26913752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'plays' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51f09272be1a82_72283730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f09272be1a82_72283730')) {function content_51f09272be1a82_72283730($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>幻灯片管理>管理幻灯片</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/order" >
			<div class="msg-box">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="list_width width_font" style="width:250px;">幻灯片标题</span>
					
						<span class="list_width width_font" style="width:100px;">起始时间</span>
						<span class="list_width width_font" style="width:100px;">结束时间</span>
					
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['plays']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<li class="<?php if (!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="<?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['display']==0){?>background:#FAECBA;<?php }?>padding-top:2px; padding-bottom:2px">
					
							<span class="list_width" style="width:250px;"><input type="text" name="ord[]" style="width:20px" maxlength="3" value="<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['ord'];?>
">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/mod/id/<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['aid'];?>
"><?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
</a></span>
						
							<input type="hidden" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">
							<span class="list_width" style="width:100px;<?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['starttime']>=time()){?>color:blue;<?php }?>"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['starttime'],"%Y-%m-%d");?>
</span>
							<span class="list_width <?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']<=time()&&$_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']!='0'){?>red_font<?php }?>" style="width:100px;"><?php if ($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime']==0){?>长期显示<?php }else{ ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['endtime'],"%Y-%m-%d");?>
<?php }?></span>
				
							<span class="list_width" style="width:120px;">
						
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">修改</a>】
							【<a onclick="return confirm('确定要删除幻灯片<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['title'];?>
吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['plays']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">删除</a>】
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							暂无幻灯片
						</li>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:20px;width:540px"> 
							<input class="button" name="order" type="submit" value="改变显示顺序">
  							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a style='<?php if ($_GET['action']=="1"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/1">显示</a>&nbsp;|
							<a style='<?php if ($_GET['action']=="2"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/2">不显示</a>&nbsp;|
							<a style='<?php if ($_GET['action']=="3"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/3">无期限的</a>&nbsp;|
							<a style='<?php if ($_GET['action']=="4"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/4">过期的</a>&nbsp;|
							<a style='<?php if ($_GET['action']=="5"){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/action/5">没到期的</a>&nbsp;|
							<a style='<?php if ($_GET['action']==''){?>background:#888;color:white<?php }?>' href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index">全部显示</a>&nbsp;&nbsp;
						 </span> 
					
					</li>
				</ul>	
			</div>
                    </form>
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>