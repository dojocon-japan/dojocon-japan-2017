<?php get_header(); ?>

<?php
$post_type_obj = get_post_type_object( get_post_type() );
get_template_part( 'templates/singular/content', $post_type_obj->name );
?>

<?php get_footer(); ?>
