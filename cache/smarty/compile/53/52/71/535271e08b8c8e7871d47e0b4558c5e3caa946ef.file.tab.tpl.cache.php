<?php /* Smarty version Smarty-3.1.14, created on 2014-07-07 13:55:33
         compiled from "D:\xampp\htdocs\csuszda.hu\themes\default-bootstrap\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:596653ba8ab5a41ad3-91583188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '535271e08b8c8e7871d47e0b4558c5e3caa946ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\csuszda.hu\\themes\\default-bootstrap\\modules\\homefeatured\\tab.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '596653ba8ab5a41ad3-91583188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ba8ab5a514d6_69733094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba8ab5a514d6_69733094')) {function content_53ba8ab5a514d6_69733094($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\xampp\\htdocs\\csuszda.hu\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>