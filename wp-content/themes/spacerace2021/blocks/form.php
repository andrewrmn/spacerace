<?php

$content = get_sub_field('intro_content');
$formId = get_sub_field('form_id');

?>

<div class="wrapper-thin wrapper-form py-6" data-animate-in="up">
  <?php if( $content ): ?>
  <div class="rte">
    <?php echo $content; ?>
  </div>
  <?php endif; ?>

  <?php if( $formId ): ?>
  <div class="mt-4">
    <?php gravity_form($formId, false, false, false, '', true, 12); ?>
  </div>
  <?php endif; ?>
</div>
