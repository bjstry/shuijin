<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 23:00:08
         compiled from "ShuiJin/T/default/InstallIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:74772309555969f336eb3b8-03693161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71bac425805fe45742b5dda6404d44790300f282' => 
    array (
      0 => 'ShuiJin/T/default/InstallIndex.html',
      1 => 1435935537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74772309555969f336eb3b8-03693161',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55969f337504a9_95331673',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55969f337504a9_95331673')) {function content_55969f337504a9_95331673($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>安装</title>
	</head>
	<body>
		<form action='<?php echo @constant('URL');?>
/install/install' method='post'>
			管理帐号: <input type='text' name='uname'><br>
			管理密码: <input type='password' name='upass'><br>
			<input type='submit' name='install' value='安装'>
		</form>
	</body>
</html>

<?php }} ?>
