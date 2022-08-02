<?php get_header(); ?>

<!-- begin wrapper --> 
<div id="hero">
     <img src="<?php echo get_template_directory_uri() ; ?>/images/yellowstone-inner.jpg" alt="yellowstone">       
</div>
<div id="wrapper">
    <main>
    <!-- if we dont have posts... -->
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ;?>
        <!-- title names -->
        <article class="post">
        <h2 class="title" > 
        <a href="<?php the_permalink() ; ?>"> 
        <?php the_title() ; ?>
        </a>
        </h2> 
        <!-- description -->
        <div class="meta"> 
        <span><b>Posted by</b> <?php the_author() ; ?></span>
        <span><b>Posted on</b> <?php the_time('F j, Y g:i a') ; ?></span>
        </div>

        <div class="thumbnail">
        <?php if(has_post_thumbnail()) : ?>
            <a href="<?php the_permalink() ; ?>">
            <?php the_post_thumbnail() ; ?>
            </a>
        <?php endif ?>
        </div>

        <!-- read more link -->
        <?php the_excerpt() ; ?>
        <span class="block">
        <a href="<?php the_permalink() ; ?>">Read more about <?php the_title() ; ?></a>
        </span>
        


        </article>
        <?php endwhile ; ?>
        <?php else : ?>
        <h2>
         Search Results:
        </h2>
        <p> Sorrry, we could nowt find anything regarding your search terms. 
            Would you like to search again, using different keywords? </p>
            <?php get_search_form(); ?>
        <?php endif ; ?>
    </main>
    
    <?php get_sidebar() ; ?>
    


</div>


<!-- end wrapper -->
<?php get_footer(); ?>