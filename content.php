<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article data-id="<?php the_ID(); ?>">
            <?php if ( has_post_thumbnail() ) { ?>
            <div class="post__thumbnail-wrapper"><a href="<?php the_permalink() ?>"><img class="post__thumbnail" src="<?php echo post_thumbnail_src(); ?>" alt="<?php the_title(); ?>" loading="lazy"></a></div><?php } ?>
                    <div class="post__content">
                <h3>
                    <a href="<?php the_permalink() ?>" class="loglist-title"><?php the_title(); ?></a>
                </h3>
                <p><?php if (post_password_required()):the_content(); else :  ?><?php if(has_excerpt()) the_excerpt();else echo '', mb_strimwidth(strip_tags($post->post_content),0,240,"...",'utf-8');endif; ?></p>
            </div>
            <div class="post__footer">
                <em class="fas fa-calendar-day"></em>
                <span class="post__footer-date"><?php the_time('Y年n月j日'); ?></span>
                <span><?php the_tags('', ' ', ''); ?></span>
            </div>
        </article>
<?php endwhile;endif;?>