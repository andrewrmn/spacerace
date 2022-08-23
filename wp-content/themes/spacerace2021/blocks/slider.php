
<div class="wrapper-full my-6 py-6">

  <?php if( get_sub_field('headline') ): ?>
    <div class="wrapper text-center d-md-none">
      <h2 class="h2">
        <?php the_sub_field('headline'); ?>
      </h2>
    </div>
  <?php endif; ?>

  <div class="carousel-long-wrap">
    <div class="carousel-long-wrap__inner" id="slider">

      <div class="carousel-long pb-4" id="slider-inner">
        <div class="slider-slide slider-slide--intro">
          <?php if( get_sub_field('headline') ): ?>
            <h2 class="h2">
              <?php the_sub_field('headline'); ?>
            </h2>
          <?php endif; ?>
          <?php if( get_sub_field('content') ): ?>
            <div class="rte">
              <?php the_sub_field('content'); ?>
            </div>
          <?php endif; ?>
          <?php $link = get_sub_field('cta'); if( $link ): ?>
            <a class="btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
          <?php endif; ?>
        </div>

        <?php $i=1; while ( have_rows('tiles') ) : the_row(); ?>
          <div class="slider-slide">
            <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
              <figure>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </figure>
            <?php endif; ?>

            <?php if( get_sub_field('description') ): ?>
              <div class="rte">
                <?php the_sub_field('description'); ?>
              </div>
            <?php endif; ?>
          </div>
          <?php $i++; endwhile; ?>
        </div>
      </div>

    </div>

    <script>
      var $ = jQuery;
      $(document).ready(function(){
        var elmnt = document.getElementById("slider-inner");
        var x = elmnt.scrollWidth;
        elmnt.style.width = x + 'px';
      });
    </script>


    <?php if( get_sub_field('headline') ): ?>
    <div class="wrapper text-center d-md-none mt-6">
      <?php if( get_sub_field('content') ): ?>
        <div class="rte">
          <?php the_sub_field('content'); ?>
        </div>
      <?php endif; ?>
      <?php $link = get_sub_field('cta'); if( $link ): ?>
        <a class="btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      <?php endif; ?>
    </div>
    <?php endif; ?>
</div>
