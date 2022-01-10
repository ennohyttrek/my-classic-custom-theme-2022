<?php get_header(); ?>

<header id="main-header" class="main-header">
    <div class="inner-wrapper">
        <h1 class="site-title"><?php bloginfo('title'); ?></h1>
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
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <?php if ( has_post_thumbnail()) : ?>
        <figure class="my-post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium' ); ?>
            </a>
        </figure>
        <?php endif; ?>

        <?php the_excerpt(); ?>
    </article>


    <?php 


   
            endwhile; 
        endif; 
?>
    <!--Loop ends-->
</main>

<footer id="main-footer" class="main-footer">
    <div class="inner-wrapper">
        <p class="dev-info">index.php</p>

        <?php get_footer(); ?>
