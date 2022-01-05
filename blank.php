	
<?php 
/* 
Template Name: Blank 
Template Post Type: post, page
*/ 
?>

<?php get_header(); ?>

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
        <p class="dev-info">blank.php</p>

<?php get_footer(); ?>
