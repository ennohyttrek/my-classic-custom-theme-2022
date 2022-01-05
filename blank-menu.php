	
<?php 
/* 
Template Name: Blank mit Hauptmenü 
Template Post Type: post, page
*/ 
?>

<?php get_header(); ?>

<nav id="main-nav" class="main-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</nav>

<main id="main-content" class="main-content">
    <!--Loop starts-->
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
 
            the_content();

   
            endwhile; 
        endif; 
    ?>
    <!--Loop ends-->
    
</main>

<footer id="main-footer" class="main-footer">
    <div class="inner-wrapper">
        <p class="dev-info">blank-menu.php</p>

<?php get_footer(); ?>
