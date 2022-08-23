<?php

$featured_posts = get_sub_field('featured_post');

if( $featured_posts ): foreach( $featured_posts as $post ): setup_postdata($post); ?>

<div class="wrapper-full py-6 my-6">
    <div class="wrapper-wide">
      <article class="post-preview-featured">
        <figure>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </figure>
        <div class="post-preview__content">
          <h3 class="h3"><?php the_title(); ?></h3>
          <div class="rte">
            <?php the_excerpt(); ?>
          </div>
          <a class="link mt-4" href="<?php the_permalink(); ?>">Read more</a>
      </article>
    </div>
</div>

<?php endforeach; wp_reset_postdata(); endif; 
