<?php /*%%SmartyHeaderCode:2361153ba8c698c2996-69901203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ce19311e85d0676e3bb695b911dfe2ec6805744' => 
    array (
      0 => 'D:\\xampp\\htdocs\\csuszda.hu\\modules\\socialsharing\\views\\templates\\hook\\socialsharing.tpl',
      1 => 1402907461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2361153ba8c698c2996-69901203',
  'variables' => 
  array (
    'PS_SC_TWITTER' => 0,
    'PS_SC_FACEBOOK' => 0,
    'PS_SC_GOOGLE' => 0,
    'PS_SC_PINTEREST' => 0,
    'product' => 0,
    'link' => 0,
    'module_dir' => 0,
    'product_image_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ba8c699c46d0_30907456',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba8c699c46d0_30907456')) {function content_53ba8c699c46d0_30907456($_smarty_tpl) {?>	<p class="socialsharing_product list-inline no-print">
					<button type="button" class="btn btn-default btn-twitter" onclick="socialsharing_twitter_click('Smoby mini vizes cs&uacute;szda http://loccsuszda.hu/home/smoby-mini-vizes-csuszda.html');">
				<i class="icon-twitter"></i> Tweet
				<!-- <img src="http://loccsuszda.hu/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
			</button>
							<button type="button" class="btn btn-default btn-facebook" onclick="socialsharing_facebook_click();">
				<i class="icon-facebook"></i> Share
				<!-- <img src="http://loccsuszda.hu/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
			</button>
							<button type="button" class="btn btn-default btn-google-plus" onclick="socialsharing_google_click();">
				<i class="icon-google-plus"></i> Google+
				<!-- <img src="http://loccsuszda.hu/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
			</button>
										<button type="button" class="btn btn-default btn-pinterest" onclick="socialsharing_pinterest_click('http://loccsuszda.hu/24-thickbox_default/smoby-mini-vizes-csuszda.jpg');">
				<i class="icon-pinterest"></i> Pinterest
				<!-- <img src="http://loccsuszda.hu/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
			</button>
			</p>
<?php }} ?>