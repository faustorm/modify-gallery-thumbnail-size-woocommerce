<?php
function fausto_images_gallery( ) {
    $size = apply_filters( 'woocommerce_gallery_medium_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
    return $size;
}
add_filter( 'woocommerce_gallery_image_size', 'fausto_images_gallery' );
?>
