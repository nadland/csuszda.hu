<?php /* Smarty version Smarty-3.1.14, created on 2014-07-16 15:18:42
         compiled from "D:\xampp\htdocs\csuszda.hu\themes\default-bootstrap\product-list-colors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2449953c67bb2914fe7-31189599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece8441c52453cd2a3a3ebfab6873567dc9b9be1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\csuszda.hu\\themes\\default-bootstrap\\product-list-colors.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2449953c67bb2914fe7-31189599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'colors_list' => 0,
    'color' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c67bb29343e2_13452055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c67bb29343e2_13452055')) {function content_53c67bb29343e2_13452055($_smarty_tpl) {?>

<ul class="color_to_pick_list clearfix">
	<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
		<li>
			<a
			href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['color']->value['id_product'],null,null,null,null,null,$_smarty_tpl->tpl_vars['color']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
"
			id="color_<?php echo intval($_smarty_tpl->tpl_vars['color']->value['id_product_attribute']);?>
"
			class="color_pick"
			style="background: <?php echo $_smarty_tpl->tpl_vars['color']->value['color'];?>
;">
			</a>
		</li>
	<?php } ?>
</ul><?php }} ?>