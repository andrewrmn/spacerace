<?php


$introContent = get_sub_field('intro_content');

?>

<div class="wrapper-full my-8">
  <div class="wrapper" data-animate-in="up">
    <?php if( $introContent ): ?>
    <div class="rte pb-4 mb-6">
      <?php echo $introContent; ?>
    </div>
    <?php endif; ?>
  </div>

  <div class="wrapper" data-animate-in="up">
    <div class="stat-list">
    <?php $i=1; while ( have_rows('stats') ) : the_row(); ?>
      <div class="stat" data-animate-in="up">
        <div>
          <span class="number">
            <span><?php the_sub_field('pre_number'); ?></span><span class="js-count" data-detect-viewport data-count="<?php the_sub_field('number'); ?>"><?php the_sub_field('number'); ?></span><span><?php the_sub_field('unit'); ?></span>
          </span>
          <?php if( get_sub_field('description') ): ?>
          <div class="rte">
              <?php the_sub_field('description'); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    <?php $i++; endwhile; ?>
    </div>
  </div>
</div>
