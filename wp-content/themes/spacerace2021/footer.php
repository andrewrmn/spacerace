<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spacerace2021
 */

?>

	</main>

	<footer class="site-footer">

		<div class="wrapper-wide">
			<div class="d-md-flex">
				<div class="col-12 col-md-5 col-lg-6 mb-6 mb-md-0">
					<b>Space Race</b>
					<p>A website design and development<br> division of Lunar / Solar Group.</p>
					<img class="mt-4 mt-md-6" style="max-width: 176px;" src="<?php echo home_url(); ?>/wp-content/uploads/2021/05/logos.svg" />
				</div>
				<div class="col-12 col-md-7 col-lg">
					<div class="d-md-flex">
						<div class="col-12 col-md-6">
							<div class="mb-5">
								<b class="mb-2">New York</b>
								500 7th Ave</br>
								New York City, NY 10018
							</div>

							<div class="mb-4">
								<b class="mb-2">Utah</b>
								1389 Center Dr</br>
								Park City, UT 84098
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="mb-5">
								<b class="mb-2">General Contact</b>
								<a href="mailto:missioncontrol@lunarsolargroup.com">missioncontrol@lunarsolargroup.com</a>
							</div>

							<div class="mb-4">
								<b class="mb-2">Careers Contact</b>
								<a href="mailto:careers@lunarsolargroup.com">careers@lunarsolargroup.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="site-footer__legal">

					<small>© <?php echo date('Y'); ?> Lunar / Solar Group</small>

					<ul>
						<?php
						$primaryNav = array(
							'theme_location' => 'footer-legal',
							'container_class' => '',
							'items_wrap' => '%3$s',
							'container' => '',
							'menu_class' => ''
						);
						wp_nav_menu( $primaryNav );
						?>
					</ul>

			</div>

		</div>





	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
