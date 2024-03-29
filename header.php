<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
<meta name="keywords" content="<?php echo esc_html( implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ) ); ?>" />
<meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
<meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
<meta name="twitter:description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
<meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
<meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
<meta name="twitter:widgets:theme" content="light" />
<meta name="twitter:widgets:link-color" content="#007acc" />
<meta name="twitter:widgets:border-color" content="#fff" />
<link rel="canonical" href="<?php echo esc_url( 'https://' . $_SERVER["HTTP_HOST"] . parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ); ?>" />
<script type="application/ld+json">
    
{
"@context": "https://www.schema.org/",
"@type": "WebSite",
"name": "<?php bloginfo( 'name' ); ?>",
"url": "<?php echo esc_url( home_url() ); ?>/"
}
</script>
<script type="application/ld+json">
{
"@context": "https://www.schema.org/",
"@type": "Organization",
"name": "<?php bloginfo( 'name' ); ?>",
"url": "<?php echo esc_url( home_url() ); ?>/",
"logo": "<?php if ( has_custom_logo() ) { $custom_logo_id = get_theme_mod( 'custom_logo' ); $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); echo esc_url( $logo[0] ); } ?>",
"image": "<?php if ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>",
"description": "<?php bloginfo( 'description' ); ?>"
}
</script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
    // Header Phone number
    $header_top_phone_number = get_field("header_top_phone_number", 17);
?>

<div id="wrapper" class="hfeed">
    <div class="header-top-banner">
        <div class="container">
            <div>
                <strong>WE DESIGN</strong>
                <strong>WE DELIVER</strong>
                <strong>WE INSTALL</strong>
            </div>
            <div class="header_phone_div">
                <?php echo $header_top_phone_number ?>
            </div>
        </div>
    </div>

    <header id="header" role="banner">
        <div class="container">
            <div id="branding">
                <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
                    if ( is_front_page() || is_home() || is_front_page() && is_home() ) {
                    echo '<h1>';
                    }
                    if ( has_custom_logo() ) {
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    $nologo = '';
                    } elseif ( has_site_icon() ) {
                    $logo = get_site_icon_url();
                    $nologo = '';
                    } else {
                    $logo = '';
                    $nologo = 'no-logo';
                    }
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span class="screen-reader-text" itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span><span id="logo-container" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><img src="';
                    if ( has_custom_logo() ) {
                    echo esc_url( $logo[0] );
                    } else {
                    echo esc_url( $logo );
                    }
                    echo '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" id="logo" class="' . esc_attr( $nologo ) . '" itemprop="url" /></span></a>';
                    if ( is_front_page() || is_home() || is_front_page() && is_home() ) {
                    echo '</h1>';
                    }
                    ?>
                </div>

                <!-- <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div> -->
            </div>

            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <span class="looper before" tabindex="0"></span>
                    <button type="button" class="menu-toggle first"><span class="menu-icon">&#9776;</span><span class="menu-text screen-reader-text"><?php esc_html_e( ' Menu', 'generic' ); ?></span></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                    <!-- <div id="search"><form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url() ); ?>/"><label><span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'generic' ); ?></span><input type="search" class="search-field last" placeholder="<?php esc_attr_e( 'Search for products', 'generic' ); ?>" value="" name="s"><span></span></label><input type="submit" class="search-submit" value="<?php esc_attr_e( 'Searchsss', 'generic' ); ?>"></form></div> -->
                <span class="looper after" tabindex="0"></span>
            </nav>
            
            <div class="header-info">
                <div id="search">
                    <?php get_search_form(); ?>
                </div>

                <!-- User account -->
                <?php if ( is_user_logged_in() ) { ?>
                    <a class="woocom-my-account-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('<i class="fas fa-user"></i> <p style="margin-left: 5px">Account </p>','woothemes'); ?></a>
                <?php } 
                else { ?>
                    <a class="woocom-my-account-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('<i class="fa fa-user"></i> <p>Log in </p>','woothemes'); ?></a>
                <?php } ?>

                <!-- Cart -->
                <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                    <i class="fas fa-shopping-cart"></i><p style="margin-left: 5px">
                    <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </p>
                    <!-- –  -->
                    <?php // echo WC()->cart->get_cart_total(); ?>
                </a>
            </div>

            <div id="mainMobileProductCatTrigger">
                <button class="openbtn" onclick="openNav()">☰</button>  
            </div>
        </div>
    </header>
    
    <div class="container sub-header">
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'main-products-cat-placement', 
                'container_class' => 'main-product-cat-menu' ) ); 
        ?>
    </div>

    <!-- Mobile main product nav -->
    <div id="mobileMainProductCatMenu">
        <div href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</div>

        <h4>My Account</h4>
        <!-- User account -->
        <?php if ( is_user_logged_in() ) { ?>
            <a class="woocom-my-account-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><?php _e('<i class="fas fa-user"></i> <p style="margin-left: 5px">My Account </p>','woothemes'); ?></a>
        <?php } 
        else { ?>
            <a class="woocom-my-account-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><?php _e('<i class="fas fa-user"></i> <p>Log in </p>','woothemes'); ?></a>
        <?php } ?>

        <!-- Cart -->
        <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
            <i class="fas fa-shopping-cart"></i><p style="margin-left: 5px">
            <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></p>
            <!-- – -->
            <?php // echo WC()->cart->get_cart_total(); ?>
        </a>

        <div id="search" class="wp-main-search-mobile">
            <?php get_search_form(); ?>
        </div>

        <br><br>

        <h4>Product Categories</h4>
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'main-mobile-products-cat-placement', 
                'container_class' => 'main-mobile-product-cat-menu' ) ); 
        ?>

        <h4 style="margin-top: 25px;">Useful Links</h4>
        <?php 
            wp_nav_menu( array( 
                'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 
                'link_after' => '</span>' ) ); 
        ?>
    </div>

    <!-- Initial -->
    <?php if (is_blog()) { get_template_part( 'blog-header' ); }?>
    <main id="content" role="main">