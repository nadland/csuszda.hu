<?php
/*
* 2007-2011 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2011 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class Cart extends CartCore
{
	/**
	 * @brief Calculate the shipping cost.
	 *
	 * Override it in order to calculate and add the correct tax amount.
	 *
	 * @note This method is only called in PrestaShop < 1.5
	 * @see  Cart::geTotalShippingCost() for PrestaShop > 1.5
	 *
	 * @param integrer $id_carrier      Id of the selected carrier
	 * @param boolean  $use_tax         Do we want the taxes?
	 * @param Country  $default_country Unused 1.5 only, for inheritance compatibility
	 * @param Array    $product_list    Unused 1.5 only, for inheritance compatibility
	 *
	 * @return float Price of the shipping.
	 */

	/**
	 * @brief Calculate the shipping cost.
	 *
	 * Override it in order to calculate and add the correct tax amount.
	 *
	 * @note This method is only called in PrestaShop > 1.5
	 * @see  Cart::getOrderShippingCost() for PrestaShop < 1.5
	 *
	 * @param Array    $delivery_option Delivery options
	 * @param boolean  $use_tax         Do we want the taxes?
	 * @param Country  $default_country Default country (1.5 only)
	 *
	 * @return float Price of the shipping.
	 */
	
}
