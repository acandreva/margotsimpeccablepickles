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
                <div class="twelve columns">
                    <?php wp_nav_menu(array(
                        'sort_column' => 'menu_order',
                        'container_class' => 'menu-header'
                    )); ?>
                </div>
            </div>
        </div>
    </header>
<!--END OF HEADER AREA - BEGIN SECTION CONTENT-->