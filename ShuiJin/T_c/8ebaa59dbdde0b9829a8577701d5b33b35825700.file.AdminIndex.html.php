<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-07 01:47:09
         compiled from "ShuiJin/T/default/AdminIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:6918591559a8b29092a68-95260484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ebaa59dbdde0b9829a8577701d5b33b35825700' => 
    array (
      0 => 'ShuiJin/T/default/AdminIndex.html',
      1 => 1436204828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6918591559a8b29092a68-95260484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_559a8b291add25_09001476',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559a8b291add25_09001476')) {function content_559a8b291add25_09001476($_smarty_tpl) {?><form action='' method='post'>
	产品名称: <input type='text' name='name'><br>
	产品价格: <input type='text' name='price'><br>
	产品链接: <input type='text' name='link'><br>
	产品图片: <input type='file' name='file' id='file' /><br>
	<input type='submit' name='add' value='添加产品'> <a href='logout'>注销</a>
</form>
<?php }} ?>
