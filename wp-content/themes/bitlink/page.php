<?php get_header(); ?>
<body>

<?php

while (have_posts()){
    the_post();?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <hr>
    <?php
}

if (is_page('our-posts')){
    // while (post_type_exists($post)->have_posts()){
    //     $post->the_post();?>
    <!-- //     <h2>
    //         <?php  // the_title(); ?>
    //     </h2>
    //     <?php  //the_content(); ?>
    //     <a href="
    //     <?php // echo get_the_permalink()?>
    //     ">Read more &raquo;</a>
    //     <hr> -->
         <?php
    // }
    echo "Hello";
}

?>

</body>
<?php get_footer(); ?>