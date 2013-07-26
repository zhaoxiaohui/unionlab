<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 09:25:21
         compiled from "./home/views/cial\search\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84451ef2d016dcd92-18559155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ddd5e71229b42ff1bd35b445239109b0b555036' => 
    array (
      0 => './home/views/cial\\search\\index.tpl',
      1 => 1374200214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84451ef2d016dcd92-18559155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serType' => 0,
    'search' => 0,
    'total' => 0,
    'searchs' => 0,
    'app' => 0,
    'fpage' => 0,
    'recommends' => 0,
    'news' => 0,
    'hots' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef2d01886030_57948222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef2d01886030_57948222')) {function content_51ef2d01886030_57948222($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\brocms\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="main">
		
		<div id="search">
       			<div class="dt"><strong>文章搜索结果</strong><span class="more">
		
			 按<b>
			 <?php if ($_smarty_tpl->tpl_vars['serType']->value=="content"){?>
				文章内容
			 <?php }elseif($_smarty_tpl->tpl_vars['serType']->value=="keyword"){?>
				文章关键字
			<?php }else{ ?>
				文章标题
			<?php }?>
			</b>搜索<b> "<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" </b>
			共搜索到<span class="redcolor"> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 </span>篇符合条件的记录</span></div>
        		<div class="dd dot">
				<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['searchs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>	
						<li <?php if (!($_smarty_tpl->getVariable('smarty')->value['section']['article']['index'] % 2)){?>class="li_bg"<?php }?>>
							<span style="width:270px">
							<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['searchs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['searchs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],30);?>
</a></span>
							<span style="width:150px">作者：
							
							<a style="background-image:none" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/index/uid/<?php echo $_smarty_tpl->tpl_vars['searchs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['uid'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['searchs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['author'],12);?>
</a></span>
							
							<span style="width:150px">发布时间：
							<span class="fontcolor"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['searchs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['posttime'],"%Y-%m-%d");?>
</span></span>
							<span style="width:100px">人气：
							<span class="fontcolor"><?php echo $_smarty_tpl->tpl_vars['searchs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['views'];?>
</span></span>
							<!--<p style="text-indent:0.8cm;background:#fdfddf">
								<?php echo $_smarty_tpl->tpl_vars['searchs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['summary'];?>

							</p>
						--></li>
					<?php endfor; else: ?>
						<li>没有符合条件的文章</li>
					<?php endif; ?>
				</ul>
				<div class="page">
					<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

				</div>
			</div>	
		</div>
	
	</div>

	<div id="sidebar">
		<div class="sidebox">
       			<div class="dt"><strong>强烈推荐</strong></div>
        		<div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['recommends']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['recommends']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],25);?>
</a></li>
					<?php endfor; else: ?>
						<li>目前没有任何推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>最近更新</strong></div>
        		 <div class="dd dot">
            			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],25);?>
</a></li>
					<?php endfor; else: ?>
						<li>目前没有任何推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
		<div class="sidebox">
       			<div class="dt"><strong>本月热点</strong></div>
        		 <div class="dd dot">
          			<ul>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['article'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['article']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['name'] = 'article';
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['hots']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = (int)10;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['article']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['article']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['article']['total']);
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['hots']->value[$_smarty_tpl->getVariable('smarty')->value['section']['article']['index']]['title'],25);?>
</a></li>
					<?php endfor; else: ?>
						<li>目前没有任何推荐文章</li>
					<?php endif; ?>
          			</ul>
			</div>
       		 </div>
		<div class="nav"> </div>
	</div>

	<div class="nav"> </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>