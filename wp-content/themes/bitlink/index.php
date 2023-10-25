<?php get_header(); ?>
<body>
<hr>
 <h6>This is HOME</h6>

<?php
while (have_posts()){
    the_post();?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <a href="<?php echo get_the_permalink()?>">Read more &raquo;</a>
    <hr>
    <?php
}
?>
<h2>Some of our services include</h2>
<?php
$ourServices=new WP_Query(array(
    'post_type'=>'service',
    'post_per_page'=> -1
));
while($ourServices->have_posts()){
    $ourServices->the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <a href="<?php echo get_the_permalink()?>">Read more &raquo;</a>
    <hr>

<?php
}
wp_reset_postdata();
?>
</body>
<?php get_footer(); ?>