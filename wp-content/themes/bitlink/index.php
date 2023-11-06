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

// Get the post content
$sevicesPost = array(
    'numberposts' => -1
);
$post = get_post($sevicesPost);
$content = $post->post_content;

// Parse the content into blocks
$blocks = parse_blocks($content);


// Loop through the blocks and render paragraph blocks
for ($blockquan = 0; $blockQuan <= (count($blocks) - 1); $blockQuan++) {
    // Render the first block
$html_output = render_block($blocks[$blockQuan]);

// Display the HTML output
echo $html_output;
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