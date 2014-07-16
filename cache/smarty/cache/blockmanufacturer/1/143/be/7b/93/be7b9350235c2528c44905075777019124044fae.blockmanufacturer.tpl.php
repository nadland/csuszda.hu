<?php /*%%SmartyHeaderCode:2943653ba8b21992937-23883048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7b9350235c2528c44905075777019124044fae' => 
    array (
      0 => 'D:\\xampp\\htdocs\\csuszda.hu\\themes\\default-bootstrap\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1397146152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2943653ba8b21992937-23883048',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ba8b21a696f2_01350129',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba8b21a696f2_01350129')) {function content_53ba8b21a696f2_01350129($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://loccsuszda.hu/gyartok" title="Gyártók">
						Gyártók
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="first_item">
						<a 
						href="http://loccsuszda.hu/gyartok/junglegym/" title="JungleGym bővebb infói">
							JungleGym
						</a>
					</li>
																			<li class="item">
						<a 
						href="http://loccsuszda.hu/gyartok/rex/" title="Rex bővebb infói">
							Rex
						</a>
					</li>
																			<li class="last_item">
						<a 
						href="http://loccsuszda.hu/gyartok/smoby/" title="Smoby bővebb infói">
							Smoby
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Összes gyártó</option>
													<option value="http://loccsuszda.hu/gyartok/junglegym/">JungleGym</option>
													<option value="http://loccsuszda.hu/gyartok/rex/">Rex</option>
													<option value="http://loccsuszda.hu/gyartok/smoby/">Smoby</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>