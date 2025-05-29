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
        <div style="font-size: 72px;font-weight: 600;text-align: center;">404</div>
        <div style="font-size: 32px;text-align: center;">页面没找到，请查看其他内容！</div>
    </div>
    </main>
<?php get_footer(); ?>