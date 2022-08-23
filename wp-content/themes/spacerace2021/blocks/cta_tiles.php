<?php


?>


<div class="wrapper-full py-6">

  <?php if( get_sub_field('intro_content') ): ?>
    <div class="pb-4 pb-md-6 mb-6">
      <div class="wrapper-thin text-center">
        <div class="rte" data-animate-in="up">
          <?php the_sub_field('intro_content'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if( have_rows('tiles') ): ?>
    <div class="wrapper-wide">
      <div class="card-list card-list--lg">
        <?php while ( have_rows('tiles') ) : the_row(); ?>

            <div class="cta-card <?php the_sub_field('background_color'); ?>">

              <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                <figure>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </figure>
              <?php endif; ?>

              <div class="cta-card__content">
                <?php if( get_sub_field('content') ): ?>
                <div class="rte">
                  <?php the_sub_field('content'); ?>
                </div>
                <?php endif; ?>

                <?php $link = get_sub_field('link'); if( $link ): ?>
                	<a class="link mt-6" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                <?php endif; ?>
              </div>

            </div>

        <?php endwhile; ?>

      </div>
    </div>
  <?php endif; ?>
</div>
