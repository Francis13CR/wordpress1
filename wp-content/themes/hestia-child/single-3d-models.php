<?php
get_header();

do_action('hestia_before_single_post_wrapper');
?>

<div class="<?php echo hestia_layout(); ?> model-page-3d">
    <div class="blog-post blog-post-wrapper">
        <div class="container">
            <?php
            $link = get_field('link');
            if (isset($link)) :
            ?>
                <div class="sketchfab-embed-wrapper"> 
                    <iframe class="model-object-3d" title="Droll Robot17" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/fee5a517d2164f8189058df73d769698/embed"> </iframe>
                    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> </p>
                </div>
            <?php endif; ?>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>
<div class="footer-wrapper">
    <?php get_footer(); ?>