<?php get_header(); ?>

<header>
<h1><?php bloginfo('title'); ?></h1>
</header>    

    <nav id="main-nav" class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

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


<footer>

<?php get_footer(); ?>
