<?php

$layout = get_sub_field('image_postion');
$vertical = get_sub_field('vertical_align');
$bg = get_sub_field('background');
$content = get_sub_field('content');
$image = get_sub_field('image');
$cta1 = get_sub_field('cta_1');
$cta2 = get_sub_field('cta_2');

$padding = 'py-6 my-6';

if( $bg != 'bg-white' ) {
  $padding = 'py-8';
}

?>

<div class="wrapper-full  <?php echo $bg . ' ' . $padding; ?>">
  <div class="wrapper" data-animate-in="up">
    <div class="media-object <?php if( $layout == 'left' ){ echo ' media-object--flip'; } ?> <?php echo $vertical; ?>">

      <div class="media-object__media" data-animate-in="up">
        <div class="col-12">
          <?php the_sub_field('media'); ?>
        </div>
      </div>

      <div class="media-object__content" data-animate-in="left">
        <div>
          <?php if( $content ): ?>
          <div class="rte">
            <?php echo $content; ?>
          </div>
          <?php endif; ?>
          <?php if( $cta1 && $cta2 ): ?>
          <div class="d-flex flex-wrap mt-5">
            <a class="btn mr-sm-5 mb-3" href="<?php echo $cta1['url']; ?>" target="<?php echo $cta1['target']; ?>">
              <span><?php echo $cta1['title']; ?></span>
              <box-icon name='chevron-right'></box-icon>
            </a>
            <a class="btn btn--plain" href="<?php echo $cta2['url']; ?>" target="<?php echo $cta2['target']; ?>">
              <?php echo $cta2['title']; ?>
              <box-icon name='chevron-right'></box-icon>
            </a>
          </div>
          <?php elseif( $cta1 ): ?>
          <a class="btn mt-5" href="<?php echo $cta1['url']; ?>" target="<?php echo $cta1['target']; ?>"><?php echo $cta1['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</div>
