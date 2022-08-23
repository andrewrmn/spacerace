<?php

$columns = get_sub_field('row_count');
$height = get_sub_field('height');
$type = get_sub_field('type');
$hasIntroContent = get_sub_field('has_intro_content');
$introContent = get_sub_field('intro_content');

$class = '';

if( $type == 'tiles' ) {
  $class = 'row--tiles';
}
if( $type == 'images' ) {
  $class = 'row--images';
}
?>

<div class="wrapper-full <?php echo $padding; ?>">
  <div class="wrapper" data-animate-in="fade">
    <?php if( $introContent ): ?>
    <div class="rte pb-4 mb-6">
      <?php echo $introContent; ?>
    </div>
    <?php endif; ?>
  </div>

  <div class="wrapper" data-animate-in="up">
    <div class="row team-list">

      <?php $i=1; while ( have_rows('team') ) : the_row();
        $bio = get_sub_field('bio');
        $slug = sanitize_title( get_sub_field('name') );
      ?>
      <div class="col--xs--6 col--md--3 mb-6"<?php if( $bio ): ?> data-click="<?php echo $slug . '-' . $i; ?>"<?php endif; ?>  data-animate-in="up">
        <div>
          <?php $image = get_sub_field('headshot'); if( !empty($image) ): ?>
            <figure class="team-img">
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </figure>
          <?php endif; ?>
          <div>
            <h3 class="h4 font-weight-500"><?php the_sub_field('name'); ?></h3>
            <p class="h6-alt text-light"><?php the_sub_field('title'); ?></p>
          </div>
        </div>
      </div>
      <?php $i++; endwhile; ?>

    </div>
  </div>
</div>

<?php $i=1; while ( have_rows('team') ) : the_row();
  $bio = get_sub_field('bio');
  $slug = sanitize_title( get_sub_field('name') );
?>
<div class="slide-out-wrap" id="<?php echo $slug . '-' . $i; ?>">
  <div class="slide-out">
    <div>
      <div class="slide-out-close" data-click="<?php echo $slug . '-' . $i; ?>">
        <span>close</span>
      </div>

      <?php $image = get_sub_field('headshot'); if( !empty($image) ): ?>
      <div class="team-img-wrap">
        <figure class="team-img">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </figure>
      </div>
      <?php endif; ?>
      <div>
        <h3 class="h4 font-weight-500"><?php the_sub_field('name'); ?></h3>
        <p class="h6-alt text-light"><?php the_sub_field('title'); ?></p>
      </div>
      <div class="rte mt-6">
        <?php echo $bio; ?>
      </div>

    </div>
  </div>
  <div class="screen" data-click="<?php echo $slug . '-' . $i; ?>"></div>
</div>


<?php $i++; endwhile; ?>
