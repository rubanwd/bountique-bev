<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<body>
    <div class="wrapp-ws">
        <nav class="mobile-main-nav">
            <div style="text-align: right;">
                <button class="close_main-nav">&#10005;</button>
            </div>
            <?php
                if ( function_exists( 'wp_nav_menu' ) )
                wp_nav_menu( 
                array( 
                    'theme_location' => 'main-menu',
                    'fallback_cb'=> 'main_menu',
                    'container' => 'ul') 
                    );
                else custom_menu();
            ?>
        </nav>
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
        <header class="single-header" style="background-image: url('<?php echo $featured_img_url ?>');background-repeat: no-repeat;background-position: top right;background-size: cover; ">
            <div class="header-inner wrap-container">
                <button class="mobile_menu_button">
                    <div></div>
                    <div></div>
                    <div></div>
                </button>
                <?php
                    the_custom_logo();
                    if (!has_custom_logo()) {
                ?>
                    <h1><?php bloginfo('name'); ?></h1>
                <?php
                    }
                ?>
                <nav>
                    <?php
                        if ( function_exists( 'wp_nav_menu' ) )
                        wp_nav_menu( 
                        array( 
                            'theme_location' => 'main-menu',
                            'fallback_cb'=> 'main_menu',
                            'container' => 'ul') 
                            );
                        else custom_menu();
                    ?>
                </nav>
                <div class="header-inner__title">
                    <h4><?php echo get_bloginfo( 'name' ); ?></h4>
                    <h1><?php echo get_bloginfo( 'description' ); ?></h1>
                    
                </div>
            </div>  
        </header>