


<div class="wrapper my-8">
  <div class="d-md-flex">
    <div class="col-12 col-md-6 pr-lg-5 mb-6 mb-md-0">
      <h1 class="h4"><?php the_title(); ?></h1>
      <?php
        $excerpt = wp_strip_all_tags( get_the_excerpt() );
      ?>
      <div class="h1"><?php echo $excerpt; ?></div>
    </div>
    <div class="col-12 col-md-6 text-md-right pl-md-3">
      <?php $categories = get_the_category(); ?>
      <ul class="category-list">
        <?php foreach( $categories as $category) { ?>
        <li><?php echo $category->name; ?></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
