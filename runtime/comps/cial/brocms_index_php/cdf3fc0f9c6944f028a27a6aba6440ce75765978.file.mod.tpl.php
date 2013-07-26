<?php /* Smarty version Smarty-3.1.8, created on 2013-07-23 17:05:43
         compiled from "./home/views/cial\dynamic\mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1915951ee4767b08e21-47825288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf3fc0f9c6944f028a27a6aba6440ce75765978' => 
    array (
      0 => './home/views/cial\\dynamic\\mod.tpl',
      1 => 1373939659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1915951ee4767b08e21-47825288',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'select' => 0,
    'post' => 0,
    'ck' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ee4767bbf375_54297901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ee4767bbf375_54297901')) {function content_51ee4767bbf375_54297901($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body style="background:white;margin:20px;">
<div class="top">	
	<div class="uhead">
		<h3>修改文章</h3>
	</div>
		
	<div class="ucontent">
		<br>
			<form name="article" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/update">
				<ul class="viewmess">
					<li class="dark-row">
						<span class="col_width">文章类别</span>
						  <?php echo $_smarty_tpl->tpl_vars['select']->value;?>
	
					</li>
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
					<li class="light-row">
						<span class="col_width">文章标题&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" maxlength="40">
					</li>

					<li class="dark-row">
						<span class="col_width" style="margin-top:25px">文章摘要</span>
						<textarea class="text-box" name="summary" cols="40" rows="4"><?php echo $_smarty_tpl->tpl_vars['post']->value['summary'];?>
</textarea>&nbsp;&nbsp;小于100个汉字.
					</li>
				

					<li class="light-row">
						<span class="col_width">文章来源</span>
						<input type="text" class="text-box" name="comefrom" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['comefrom'];?>
" maxlength="25">
					</li>
					<li class="dark-row">
						<span class="col_width">关键字&nbsp;&nbsp;&nbsp;<span class="red_font">*</span></span>
						<input type="text" class="text-box" name="keyword" size="25" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['keyword'];?>
" maxlength="20">&nbsp;&nbsp;用于文章搜索,多个请用逗号","隔开.
					</li>

				
					<li class="light-row" style="margin:0px; padding:0px">
						<textarea cols="80" rows="10" name="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
						<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>

					</li>
				
	
					<li class="dark-row">
						<span class="col_width">&nbsp;  </span>
						<input type="submit" style="height:30px" class="button"  value="修 改">&nbsp;&nbsp;
						<input type="reset"  style="height:30px" class="button" value="重 置">&nbsp;&nbsp;
						<input type="button" onclick="location='<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/aid/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'"  style="height:30px" class="button" value="返 回">
					</li>
				</ul>	
                    </form>			
	</div>
</div>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
<?php }} ?>