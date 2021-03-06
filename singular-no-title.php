<?php 
/* 
Template Name: Singular ohne Titel 
Template Post Type: post, page
*/ 
?>


<?php get_header(); ?>

<header id="main-header" class="main-header">
    <div class="inner-wrapper">
        <p class="site-title"><?php bloginfo('title'); ?></p>
        
        <aside class="header-widgets">
            <?php dynamic_sidebar( 'header-widgets' ); ?>
        </aside>
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



    <article class="my-post-content my-singular-post-content">

        <?php if ( has_post_thumbnail()) : ?>

        <figure class="my-post-thumbnail">
            <?php the_post_thumbnail( 'large' ); ?>
        </figure>

        <?php endif; ?>

        <h1 class="my-post-title"><?php the_title(); ?></h1>
        

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
        <p class="dev-info">singular.php</p>

        <?php get_footer(); ?>
