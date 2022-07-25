<?php get_header(); 
/* Template Name: Tours page */
?>




<!-- the index.php is assign to the blog page -->
<!-- begin wrapper -->
<div id="wrapper">
    <main>
<!-- if we dont have posts... -->
<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ;?>
        <?php the_content() ; ?>
        <?php endwhile ; ?>
        <?php else : ?>
        <h2>
        <?php wpautop('Sorry, no posts were found!') ; ?>
        </h2>
        <?php endif ; ?>

        </main>
        <aside>
            
        </aside>

</div>
<!-- end wrapper -->
<?php get_footer(); ?>    