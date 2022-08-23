<?php

$color = get_sub_field('bg_color');
$media = get_sub_field('media_type');
$height = get_sub_field('height');

$subHeadline = get_sub_field('subheadline');
$content = get_sub_field('content');
$link = get_sub_field('cta_1');
$link2 = get_sub_field('cta_2');

$lineType = get_sub_field('line_type');

?>


<div class="hero hero--<?php echo $height; ?>" style="background: <?php echo $color; ?>" data-detect-viewport>
  <?php if( $content ){ ?>
    <div class="wrapper-wide">
      <div class="hero__content text-white" data-animate-in="fade">

        <?php if($subHeadline): ?>
          <?php if($lineType == 'down'): ?>
          <div class="hero__subhead linework mb-2" data-detect-viewport>
            <span class="h5"><?php echo $subHeadline; ?></span>
            <svg viewBox="0 0 461 634.5" class="js-draw linework">
              <path fill="none" stroke="#3D3D58" d="M2.5,3h458v631.5"/>
              <circle fill="#3D3D58" cx="3" cy="3" r="3"/>
            </svg>
          </div>
          <?php elseif($lineType == 'straight'): ?>
            <p class="h5 mb-3 line-right" data-detect-viewport><?php echo $subHeadline; ?></p>
          <?php else: ?>
            <p class="h5 mb-3" data-detect-viewport><?php echo $subHeadline; ?></p>
          <?php endif; ?>
        <?php endif; ?>

        <div class="rte">
          <?php echo $content; ?>
        </div>

        <?php if( $link || $link2 ): ?>
          <div class="mt-5">
            <?php if( $link ): ?>
              <a class="btn btn--white" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                <?php echo $link['title']; ?>
                <svg width="8px" height="8px" viewBox="0 0 8.7 8.9">
                  <ellipse cx="1" cy="4.4" rx="1" ry="1"/>
                  <polygon points="4.4,8.9 3.6,8.2 7.3,4.4 3.6,0.7 4.4,0 8.7,4.4 "/>
                </svg>
              </a>
            <?php endif; ?>
            <?php if( $link2 ): ?>
              <a class="btn btn--plain" href="<?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>">
                <?php echo $link2['title']; ?>
                <svg width="8px" height="8px" viewBox="0 0 8.7 8.9">
                  <ellipse cx="1" cy="4.4" rx="1" ry="1"/>
                  <polygon points="4.4,8.9 3.6,8.2 7.3,4.4 3.6,0.7 4.4,0 8.7,4.4 "/>
                </svg>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php } ?>

  <?php if( $media == 'Image' ){ ?>
    <?php $image = get_sub_field('image'); ?>
    <figure class="hero__img">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </figure>
  <?php } ?>

  <?php if(is_front_page()){ ?>
    <img class="hero__el" src="<?php echo get_template_directory_uri(); ?>/build/images/svgs/ellipse-large.svg" alt="ellipse large" />
    <img class="hero__es" src="<?php echo get_template_directory_uri(); ?>/build/images/svgs/ellipse-small.svg" alt="ellipse small red" />
  <?php } ?>
</div>
