<?php
/**
 * The template for displaying the work page
 *
 * @package spacerace2021
 */

get_header();

?>
	<div class="wrapper-full my-8 mt-lg-6 pt-lg-6">
		<div class="wrapper py-8" data-animate-in="fade">
			<h1 class="h5 mb-3 line-right" data-detect-viewport>< The work ></h1>
			<p class="h1">What we've built</p>

			<?php
				$args = array(
				  'post_type' => 'work',
				  'posts_per_page' => '-1'
				);
				$query = new WP_Query( $args );
			?>

			<ul class="work-list mt-6 pt-6">
				<?php while ($query->have_posts()): $query->the_post(); ?>
				<li data-animate-in="up">
					<a href="<?php the_permalink(); ?>">
						<figure>
							<img src="<?php the_post_thumbnail(); ?>" alt="" />
						</figure>
						<h2 class="mb-2"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</a>
				</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>


		<?php get_template_part('blocks/_index'); ?>



<?php

get_footer();
