<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-20 01:51:57
         compiled from "ShuiJin/T/default/AdminLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:154043764655844618903f17-01584199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bbb87f89e7b52da2e4d067c8b8f16e213fc9e9e' => 
    array (
      0 => 'ShuiJin/T/default/AdminLogin.html',
      1 => 1434736313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154043764655844618903f17-01584199',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5584461893f202_70693401',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5584461893f202_70693401')) {function content_5584461893f202_70693401($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>登录</title>
		<link rel='stylesheet' href='<?php echo @constant('ROOT');?>
/css/admin.min.css'>
</head>
<body>
	<div>
		<label for='uname'>
			<h2>用户登录</h2>
		</label>
		<form action='<?php echo @constant('URL');?>
/Admin/LoginCheck' method='post'>
		<input type='text' id='uname' name='uname'>
		<input type='password' name='upass'>
		<input type='submit' name='Login_sub' value='登录'>
	</form>
	</div>
</body>
</html>
<?php }} ?>
