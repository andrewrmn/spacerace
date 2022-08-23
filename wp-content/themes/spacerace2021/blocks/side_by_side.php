<?php

$leftType = get_sub_field('left_block_type');
$rightType = get_sub_field('right_block_type');

?>

<div class="side-by-side">
  <?php if($leftType == 'image'): ?>
    <figure class="side-by-side__img">
      <?php $image = get_sub_field('left_image'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </figure>
  <?php else: ?>
    <div class="side-by-side__text">
      <div class="rte">
        <?php the_sub_field('left_content'); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if($rightType == 'image'): ?>
    <figure class="side-by-side__img">
      <?php $image = get_sub_field('right_image'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </figure>
  <?php else: ?>
    <div class="side-by-side__text">
      <div class="rte">
        <?php the_sub_field('right_content'); ?>
      </div>
    </div>
  <?php endif; ?>
</div>
