<?php get_header(); ?>

<!-- begin wrapper --> 
<div id="wrapper">
    <!-- add wrong page image -->
    <main>

<h2>This is somewhat embarrassing, isn’t it?'</h2>
    <p>It looks like nothing was found at this location. Maybe try another search?</p>
<?php get_search_form(); ?>
<p>Or, browse through our pages!  </p>
<?php wp_list_pages() ;?>
</main>

    <aside>
        This is my 404.php page!
    </aside>


</div>


<!-- end wrapper -->
<?php get_footer(); ?>