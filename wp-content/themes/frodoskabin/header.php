<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
        <meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

    <?php $dep = get_field('landing_dep');?>

    <div class="container-fluid">

        <?php if(!is_page_template("template-frontpage.php")):?>

        <header class="row header clear" role="banner">

            <div class="container">

                <div class="col-xs-6 col-sm-6 col-lg-4">

                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">

                            <?php
                            the_custom_logo();
                            if (!has_custom_logo()) { ?>
                                <h1><?php bloginfo('name'); ?></h1>
                            <?php } ?>

                        </a>
                    </div>

                </div>

                <div class="col-xs-6 col-sm-6 col-lg-4">

                    <?php if($dep == 'catering'):?>

                        <span class="heading">
                            Catering
                        </span>

                    <?php else:?>

                        <span class="heading">
                            Take-away
                        </span>

                    <?php endif;?>

                </div>

            </div>

        </header>

        <div class="navigation row<?php echo ' '.$dep;?>">

            <div class="col-lg-12">

                <div class="container">

                    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php if($dep == 'catering'){
                                    catering_menu();
                                } else {
                                    takeaway_menu();
                                }?>
                            </div>

                    </nav>

                </div>

            </div>

        </div>

        <?php endif;?>