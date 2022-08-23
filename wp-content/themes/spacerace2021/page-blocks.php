<?php
/**
 * Template Name: Page Builder
 *
 * @package spacerace2021
 */

get_header();
	while ( have_posts() ) : the_post();
		get_template_part('blocks/_index');
	endwhile;
get_footer();
