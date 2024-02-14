<?php
get_header();

while (have_posts()) {
    the_post();

    the_content();
    the_post_thumbnail('full', array('class' => 'img-fluid w-100 rounded-top'));
    the_title('<h1 align="center">', '</h1>');
    // Your custom layout for single posts in a specific category
}
get_footer();
