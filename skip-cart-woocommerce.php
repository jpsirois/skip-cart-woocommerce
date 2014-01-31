<?php
/**
 * Plugin Name: WooCommerce Skip Cart
 * Plugin URI: https://github.com/jpsirois/skip-cart-woocommerce
 * Description: Skip Cart for WooCommerce and go straight to the checkout page. Suitable for buying single product at ounce like a membership or single product web site.
 * Author: Jean-Philippe Sirois
 * Author URI: http://jpsirois.com
 * Version: 0.3
 * Tested up to: 4.6.1
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

function redirect_to_checkout() {
  // Remove the default `Added to cart` message
  wc_clear_notices();

  // Redirect to checkout
  $url = wc_get_checkout_url();

  // Keep coupon code
  if (htmlspecialchars($_GET['coupons']) != '') {
    $url = $url . '?coupons=' . $_GET['coupons'];
  }

  return $url;
}
add_filter ('add_to_cart_redirect', 'redirect_to_checkout');
