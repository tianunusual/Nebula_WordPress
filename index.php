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
        <?php include(TEMPLATEPATH . '/content.php'); ?>
    </div>
    <?php pagination($query_string); ?>
    </main>
<?php get_footer(); ?>