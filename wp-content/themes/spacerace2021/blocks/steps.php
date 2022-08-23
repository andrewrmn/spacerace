

<?php if( have_rows('steps') ): ?>
  <div class="wrapper">

    <div class="step-list">
      <?php $i=1; while ( have_rows('steps') ) : the_row(); ?>
      <div class="step" data-animate-in="up">
        <span class="h5 mb-2 text-light"><?php the_sub_field('subtitle'); ?></span>
        <h2 class="h4"><?php the_sub_field('title'); ?></h2>
        <div class="rte">
          <?php the_sub_field('description'); ?>
        </div>
      </div>
      <?php $i++; endwhile; ?>
    </div>

    <div class="step-circles">
      <?php $i=0; while ( have_rows('steps') ) : the_row(); ?>
      <div class="step-circle" data-animate-in="fade">
        <span class="h3 m-0"><?php the_sub_field('title'); ?></span>
        <?php if ($i % 2 == 0) { ?>
          <svg class="js-rotate" viewBox="0 0 510 510">
            <circle fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linejoin="round" stroke-dasharray="1,4" cx="255" cy="255" r="238"/>
            <circle fill="#FFFFFF" cx="35" cy="160" r="8"/>
          </svg>
        <?php } else { ?>
          <svg class="js-rotate reverse" viewBox="0 0 510 510">
            <circle fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linejoin="round" stroke-dasharray="1,4" cx="255" cy="255" r="238"/>
            <circle fill="#FFFFFF" cx="15" cy="254" r="8"/>
            <circle fill="#FFFFFF" cx="255" cy="495" r="8"/>
            <circle fill="#FFFFFF" cx="456" cy="387" r="8"/>
          </svg>
        <?php } ?>
      </div>
      <?php $i++; endwhile; ?>
    </div>

  </div>
  <?php endif; ?>
