<?php get_header(); ?>
    <main class="wrapper__main">
        <header class="header">
            <div class="animated fadeInDown"><a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false"><span aria-hidden="true" class="navbar-burger__line"></span><span aria-hidden="true" class="navbar-burger__line"></span><span aria-hidden="true" class="navbar-burger__line"></span></a>
                <nav class="nav">
                        <ul class="nav__list" id="navMenu"><?php inkthemes_nav(); ?></ul>
                    <ul class="nav__list nav__list--end">
                        <li class="nav__list-item">
                            <div class="themeswitch"><a title="Switch Theme"><i class="fas fa-adjust fa-fw" aria-hidden="true"></i></a></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    <div class="post animated fadeInDown">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article data-id="<?php the_ID(); ?>">
            <?php if ( has_post_thumbnail() ) { ?>
            <div class="post__thumbnail-wrapper"><a href="<?php the_permalink() ?>"><img class="post__thumbnail" src="<?php echo post_thumbnail_src(); ?>" alt="<?php the_title(); ?>" loading="lazy"></a></div>
            <?php } ?>
            <div class="post__content">
                <h1>
                    <a href="<?php the_permalink() ?>" class="loglist-title"><?php the_title(); ?></a>
                </h1>
                <ul class="post__meta">
            <li class="post__meta-item"><em class="fas fa-calendar-day post__meta-icon"></em><span class="post__meta-text"><?php the_time('Y/n/j'); ?></span></li>
                </ul>
                <div class="markdown"><?php the_content(); ?></div>
            </div>
        </article>
        <?php endwhile;endif;?>
        <?php if (get_option('comments_b')== 'true'){?><?php comments_template('', true); ?><?php }?>
    </div>
    </main>
<?php get_footer(); ?>