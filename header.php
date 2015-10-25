<html>
<head>
    <title></title>
<?php wp_head(); ?>
    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="http://margots.heatherlaude.com/wp-content/themes/margotstheme/js/main.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="five columns">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'main-menu1',
                        'container_class' => 'main_menu_lft'
                    )); ?>
                </div>
                <div class="two columns nav_logo">
                    <img src="http://margots.heatherlaude.com/wp-content/themes/margotstheme/images/margotslogo.png">
                </div>
                <div class="five columns">
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