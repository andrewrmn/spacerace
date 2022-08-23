<?php
$images = get_sub_field('images');
$slides = get_sub_field('slides_to_show_on_desktop');
$id = uniqid();
$count = count($images);

if( $images ): ?>
  <div class="wrapper-full my-8" data-animate-in="fade">
    <div class="wrapper">
      <div class="carousel js-carousel js-carousel-standard carousel-wide <?php if($slides > 1){ echo ' carousel--img-pad'; } ?> <?php echo $id; ?>" data-slides="<?php echo $slides; ?>" data-sync="<?php echo $id; ?>">
        <?php foreach( $images as $image ): ?>
        <div>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endforeach; ?>
      </div>

      <div class="carousel carousel-sync js-carousel mt-4 <?php if($slides > 1){ echo ' d-md-none'; } ?>" id="<?php echo $id; ?>">
        <?php $i=1; foreach( $images as $image ): ?>
          <div class="">
            <span class="h5 text-light"><?php echo $i . '/' . $count; ?></span>
          </div>
        <?php $i++; endforeach; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
