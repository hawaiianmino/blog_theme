<!-- pickup -->
<div id="pickup">
    <div class="inner swiper">
        <div class="pickup-items swiper-wrapper">
            <?php $args = array(
                'tag' => 'pickup',
                'order' => 'DESC',
                'post_type' => 'post',
                'posts_per_page' => 3,
            ) ?>
            <?php $pickup_posts = get_posts($args); ?>
            <?php foreach($pickup_posts as $post): setup_postdata($post); ?>
            <a href="<?php echo esc_url(get_permalink($id)); ?>" class="pickup-item swiper-slide">
                <div class="pickup-item-img">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail('large');
                    }else{
                        echo '<img src="'.esc_url(get_template_directory_uri()).'/img/noimg.png" alt="">';
                    } ?>
                    <div class="pickup-item-tag">
                        <?php my_the_post_category(false); ?>
                    </div><!-- /pickup-item-tag -->
                </div><!-- /pickup-item-img -->
                <div class="pickup-item-body">
                    <h2 class="pickup-item-title">
                        <?php 
                            if(mb_strlen($post->post_title, 'UTF-8') > 15 ) {
                                $title = mb_substr($post->post_title, 0 ,15, 'UTF-8');
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                        ?>
                    </h2><!-- /pickup-item-title -->
                </div><!-- /pickup-item-body -->
            </a><!-- /pickup-item -->
            <?php endforeach; wp_reset_postdata(); ?>
        </div><!-- /pickup-items -->
    </div><!-- /inner -->
</div><!-- /pickup -->