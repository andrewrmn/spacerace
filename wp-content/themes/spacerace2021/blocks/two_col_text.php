<?php

$moon = get_sub_field('has_moon');
$line = get_sub_field('line_left');
$left = get_sub_field('left_column');
$right = get_sub_field('right_column');

?>

<div class="py-7 moon-wrap">
  <div class="wrapper <?php if( $line ): ?> line-left<?php endif; ?>" data-animate-in="up">
    <div class="wrapper-full">
      <div class="row">
        <div class="col--xs--12 col--md--6 col--lg--4 mb-6 mb-md-0">
          <div class="rte">
            <?php echo $left; ?>
          </div>
        </div>

        <div class="col--xs--12 col--md--6 col--lg--8">
          <div class="rte">
            <?php echo $right; ?>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php if( $moon ): ?>
    <img data-detect-viewport class="moon-left" src="<?php echo get_template_directory_uri(); ?>/build/images/svgs/moon-sm.svg" alt="moon ellipse large" />
  <?php endif; ?>
</div>
