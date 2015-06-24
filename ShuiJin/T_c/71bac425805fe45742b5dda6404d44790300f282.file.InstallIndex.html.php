<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-20 02:59:48
         compiled from "ShuiJin/T/default/InstallIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:1106330680558463b66e1eb8-38521136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71bac425805fe45742b5dda6404d44790300f282' => 
    array (
      0 => 'ShuiJin/T/default/InstallIndex.html',
      1 => 1434740366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106330680558463b66e1eb8-38521136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558463b66f4dd9_33318672',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558463b66f4dd9_33318672')) {function content_558463b66f4dd9_33318672($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>安装</title>
	</head>
	<body>
		<form action='<?php echo @constant('URL');?>
/install/install' method='post'>
			<input type='text' name='uname'>
			<input type='password' name='upass'>
			<input type='submit' name='install' value='安装'>
		</form>
	</body>
</html>

<?php }} ?>
