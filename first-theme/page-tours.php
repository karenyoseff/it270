<?php get_header(); 
/* Template Name: Tours page */
?>




<!-- the index.php is assign to the blog page -->
<!-- begin wrapper -->
<div id="hero">
     <img src="<?php echo get_template_directory_uri() ; ?>/images/yellowstone-inner.jpg" alt="yellowstone">       
</div>

<div id="wrapper">
    <main>
<!-- if we dont have posts... -->
<?php if(have_posts()) : ?>

        <!-- image -->
        <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail() ; ?>
        <?php endif ?>
        <!-- end image -->

        <?php while(have_posts()) : the_post() ;?>
        <?php the_content() ; ?>
        <?php endwhile ; ?>
        <?php else : ?>
        <h2>
        <?php wpautop('Sorry, no posts were found!') ; ?>
        </h2>
        <?php endif ; ?>

        </main>
    <aside id="secondary" class="widget-area">
<?php dynamic_sidebar( 'sidebar-tours' ); ?>
<?php dynamic_sidebar( 'sidebar-tour-specials' ); ?>
</aside>

</div>
<!-- end wrapper -->
<?php get_footer(); ?>    