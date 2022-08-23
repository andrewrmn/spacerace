<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package spacerace2021
 */

get_header();

		while ( have_posts() ) : the_post();

			get_template_part('blocks/_index');

			$args = array(
				'post_type' => 'work',
				'posts_per_page' => '-1',
				'post__not_in'  => array(get_the_ID())
			);
			$query = new WP_Query( $args );

		if ( $query->have_posts() ): ?>

		<div class="wrapper-full my-8">
			<div class="wrapper">
				<h1 class="h5" data-detect-viewport>< More projects ></h1>
				<ul class="work-list mt-6">
					<?php while ($query->have_posts()): $query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<figure>
								<img src="<?php the_post_thumbnail(); ?>" alt="" />
							</figure>
							<h2 class="mb-2"><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						</a>
					</li>
					<?php endwhile;?>
				</ul>

				<div class="text-center">
					<a class="font-weight-500" href="<?php echo home_url(); ?>/work/">View all work</a>
				</div>
			</div>
		</div>
			<?php endif; ?>
		<?php wp_reset_postdata(); ?>

<?php
endwhile;
get_footer();
