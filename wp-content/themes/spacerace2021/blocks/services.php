<?php

?>

<div class="wrapper-full bg-black">
  <div class="my-6 py-6">


    <div class="services">
      <div class="services__sidebar">
        <h2 class="h5"><?php the_sub_field('heading'); ?></h2>
      </div>
      <div class="services__content">

        <?php $i=1; while ( have_rows('services') ) : the_row(); ?>
        <?php $link = get_sub_field('link');  ?>
        <a class="service-preview" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" data-animate-in="up">
          <span><?php if($i < 10 ){ echo '0'; } echo $i; ?> /</span>
          <div class="service-preview__content">
            <h3 class="mb-2"><?php the_sub_field('title'); ?></h3>
            <div class="rte">
              <?php the_sub_field('description'); ?>
            </div>
            <p></p>
          </div>
          <div class="icon">
            <span>Learn More</span>
            <svg viewBox="0 0 40 40" width="40px" height="40px">
              <circle class="fill" fill="#FFFFFF" cx="20" cy="20" r="19.5"/>
              <circle class="stroke" fill="none" stroke="#3D3D58" cx="20" cy="20" r="19.5"/>
              <g>
                <ellipse fill="#FFFFFF" cx="17" cy="20" rx="1" ry="1"/>
                <path fill="none" stroke="#FFFFFF" d="M20,15.9l4,4.1l-4,4.1"/>
              </g>
            </svg>
          </div>
          <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
          <figure>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </figure>
          <?php endif; ?>
        </a>
        <?php $i++; endwhile; ?>
      </div>
    </div>

  </div>

  <?php $image = get_sub_field('background'); if( !empty($image) ): ?>
  <figure class="bg-image">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </figure>
  <?php endif; ?>
</div>
