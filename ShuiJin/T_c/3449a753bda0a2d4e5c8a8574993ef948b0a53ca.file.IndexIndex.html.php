<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 22:41:48
         compiled from "ShuiJin/T/default/IndexIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:31749321155969f2c33b918-97603507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3449a753bda0a2d4e5c8a8574993ef948b0a53ca' => 
    array (
      0 => 'ShuiJin/T/default/IndexIndex.html',
      1 => 1435178853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31749321155969f2c33b918-97603507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'product_type' => 0,
    'type' => 0,
    'product_theme' => 0,
    'product_price' => 0,
    'product' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55969f2c437d09_30831330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55969f2c437d09_30831330')) {function content_55969f2c437d09_30831330($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta charset=utf-8>
		<link rel='stylesheet' href='css/main.css'>
	</head>
	<body>
		<div id='container'>
			<div id='header'>
				<div id='header-info'>
					<a>海洋之心</a> - <a href='#'>网上商城</a>

				</div>
				<div id='header-other'>
					<a>国家/地区: 中国 | 店铺 | 联系方式</a>
					<img class='header-logo' height='72px' src='images/logo.jpg'>
				</div>
				<nav>
				<ul>
					<!--获取产品分类-->
					<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
					<li><a href='#'><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</a></li>
					<?php } ?>
				</ul>
				</nav>	
			</div>
			<div id='content'>
				<div id='left-list'>
					<h1>首饰</h1>
					<div id='list-lb'>
						<h2 class='lined'>
							<span>类别</span>
						</h2>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
							  <li><a href='#'><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</a></li>
							<?php } ?>
						</ul>
					</div>
					<div id='list-lb'>
						<h2 class='lined'>
							<span>主题</span>
						</h2>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_theme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
							  <li><a href='#'><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</a></li>
							<?php } ?>
						</ul>
					</div>
					<div id='list-lb'>
						<h2 class='lined'>
							<span>价格</span>
						</h2>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_price']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
							  <li><a href='#'><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div id='right-main'>
					<h2 class='lined'>
						<span>您的选择:99 已找到的产品</span>
					</h2>
					<div id='get-page'>
						<ul>
							<li><a href='#'>1</a></li>	  
							<li><a href='#'>2</a></li>	  
							<li><a href='#'>3</a></li>	  
							<li><a href='#'>...</a></li>	  
							<li><a href='#'>16</a></li>	  
						</ul>
						<div>
							<a href='#'><span>12每页</span> ^</a>	  
							<ul class='shadow'>
								<li><a href='#'>12每页</a></li>
								<li><a href='#'>24每页</a></li>
								<li><a href='#'>36每页</a></li>
							</ul>
						</div>
							<a href='#'>分页条件：</a>	  
						<div>
							<a href='#'><span>预设</span> ^</a>	  
							<ul class='shadow'>
								<li><a href='#'>预设</a></li>
								<li><a href='#'>价格从低到高</a></li>
								<li><a href='#'>价格从高到低</a></li>
							</ul>
						</div>
					</div>
					<div id='product'>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
								<li>
								<div class='info'>abc</div>
								<h3><span>新品</span></h3>
								<a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img_url'];?>
"></a>
								<p><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
<span>CNY <?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
.00</span></p>
								</li>
							<?php } ?>
							<div class='clear'></div>
						</ul>
					</div>
					<div id='get-page'>
						<ul>
							<li><a href='#'>1</a></li>	  
							<li><a href='#'>2</a></li>	  
							<li><a href='#'>3</a></li>	  
							<li><a href='#'>...</a></li>	  
							<li><a href='#'>16</a></li>	  
							<li><a href='#'>12每页</a></li>	  
							<li><a href='#'>^</a></li>	  
							<li><a href='#'>分页条件：</a></li>	  
							<li><a href='#'>预设</a></li>	  
							<li>
								<select>
									<option>ABC</option>
								</select>

							</li>	  
						</ul>
					</div>
				</div>
				<div class='clear'></div>
			</div>
			<div id='footer'>
				<ul>
					<li>关注我们</li>
				</ul>
				<ul>
					<li><h3>客服中心</h3></li>
					<li>客户服务</li>
					<li>您的建议</li>
					<li>联络我们</li>
					<li>版权</li>
				</ul>
				<ul>
					<li><h3>网上购物</h3></li>
					<li>使用条款</li>
					<li>条款和条件</li>
					<li>隐私条款</li>
					<li>网站地图</li>
				</ul>
				<ul>
					<li><h3>关于我们</h3></li>
					<li>海洋水晶通讯</li>
					<li>商务礼品</li>
					<li>其他海洋水晶网站</li>
					<li>手机网站</li>
				</ul>
				<div class='clear'></div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>
