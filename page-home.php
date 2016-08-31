<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<main id="content" role="main">

<?php get_template_part( 'template-parts/home', 'hero' ); ?>

<?php get_template_part( 'template-parts/home', 'better_healthcare' ); ?>

<hr class="section-divider">

<?php get_template_part( 'template-parts/home', 'who_member' ); ?>

<?php get_template_part( 'template-parts/home', 'member_benefits' ); ?>

</main>

<?php
get_footer();
