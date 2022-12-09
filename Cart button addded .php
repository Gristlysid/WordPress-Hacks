/* Adding Add to cart button to Woocommmerce products */
function wc_shop_demo_button() {
  $product = wc_get_product(get_the_id());
  $url_demo = get_site_url()."/checkout/?add-to-cart=".get_the_id();
  echo '<a class="cart-btn button" href="'.$url_demo.'" target="_blank">Buy Now</a>';
}
add_action('woocommerce_after_add_to_cart_button', 'wc_shop_demo_button', 20);

