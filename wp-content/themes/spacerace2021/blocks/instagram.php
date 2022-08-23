<?php
$content = get_sub_field('intro_content');
?>

<div class="wrapper-full py-6 my-6">
  <div class="wrapper" data-animate-in="up">
    <?php if( $content ): ?>
    <div class="rte">
      <?php echo $content; ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="wrapper-wide text-center" data-animate-in="up">
    <div class="insta">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
