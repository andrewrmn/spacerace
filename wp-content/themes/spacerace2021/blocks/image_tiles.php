<div class="wrapper-full py-6 py-md-8">

  <div class="wrapper-after-md">
    <?php $i=1; while ( have_rows('image_tile') ) : the_row(); $layout = get_sub_field('layout'); ?>
      <div class="image-tile<?php if( $layout == 'image-right' ){ echo ' image-tile--flip'; } ?>">
        <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
        <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </figure>
        <?php endif; ?>

        <div class="image-tile__content">
          <div class="rte">
              <?php the_sub_field('content'); ?>
          </div>
        </div>
      </div>
    <?php $i++; endwhile; ?>
  </div>
</div>
