<?php /* Smarty version Smarty-3.1.14, created on 2014-07-07 14:13:44
         compiled from "D:\xampp\htdocs\csuszda.hu\admin1105\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:527653ba8ef8e17c59-25853548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22b0f3979a73e7f9976b9142a40327358022c9a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\csuszda.hu\\admin1105\\themes\\default\\template\\content.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '527653ba8ef8e17c59-25853548',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ba8ef903cea6_94821869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba8ef903cea6_94821869')) {function content_53ba8ef903cea6_94821869($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>