<?php
/**
 * Template Name: Timetable
 */
__( 'Timetable', 'dojocon-japan-2017' );
get_header(); ?>

<?php
$post_type_obj = get_post_type_object( get_post_type() );
get_template_part( 'templates/singular/content', 'timetable' );
?>

<?php get_footer(); ?>
