<?php
/**
* Authors Grid
*
* @param array $block The block settings and attributes.
* @param string $content The block inner HTML (empty).
* @param bool $is_preview True during AJAX preview.
* @param int|string $post_id The post ID this block is saved to.
*/
?>
<?php if ( $block['data']['background_image'] ): ?>
<style>
    .hero {
        background-image: url(<?php echo wp_get_attachment_image_url( $block['data']['background_image'], 'full' ); ?>);
    }
    @media (max-width: 767px) {
        .hero {
            background-image: url(<?php echo wp_get_attachment_image_url( $block['data']['background_mobile_image'], 'full' ); ?>);
        }
    }
</style>
    <?php endif; ?>
<section class="hero">
	<?php if ( $block['data']['title'] ): ?>
        <h1><?php echo $block['data']['title']; ?></h1>
	<?php endif; ?>
	<?php if ( $block['data']['description'] ): ?>
        <p><?php echo $block['data']['description']; ?></p>
	<?php endif; ?>
	<?php if ( $block['data']['button_text'] && $block['data']['button_link'] ): ?>
        <a href="<?php echo $block['data']['button_link'] ?>"><?php echo $block['data']['button_text']; ?></a>
	<?php endif; ?>
</section>
