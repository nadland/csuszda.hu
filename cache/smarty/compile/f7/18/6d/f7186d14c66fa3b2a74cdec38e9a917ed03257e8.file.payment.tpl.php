<?php /* Smarty version Smarty-3.1.14, created on 2014-07-07 14:06:51
         compiled from "D:\xampp\htdocs\csuszda.hu\modules\fizetesszemelyes\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209853ba8d5b839410-75915900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7186d14c66fa3b2a74cdec38e9a917ed03257e8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\csuszda.hu\\modules\\fizetesszemelyes\\payment.tpl',
      1 => 1403163394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209853ba8d5b839410-75915900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'this_path' => 0,
    'atvetel_helye' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ba8d5b8837a3_49011849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba8d5b8837a3_49011849')) {function content_53ba8d5b8837a3_49011849($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value->id_carrier!='19'){?>
    <div class="row">
	<div class="col-xs-12 col-md-6">
            <p class="payment_module">
                <a class="szemelyes" href="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay on delivery','mod'=>'fizetesszemelyes'),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Pay on delivery','mod'=>'fizetesszemelyes'),$_smarty_tpl);?>
 <br><span><?php echo $_smarty_tpl->tpl_vars['atvetel_helye']->value;?>
</span>
                    <br style="clear:both;" />
                </a>
            </p>
        </div>
    </div>
<?php }?><?php }} ?>