<?php

$columns = get_sub_field('columns');
$introContent = get_sub_field('intro_content');
$footerContent = get_sub_field('footer_content');

?>

<div class="wrapper-full py-6 my-6">
  <div class="wrapper-wide" data-animate-in="up">
    <?php if( $introContent ): ?>
    <div class="rte mb-6">
      <?php echo $introContent; ?>
    </div>
    <?php endif; ?>
  </div>

  <?php if( have_rows('content_blocks') ): ?>
  <div class="wrapper-wide mb-6" data-animate-in="up">
    <div class="row">
    <?php $i=1; while ( have_rows('content_blocks') ) : the_row(); ?>
      <div class="col--xs--12 col--md--4">
        <?php if( get_sub_field('content') ): ?>
        <div class="rte">
            <?php the_sub_field('content'); ?>
        </div>
        <?php endif; ?>

        <?php $link = get_sub_field('cta'); if( $link ): ?>
        	<a class="btn mt-4" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <?php endif; ?>
      </div>
    <?php $i++; endwhile; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if( get_sub_field('video') ): ?>
    <div class="wrapper-wide">
      <div class="video-wrap">
          <?php the_sub_field('video'); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if( $footerContent || get_sub_field('cta') ): ?>
  <div class="wrapper mt-6 pt-lg-4 text-center" data-animate-in="up">
    <?php if( $footerContent ): ?>
    <div class="rte mb-4">
      <?php echo $footerContent; ?>
    </div>
    <?php endif; ?>

    <?php $link = get_sub_field('cta'); if( $link ): ?>
    	<a class="btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>
