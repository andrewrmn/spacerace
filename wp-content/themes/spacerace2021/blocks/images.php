<?php

$width = get_sub_field('width');
$height = get_sub_field('height');
$spacing = get_sub_field('spacing');
$images = get_sub_field('image');
$count = count($images);
?>

<?php if( !empty($images) ): ?>

<figure class="<?php echo $width . ' ' . $height . ' ' . $spacing; ?>">

  <picture>
    <?php if($count > 1) { ?>
      <source
        srcset="<?php echo $images[1]['url']; ?>"
        media="(max-width: 800px)"
      />
    <?php } ?>

    <img
      src="<?php echo $images[0]['url']; ?>"
      alt="<?php echo $images[0]['alt']; ?>"
    />
  </picture>


</figure>
<?php endif; ?>
