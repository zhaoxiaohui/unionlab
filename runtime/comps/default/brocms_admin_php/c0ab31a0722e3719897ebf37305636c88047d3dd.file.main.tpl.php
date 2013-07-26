<?php /* Smarty version Smarty-3.1.8, created on 2013-07-22 20:51:48
         compiled from "./admin/views/default\index\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2754451ed2ae4787299-94846428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0ab31a0722e3719897ebf37305636c88047d3dd' => 
    array (
      0 => './admin/views/default\\index\\main.tpl',
      1 => 1374129480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2754451ed2ae4787299-94846428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ed2ae481b490_47182480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ed2ae481b490_47182480')) {function content_51ed2ae481b490_47182480($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="main">
			<div class="head-dark-box">
				<div class="tit">后台管理首页</div>
			</div>	
			<?php echo $_smarty_tpl->getSubTemplate ("public/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="msg-box">
				<div class="mar">
				<p>
					<a  href="http://www.bupt.edu.cn/" target="_blank"><span class="red_font">北京邮电大学</span></a><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;北京邮电大学于1955年建校，是教育部直属、工业和信息化部共建、首批进行“211工程”建设的全国重点大学，<br>
					是“985工程优势学科创新平台”项目重点建设高校，是国家首批硕士与博士学位授权单位，是教育部最早批准的<br>
					全国56所设立研究生院的高校之一，是一所以信息科技为特色、工学门类为主体、理管经文哲法艺协调发展的多科性大学，<br>
					是国内唯一具有全通信领域研究开发能力的信息科技人才的重要培养基地.<br>
				
				</p>
				<ul><b>学校特点</b>: 
					<li class="mess">学校简介</li>
					<li class="mess">校容校貌 </li>
					<li class="mess">师资力量 </li>
					<li class="mess">历史沿革 </li>
					<li class="mess">学校领导 </li>
					<li class="mess">科研基地</li>
					<li class="mess">学术研究</li>		
					<li class="mess"><a  href="http://www.bupt.edu.cn/" target="_blank"><span class="red_font">北京邮电大学</span></a></li>	
				</ul>	
				</div>	
			</div>
		</div>


<div id="xsphp">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/pp1.jpg" width="150",height="150">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/pp2.jpg" width="150",height="150">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/pp3.jpg" width="150",height="150">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/pp4.jpg" width="150",height="150">
	<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/pp5.jpg" width="150",height="150">
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	


<?php }} ?>