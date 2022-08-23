

<?php if( have_rows('carousel') ): ?>
  <div class="carousel js-carousel js-carousel-fade" data-animate-in="fade">

  <?php $i=1; while ( have_rows('carousel') ) : the_row(); ?>
    <div class="carousel-slide-full" style="background: <?php the_sub_field('background_color'); ?>">
      <div class="carousel-slide-full__inner">
        <div class="carousel-slide-full__media">
          <div class="rte">
            <?php the_sub_field('media'); ?>
          </div>
        </div>
        <div class="carousel-slide-full__content">
          <div class="rte">
            <?php the_sub_field('content'); ?>
          </div>
          <?php $link = get_sub_field('cta'); if( $link ): ?>
            <a class="btn btn--light-md mt-4" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
              <span><?php echo $link['title']; ?></span>
              <svg width="8px" height="8px" viewBox="0 0 8.7 8.9">
                <ellipse fill="#FFFFFF" cx="1" cy="4.4" rx="1" ry="1"/>
                <polygon fill="#FFFFFF" points="4.4,8.9 3.6,8.2 7.3,4.4 3.6,0.7 4.4,0 8.7,4.4 "/>
              </svg>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>


    <?php $i++; endwhile; ?>
    </div>
  <?php endif; ?>
