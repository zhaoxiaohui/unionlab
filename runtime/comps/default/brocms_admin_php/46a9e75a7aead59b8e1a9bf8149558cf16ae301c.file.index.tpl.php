<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 14:14:37
         compiled from "./admin/views/default\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:457951ef70cdedd6f3-01571135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a9e75a7aead59b8e1a9bf8149558cf16ae301c' => 
    array (
      0 => './admin/views/default\\user\\index.tpl',
      1 => 1373939658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '457951ef70cdedd6f3-01571135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'page' => 0,
    'search' => 0,
    'gid' => 0,
    'disable' => 0,
    'select' => 0,
    'users' => 0,
    'root' => 0,
    'res' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef70ce166806_64958756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef70ce166806_64958756')) {function content_51ef70ce166806_64958756($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">系统管理>用户管理>管理用户</div>
			</div>	
		    <?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	  
			<div class="msg-box">
				<ul class="viewmess">
					  <form  method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['search']->value){?>/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['gid']->value){?>/gid/<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['disable']->value){?>/disable/<?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
<?php }?>" onsubmit="return confirm('你确定要删除选中的用户吗?')" >
					<?php if ($_smarty_tpl->tpl_vars['disable']->value!=1){?>
					<li class="light-row">
					
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户组：<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
 &nbsp;&nbsp;

						输入需要查找的用户名：
						<input type="text" size="20" id="sea" name="username" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"> 
						<input onclick="search()" type="button" class="button" value="搜索用户">
					
					</li>

					<script>
						var sel=document.getElementById("sel");
						
						sel.onchange=function(){
							var gid=this.options[this.selectedIndex].value;
							window.location="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/gid/"+gid;
						}
						function search(){
							var gid=sel.options[sel.selectedIndex].value;
							var sval=document.getElementById("sea").value;	
							window.location="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/gid/"+gid+"/search/"+sval;

						}
					</script>
					<?php }?>
					
					<li class="dark-row">
						<span class="list_width width_font">用户名</span>
						<span class="list_width width_font" style="width:200px">电子邮件</span>
						<span class="list_width width_font">注册时间</span>
						<span class="list_width width_font">操&nbsp;&nbsp;作</span>
					</li>
				        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['doc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['name'] = 'doc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['doc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<li class="<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['disable']==1){?>red-row<?php }elseif(!(1 & $_smarty_tpl->getVariable('smarty')->value['section']['doc']['index'])){?>light-row<?php }else{ ?>dark-row<?php }?>" style="padding-top:5px; padding-bottom:5px">
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['disable']==1){?>
								<span class="list_width red_font">	
							<?php }else{ ?>
								<span class="list_width">
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id']!=1){?>
								<input type="checkbox" name="id[]"  value="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">
							<?php }?>
						
						
							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/index.php/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['username'];?>
</a>
							</span>
							
							<span class="list_width" style="width:200px"><?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['email'];?>
</span>
							<span class="list_width"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['regtime'],"%Y-%m-%d");?>
</span>
				
							<span class="list_width" style="width:160px;">
						
							【<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/mod/id/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
">修改</a>】
							<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id']!=1){?>
							【<a onclick="return confirm('确定要删除用户<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['username'];?>
吗？')" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['doc']['index']]['id'];?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['search']->value){?>/search/<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['gid']->value){?>/gid/<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['disable']->value){?>/disable/<?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
<?php }?>">删除</a>】
							<?php }?>
							</span>
						</li>
					<?php endfor; else: ?>
						<li class="light-row">
							该页没有用户
						</li>
					<?php endif; ?>
				
					<li class="dark-row">
						<span class="col_width" style="margin-left:15px;width:240px"> 
							<a href="javascript:select()">全选</a>/<a href="javascript:fanselect()">反选</a>/<a href="javascript:noselect()">全不选</a>&nbsp;&nbsp;选中项: 
							
							<input  name="dels" type="image" title="删除" value="delete" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/delete.gif">&nbsp;&nbsp;
						 </span> 
					</li>
				
					<li class="dark-row" style="text-align:right">
						
							<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

					</li>
					 </form>
				</ul>	
			</div>
                   
		</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>