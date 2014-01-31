<?php
/**
 * Plugin Name: Skip Cart WooCommerce
 * Plugin URI: https://github.com/jpsirois/skip-cart-woocommerce
 * Description: Skip Cart for WooCommerce and go straight to the checkout page. Suitable for buying single product at ounce like a membership or single product web site.
 * Author: Jean-Philippe Sirois
 * Author URI: http://jpsirois.com
 * Version: 0.1
 * Tested up to: 3.8.1
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

add_filter ('add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout() {
  global $woocommerce;
  $checkout_url = $woocommerce->cart->get_checkout_url();
  return $checkout_url;
}
