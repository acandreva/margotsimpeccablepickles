<html>
<head>
    <title></title>
<?php wp_head(); ?>
    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="http://margots.heatherlaude.com/wp-content/themes/margotstheme/js/main.js"></script>
    <script type="text/javascript" src="http://margots.heatherlaude.com/wp-content/themes/margotstheme/js/shymenu.js"></script>

    <!-- Typekit -->
    <script src="https://use.typekit.net/kxt8yad.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>
<body>
<!--Mobile Nav-->
        <div class="shy-menu mobile-nav">
            <a class="shy-menu-hamburger">
                <span class="layer top"></span>
                <span class="layer mid"></span>
                <span class="layer btm"></span>
            </a>
            <div class="shy-menu-panel">
                <ul>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'mobile-menu',
                        'container_class' => 'mobile_menu'
                    )); ?>
                </ul>
            </div>
        </div>
        <div class="menu open">
            <a class="hamburger">
                <span class="layer top"></span>
                <span class="layer mid"></span>
                <span class="layer btm"></span>
            </a>
        </div>
<!--Desktop Nav-->
    <header class="desktop-nav">
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'main-menu1',
                        'container_class' => 'main_menu_lft'
                    )); ?>
                </div>
                <div class="four columns nav_logo">
                    <a href="http://margots.heatherlaude.com/" atl="margot's homepage">
                        <img src="http://margots.heatherlaude.com/wp-content/themes/margotstheme/images/margotslogo.png" />
                    </a>
                </div>
                <div class="four columns">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'main-menu2',
                        'container_class' => 'main_menu_rt'
                    )); ?>
                </div>
            </div>
        </div>
        <div class="nav_bg_color"></div>
    </header>
<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->