<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
while (have_posts()){
    the_post();?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <hr>
    <?php
}
?>
</body>
</html>