<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <nav id="burger-icon" class="burger-icon">
        <a href="#mobile-nav"><i class="fas fa-bars"></i></a>
    </nav>