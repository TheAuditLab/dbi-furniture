<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<?php 
$price_incl_vat = $product->get_price();
$price_excl_vat = $price_incl_vat / 1.2;
?>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price total excl-price' ) ); ?>"><span class="excl">£<?php echo number_format($price_excl_vat, 2); ?></span><small> (excl VAT)</small></p>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price total incl-price' ) ); ?>"><span class="incl">£<?php echo number_format($price_incl_vat, 2); ?></span><small> (incl VAT)</small></p>

