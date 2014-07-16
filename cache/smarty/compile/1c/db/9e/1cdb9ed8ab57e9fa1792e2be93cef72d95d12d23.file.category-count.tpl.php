<?php /* Smarty version Smarty-3.1.14, created on 2014-07-16 15:18:44
         compiled from "D:\xampp\htdocs\csuszda.hu\themes\default-bootstrap\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125753c67bb425e975-17846323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cdb9ed8ab57e9fa1792e2be93cef72d95d12d23' => 
    array (
      0 => 'D:\\xampp\\htdocs\\csuszda.hu\\themes\\default-bootstrap\\category-count.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125753c67bb425e975-17846323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c67bb427dd87_73705997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c67bb427dd87_73705997')) {function content_53c67bb427dd87_73705997($_smarty_tpl) {?>
<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>