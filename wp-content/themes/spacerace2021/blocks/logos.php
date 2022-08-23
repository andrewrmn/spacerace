

<div class="wrapper-full logo-list-wrap">
  <div class="wrapper py-8">
    <div class="line-wrap" data-animate-in="fade">
      <div class="line-wrap__hd">
        <h3 class="h5"><?php the_sub_field('title'); ?></h3>
      </div>
      <div class="line-wrap__bd">
        <?php
          $images = get_sub_field('logos');
          if( $images ): ?>
          <ul class="logo-list">
            <?php foreach( $images as $image ): ?>
              <li data-animate-in="up">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
      </div>

    </div>
  </div>
</div>
