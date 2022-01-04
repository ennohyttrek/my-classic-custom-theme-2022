<?php get_header(); ?>

<header id="main-header" class="main-header">
    <h1><?php bloginfo('title'); ?></h1>
</header>

<nav id="main-nav" class="main-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</nav>

<main id="main-content" class="main-content">
    <!--Loop starts-->
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
?>

    <h2><?php the_title(); ?></h2>

    <?php 

        the_content();
            
            endwhile; 
        endif; 
?>
    <!--Loop ends-->
</main>

<footer id="main-footer" class="main-footer">

    <?php get_footer(); ?>
