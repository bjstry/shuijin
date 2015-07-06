<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 22:15:55
         compiled from "ShuiJin/T/default/AdminLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:29480105559a8c00420605-53196962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bbb87f89e7b52da2e4d067c8b8f16e213fc9e9e' => 
    array (
      0 => 'ShuiJin/T/default/AdminLogin.html',
      1 => 1436192153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29480105559a8c00420605-53196962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559a8c0050d3d9_94411014',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559a8c0050d3d9_94411014')) {function content_559a8c0050d3d9_94411014($_smarty_tpl) {?><!DOCTYPE html>
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
		<input type='submit' name='login_sub' value='登录'>
	</form>
	</div>
</body>
</html>
<?php }} ?>
