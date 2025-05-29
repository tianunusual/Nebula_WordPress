<!DOCTYPE html>
<html dir="ltr" lang="zh-cn" data-theme="" class="html theme--light">
<head>
    <meta charset="utf-8"/>
    <title><?php if (is_home() ) {?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php if ( $paged < 
2 ) {} else { echo (' - 第'); echo ($paged);echo ('页');}?><?php } else {?><?php wp_title(' - ', true, 'right'); 
?><?php bloginfo('name'); ?><?php if ( $paged < 2 ) {} else { echo (' - 第'); echo ($paged);echo ('页');}?><?php } 
?></title><?php if (is_home()){
	$description = (get_settings("description"));
	$keywords = (get_settings("keyword"));
} elseif (is_single()){
    if ($post->post_excerpt) {$description = $post->post_excerpt;} 
	 else {$description = substr(strip_tags($post->post_content),0,240);}
    $keywords = "";
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {
        $keywords = $keywords . $tag->name . ", ";
    }
} elseif (is_category()){
	$description = strip_tags(category_description());
	$categoryname = get_the_category();
	$keywords = $categoryname[0]->cat_name;
} elseif (is_tag()){
	$description = trim(strip_tags(tag_description($tag_ID)));

	$keywords = single_tag_title('', false);
} elseif (is_page()){
	$description = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 140,"...");
	$keywords = $post->post_title;
}
?>
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/markupHighlight.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/fontawesome/css/fontawesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/fontawesome/css/solid.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/fontawesome/css/regular.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/fontawesome/css/brands.min.css" type="text/css"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/anatole-header.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/anatole-theme-switcher.min.js"></script>
    <?php wp_head(); ?>
    </head>
<body class="body">
<div class="wrapper">
    <aside class="wrapper__sidebar">
        <div class="sidebar animated fadeInDown">
            <div class="sidebar__content">
                <div class="sidebar__introduction">
                    <img class="sidebar__introduction-profileimage" src="<?php echo get_option('logo'); ?>" alt="<?php bloginfo('name'); ?>" />
                    <h1 class="sidebar__introduction-title">
                        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                    </h1>
                    <div class="sidebar__introduction-description">
                        <p></p>
                    </div>
                                            <div class="sidebar__introduction-description">
                            <script src="https://api.xk.ee/hitokoto/index.php"></script>
                        </div>
                                    </div>
                <ul class="sidebar__list">
                </ul>
            </div>
            <footer class="footer footer__sidebar">
                <div class="footer__item"><?php echo get_option('copyright'); ?></div>
                                <small></small>
            </footer>
        </div>
    </aside>