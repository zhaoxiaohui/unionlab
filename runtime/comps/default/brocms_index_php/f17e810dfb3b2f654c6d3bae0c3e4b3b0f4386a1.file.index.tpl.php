<?php /* Smarty version Smarty-3.1.8, created on 2013-07-24 14:58:15
         compiled from "./home/views/default\projects\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496751ef7b079ba1b9-98061554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f17e810dfb3b2f654c6d3bae0c3e4b3b0f4386a1' => 
    array (
      0 => './home/views/default\\projects\\index.tpl',
      1 => 1374648553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496751ef7b079ba1b9-98061554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ef7b07a35135_80662981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ef7b07a35135_80662981')) {function content_51ef7b07a35135_80662981($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/project.css" type="text/css" />
<body bgcolor="#C0DFFD">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <td width="40">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
    <table border="0" cellspacing="0" cellpadding="2" width="610">
        <tr>
          <td class="pageName" colspan="3">云号CC项目<br />
		  &nbsp;<br />		  </td>
        </tr>
        <tr>
          <td width="320" height="250" rowspan="2" align="center" class="subHeader"><img src="mm_product_lg.gif" alt="large product photo" border="0" /></td>
          <td width="30" rowspan="2">&nbsp;</td>
          <td width="260" class="subHeader">云号CC<br />
		  <br />          </td>
        </tr>
        <tr>
          <td valign="top" class="bodyText">
		<p><strong>[下载]</strong></p></td>
        </tr>
      </table>	  </td>
      <td width="100%">&nbsp;</td>
  </tr>

 <tr>
    <td width="40">&nbsp;</td>
    <td width="342">&nbsp;</td>
    <td width="378">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>