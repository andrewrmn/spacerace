<?php

$count = count( get_sub_field('testimonials') );

if( have_rows('testimonials') ): ?>
<div class="wrapper" data-animate-in="up">

  <div class="carousel js-carousel js-carousel-testimonial <?php echo $id; ?>" data-sync="<?php echo $id; ?>">
  <?php $i=1; while ( have_rows('testimonials') ) : the_row(); ?>
    <div>
      <div class="testimonial">
        <?php
          $image = get_sub_field('logo');
          $stat = get_sub_field('stat');
          $hasStat = false;

          if( $image || $stat ){
            $hasStat = true;
          }
        ?>

        <?php if( $hasStat ): ?>
        <div class="testimonial__stat">
          <?php if( !empty($image) ): ?>
          <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </figure>

          <div class="testimonial__stat__stat">
            <span><span class="js-count" data-detect-viewport Sdata-count="<?php the_sub_field('stat'); ?>"><?php the_sub_field('stat'); ?></span><span><?php the_sub_field('stat_unit'); ?></span></span>
            <span><?php the_sub_field('stat_description'); ?></span>
          </div>
          <?php endif; ?>
        </div>
        <?php endif; ?>

        <blockquote class="testimonial__content <?php if( !$hasStat ): ?>testimonial__content--lg<?php endif; ?>">
          <q>
            <?php the_sub_field('testimonial'); ?>
          </q>
          <div class="author mt-3">
            <?php $image = get_sub_field('author_image'); if( !empty($image) ): ?>
            <figure>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </figure>
            <div>
              <span><?php the_sub_field('author_name'); ?></span>
              <span><?php the_sub_field('author_credentials'); ?></span>
            </div>
            <?php endif; ?>
          </div>

        </blockquote>
      </div>
    </div>
    <?php $i++; endwhile; ?>
    </div>

    <?php if($count > 1): ?>
    <div class="carousel carousel-sync js-carousel-testimonial-sync mt-4" id="<?php echo $id; ?>">
      <?php $i=1; while ( have_rows('testimonials') ) : the_row(); ?>
        <div class="">
          <span class="h5 text-light"><?php echo $i . '/' . $count; ?></span>
        </div>
      <?php $i++; endwhile; ?>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>
