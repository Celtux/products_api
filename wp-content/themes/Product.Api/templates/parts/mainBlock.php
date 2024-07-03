<?php
/**
 * Main Block
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param int|string $post_id The post ID this block is saved to.
 */
?>
<section class="main">
    <div class="container">
        <div class="main__wrapper">
            <h1>Test <span>Task</span></h1>

            <?php
            $products = get_transient('fakestore_products');

            ob_start();

            if (!empty($products)): ?>
                <div class="main__products">
                    <?php foreach ($products as $product) {
                        $title = $product['title'];
                        $category = $product['category'];
                        $image = $product['image'];
                        $description = $product['description'];
                        $price = $product['price'];
                        $rating = $product['rating'];
                        $rate = $rating['rate'];
                        $count = $rating['count'];
                        ?>
                        <div class="main__products_product">
                            <?php if (!empty($image)): ?>
                                <div class="main__products_product_image">
                                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($title); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="main__products_product_data">
                                <div class="main__products_product_data_title">
                                    <?php if (!empty($title)): ?>
                                        <h2><?php echo esc_html($title); ?></h2>
                                    <?php endif;

                                    if (!empty($category)): ?>
                                        <p><?php echo esc_html($category); ?></p>
                                    <?php endif; ?>
                                </div>


                                <?php if (!empty($description)): ?>
                                    <p><?php echo esc_html($description); ?></p>
                                <?php endif; ?>

                                <div class="main__products_product_data_info">
                                    <div class="main__products_product_data_info_price">
                                        <?php if (!empty($price)): ?>
                                            <p><?php echo esc_html($price); ?> $</p>
                                        <?php endif; ?>
                                    </div>

                                    <?php if (!empty($rating)): ?>
                                        <div class="main__products_product_data_info_stats">
                                            <?php if (!empty($rate)): ?>
                                                <p>Rating: <?php echo esc_html($rate); ?>
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.66673 1.25589C8.06229 0.659711 8.93771 0.65971 9.33327 1.25589L11.5885 4.65497C11.7214 4.85524 11.922 5.00095 12.1535 5.06544L16.0831 6.15994C16.7724 6.35191 17.0429 7.18449 16.5981 7.74492L14.0623 10.9402C13.9129 11.1284 13.8363 11.3642 13.8465 11.6043L14.0199 15.6798C14.0503 16.3947 13.3421 16.9092 12.6716 16.6594L8.84916 15.2351C8.62395 15.1512 8.37605 15.1512 8.15084 15.2351L4.32836 16.6594C3.65793 16.9092 2.94969 16.3947 2.9801 15.6798L3.15349 11.6043C3.16371 11.3642 3.0871 11.1284 2.9377 10.9402L0.40189 7.74492C-0.0428747 7.18449 0.227645 6.35191 0.916878 6.15994L4.84651 5.06544C5.07804 5.00095 5.27859 4.85524 5.41147 4.65497L7.66673 1.25589Z"
                                                              fill="#FF415C"/>
                                                    </svg>
                                                </p>
                                            <?php endif;

                                            if (!empty($count)): ?>
                                                <p>(<?php echo esc_html($count); ?>)</p>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    return ob_end_flush();
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>