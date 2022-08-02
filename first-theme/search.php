<?php get_header(); ?>

<!-- begin wrapper --> 
<div id="wrapper">
    <!-- we will addd a happy picture here -->

    <main>
    <!-- if we dont have posts... -->
        <?php if(have_posts()) : ?>
        <!-- we will addd a happy picture here -->
        <h2>Search results for: <?php echo get_search_query() ; ?>
        </h2>
        <!-- we will add how many posts or pages exist -->
        <p>Our findings for
        <?php /* Search Count */
$allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></p>

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
        No content for: <?php echo get_search_query() ; ?>
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