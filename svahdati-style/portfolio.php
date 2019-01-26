<section id="portfolio" class="div-content">
    <h2>نمونه کارها</h2>
    <p class="page-desc">
        در این قسمت میتوانید برخی از نمونه کارهای من را مشاهده کنید. اگر دنبال موضوع خاصی میگردید میتوانید از طریق منوی
        دسته بندی آن را انتخاب کنید.
    </p>
    <br />
    <h4>دسته بندی :</h4>

    <ul class="filter">
        <li class="current all">
            <a href="#">همه</a></li>
        <li class="wp">
            <a href="#">وردپرس</a></li>
        <li class="logo">
            <a href="#">لوگو</a></li>
        <li class="bKart">
            <a href="#">کارت ویزیت</a></li>
    </ul>

    <ul class="portfolio group lb-album">

        <?php  $recent = new WP_Query("category_name=portfolio&showposts=20"); while($recent->have_posts()) : $recent->the_post();?>

        <li class="item" data-id="id-<?php if(get_post_custom_values('dataid')) : ?><?php echo get_post_meta($post->ID, 'dataid', true); ?><?php endif; ?>"
            data-type="<?php if(get_post_custom_values('type')) : ?><?php echo get_post_meta($post->ID, 'type', true); ?><?php endif; ?>">
            <a href="#<?php if(get_post_custom_values('name')) : ?><?php echo get_post_meta($post->ID, 'name', true); ?><?php endif; ?>">
                <img src="<?php if(get_post_custom_values('imgsmall')) : ?><?php echo get_post_meta($post->ID, 'imgsmall', true); ?><?php endif; ?>"
                    class="li-img" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                <span>
                    <?php the_title(); ?><br /><small>
                        <?php if(get_post_custom_values('sys')) : ?>
                        <?php echo get_post_meta($post->ID, 'sys', true); ?>
                        <?php endif; ?></small></span></a>
            <div class="lb-overlay" id="<?php if(get_post_custom_values('name')) : ?><?php echo get_post_meta($post->ID, 'name', true); ?><?php endif; ?>">
                <a href="#page" class="lb-close">x</a>
                <div class="lb-overlay-wrapper">
                    <img src="<?php if(get_post_custom_values('imgbig')) : ?><?php echo get_post_meta($post->ID, 'imgbig', true); ?><?php endif; ?>"
                        alt="<?php the_title(); ?>" />
                    <div>
                        <h3>
                            <?php the_title(); ?><br /><small>
                                <?php if(get_post_custom_values('sys')) : ?>
                                <?php echo get_post_meta($post->ID, 'sys', true); ?>
                                <?php endif; ?></small></h3>
                        <?php the_content(__('')); ?>


                        <p><strong>ابربرچسب ها : </strong>
                            <?php the_tags('', ', ', ' '); ?>
                        </p>

                        <?php if(get_post_custom_values('address-')) : ?><a href="<?php echo get_post_meta($post->ID, 'address-', true); ?>"
                            target="_blank" rel="nofollow" title="Visit" class="overlay-link"><span>آدرس وبسایت</span><span
                                class="arrow"></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>

    <p class="p-arrow">
        <a href="#contact" class="a-arrow">تماس با من<br />
            <img src="<?php bloginfo('template_url'); ?>/img/arrow-down.png" alt="down" /></a>
    </p>
</section>