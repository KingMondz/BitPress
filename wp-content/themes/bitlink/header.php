<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
</head>
<a href="<?php echo site_url(); ?>">
    <p><?php echo site_url(); ?></p>
</a>
<span>Below are auto generated links to all other pages</span>
<?php
wp_list_pages(array(
    'title_li'=>NULL
));

?>