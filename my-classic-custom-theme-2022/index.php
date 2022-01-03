<?php get_header(); ?>


<h1><?php bloginfo('title'); ?></h1>

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


<?php get_footer(); ?>
