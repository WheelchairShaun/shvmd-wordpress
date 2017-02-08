<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<main id="content" role="main">

<?php get_template_part( 'template-parts/home', 'hero' ); ?>

<?php get_template_part( 'template-parts/home', 'pledge' ); ?>

<?php get_template_part( 'template-parts/home', 'member_benefits' ); ?>

<?php get_template_part( 'template-parts/home', 'doctor' ); ?>

</main>

<?php
get_footer();
