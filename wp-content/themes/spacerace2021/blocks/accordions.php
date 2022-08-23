<?php

$count = count(get_sub_field('accordion_group'));
?>


<div class="wrapper-full bg-light">
  <div class="wrapper-md  py-6 my-6">

  <?php if( get_sub_field('intro_content') ): ?>
    <div class="text-center mb-6">
      <div class="rte" data-animate-in="up">
        <?php the_sub_field('intro_content'); ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if($count == 1): ?>

    <?php $i = 1; while ( have_rows('accordion_group') ) : the_row(); ?>

      <div class="accordions">
        <?php $i = 1; while ( have_rows('accordions') ) : the_row(); ?>
          <div class="accordion">
            <div class="accordion__hd">
              <h4><?php the_sub_field('title'); ?></h4>
            </div>
            <div class="accordion__bd">
              <div>
                <div class="rte">
                  <?php the_sub_field('content'); ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

    <?php endwhile; ?>

  <?php else: ?>

    <div class="tabs mb-6">
			<div class="tabs__tabs mb-6">
				<div class="tabs__tabs__inner">
					<?php $i=1; while ( have_rows('accordion_group') ) : the_row(); $slug = sanitize_title(get_sub_field('group')); ?>
					<div class="tabs__tab <?php if($i==1): echo ' is-active'; endif; ?>" data-tab="<?php echo $slug; ?>">
						<?php the_sub_field('group'); ?>
					</div>
					<?php $i++; endwhile; ?>
				</div>
			</div>

      <?php $t=1; while ( have_rows('accordion_group') ) : the_row(); $slug = sanitize_title(get_sub_field('group')); ?>
      <div class="tabs__content<?php if($t==1): echo ' is-active'; endif; ?>" data-tab-bd="<?php echo $slug; ?>">
        <?php $t = 1; while ( have_rows('accordions') ) : the_row(); ?>
          <div class="accordion">
            <div class="accordion__hd">
              <h4><?php the_sub_field('title'); ?></h4>
            </div>
            <div class="accordion__bd">
              <div>
                <div class="rte">
                  <?php the_sub_field('content'); ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    	<?php $t++; endwhile; ?>
    </div>
  <?php endif; ?>

  </div>
</div>
