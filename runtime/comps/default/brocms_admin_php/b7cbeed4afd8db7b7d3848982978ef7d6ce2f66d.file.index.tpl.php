<?php /* Smarty version Smarty-3.1.8, created on 2013-07-22 20:51:40
         compiled from "./admin/views/default\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2007451ed2adc2061d8-36889341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7cbeed4afd8db7b7d3848982978ef7d6ce2f66d' => 
    array (
      0 => './admin/views/default\\login\\index.tpl',
      1 => 1374144910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2007451ed2adc2061d8-36889341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ed2adc27f463_62180066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed2adc27f463_62180066')) {function content_51ed2adc27f463_62180066($_smarty_tpl) {?><html>
	<head>
		<title>移动计算与智能感知实验室</title>
		<meta http-equiv="Windows-Target" content="_top" />
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="ss" content="ss" />
		<meta name="Keywords" content="php,lampbrother" />
		<meta http-equiv="Windows-Target" content="_top" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css" />
	</head>

<body class="center" onload="document.getElementById('login-form').username.focus()">
<div id="login-box">
<div id="main">
	<div class="head-dark-box">
		&nbsp;<b>移动计算与智能感知实验室后台登录</b>
	</div>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/prologin" id="login-form">
		<ul>	
			<li style="height:25px" class="dark-row" >
				<span class="list_width">用户名</span>
				<input type="text" class="text-box" size="15" name="username">
			</li>
			<li style="height:25px" class="light-row">
				<span class="list_width">密&nbsp;&nbsp;&nbsp;码</span>
				<input type="password" class="text-box" size="15" name="userpwd">
			</li>
			<li style="height:25px" class="dark-row">
				<span class="list_width">验证码</span>
				<input type="text" onkeyup="if (this.value != this.value.toUpperCase()) this.value=this.value.toUpperCase();"  class="text-box" size="6" name="code" />
				<img style="cursor:pointer;" alt="看不清，换一张" onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code/'+Math.random()" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/code" />
			</li>
			<li style="height:25px" class="light-row">
				<input type="hidden" name="action" value="login"> 
				<span class="list_width">&nbsp;</span>
				<input type="submit" class="button" value="登录系统" />
			</li>
		</ul>
	</form>
</div>
</div>
</body>
</html>

<?php }} ?>