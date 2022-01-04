<?php get_header(); ?>

<header id="main-header" class="main-header">
    <p><?php bloginfo('title'); ?></p>
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

    <h1><?php the_title(); ?></h1>

    <?php 

        the_content();
            
            endwhile; 
        endif; 
?>
    <!--Loop ends-->
</main>

<footer id="main-footer" class="main-footer">
        <p>singular.php</p>

    <?php get_footer(); ?>
