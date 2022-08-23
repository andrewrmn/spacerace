<?php


$content = get_sub_field('content');
$link = get_sub_field('cta_1');
$link2 = get_sub_field('cta_2');
$bg = get_sub_field('background');
?>

<div class="wrapper-full <?php echo $bg; ?>">
  <div class="wrapper-md py-6 my-6" data-animate-in="up">
    <?php if( $content ): ?>
    <div class="rte">
      <?php echo $content; ?>
    </div>
    <?php endif; ?>

    <?php if( $link && $link2 ): ?>
    <div class="mt-4 text-center">
      <div class="btn-group">
        <a class="btn mr-sm-3 mb-3 mb-sm-0" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        <a class="btn btn--outline" href="<?php echo $link2['url']; ?>" target="<?php echo $link2['target']; ?>"><?php echo $link2['title']; ?></a>
      </div>
    </div>
    <?php elseif( $link && empty($link2) ): ?>
      <div class="mt-4 mt-md-6 text-center">
        <a class="btn" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      </div>
    <?php endif; ?>
  </div>
</div>
