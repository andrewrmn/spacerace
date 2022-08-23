<?php

$columns = get_sub_field('row_count');
$height = get_sub_field('height');
$type = get_sub_field('type');
$hasIntroContent = get_sub_field('has_intro_content');
$introContent = get_sub_field('intro_content');
$bg = get_sub_field('background');

$cols = 'col--xs--12 col--sm--10 col--md--9 col--lg--9 px-lg-4 mx-auto mb-6';

if( $columns == 'Two' ) {
  $cols = 'ccol--xs--12 col--md--6 mb-6';
}

if( $columns == 'Three' ) {
  $cols = 'col--xs--12 col--md--4 mb-6';
}

if( $columns == 'Four' ) {
  $cols = 'col--xs--12 col--md--3 mb-6';
}

if( $columns == 'Six' ) {
  $cols = 'col--xs--6 col--md--4 col--lg--2 mb-6 mb-lg-0';
}

$padding = 'py-6 my-6';

if( $bg != 'bg-white' ) {
  $padding = 'my-8';
}

if( $height == 'short' ) {
  $padding = 'py-4 my-4';

  if( $bg != 'bg-white' ) {
    $padding = 'py-6';
  }
}

$class = '';

if( $type == 'tiles' ) {
  $class = 'row--tiles';
}
if( $type == 'images' ) {
  $class = 'row--images';
}
?>

<div class="wrapper-full <?php echo $padding; ?>">
  <div class="wrapper" data-animate-in="up">
    <?php if( $introContent && $hasIntroContent ): ?>
    <div class="rte pb-4 mb-6">
      <?php echo $introContent; ?>
    </div>
    <?php endif; ?>
  </div>

  <div class="wrapper<?php if( get_sub_field('slider_mobile') ): ?> wrapper-scroll-h<?php endif; ?>" data-animate-in="up">
    <div class="row <?php echo $class; ?>"  data-animate-in="fade">
    <?php $i=1; while ( have_rows('content_blks') ) : the_row(); ?>
      <div class="<?php echo $cols; ?>">
        <div>
          <?php if( $type == 'images' ) { $image = get_sub_field('image'); if( !empty($image) ): ?>
          <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </figure>
          <?php endif;
          } ?>
          <?php if( get_sub_field('content') ): ?>
          <div class="rte">
              <?php the_sub_field('content'); ?>
          </div>
          <?php endif; ?>

          <?php $link = get_sub_field('link'); if( $link ): ?>
            <div class="mt-4<?php if( $columns == 'One' ) { echo ' text-center'; } ?>">
              <a class="<?php the_sub_field('link_type'); ?>" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                <span><?php echo $link['title']; ?></span>

                <svg width="8px" height="8px" viewBox="0 0 8.7 8.9">
                  <ellipse cx="1" cy="4.4" rx="1" ry="1"/>
                  <polygon points="4.4,8.9 3.6,8.2 7.3,4.4 3.6,0.7 4.4,0 8.7,4.4 "/>
                </svg>

              </a>
            </div>

          <?php endif; ?>
        </div>
      </div>
    <?php $i++; endwhile; ?>
    </div>
  </div>
</div>
