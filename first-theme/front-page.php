<?php get_header(); 
/* Template Name: Front page */
?>




<!-- the index.php is assign to the blog page -->


<div id="hero">
     <img src="<?php echo get_template_directory_uri() ; ?>/images/yellowstone-header-home.jpg" alt="yellowstone">       
</div>

 <!-- begin wrapper -->
<div id="wrapper">
<!-- if we dont have posts... -->
<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ;?>
        <?php the_content() ; ?>
        <?php endwhile ; ?>
        <?php endif ; ?>

</div>
<!-- end wrapper -->
<?php get_footer(); ?>    