<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <!-- [if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen, projection"/>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
    <div class="blog-header">
            <span id="site-title"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                <?php bloginfo('name'); ?></a></span>
            <?php if ( is_active_sidebar( 'top-search-area' ) ) : ?>
                <div class="widget-section">
                    <?php dynamic_sidebar( 'top-search-area'); ?>
                </div>
            <?php endif; ?>
    </div>
    <div class="container">
        <div class="left-section">
