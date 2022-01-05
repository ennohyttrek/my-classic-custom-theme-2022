<?php get_header(); ?>

<header id="main-header" class="main-header">
    <div class="inner-wrapper">
        <h1><?php bloginfo('title'); ?></h1>
    </div>
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

    <article class="my-post-content">
        <h2><?php the_title(); ?></h2>



        <?php  the_content(); ?>
    </article>


    <?php
            endwhile; 
        endif; 
?>
    <!--Loop ends-->
</main>

<footer id="main-footer" class="main-footer">
    <div class="inner-wrapper">
        <p>index.php</p>

        <?php get_footer(); ?>
