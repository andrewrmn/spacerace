<?php
/**
 * Template part for page builder content
 *
 * @package arco
 */

$field = 'modules';

if( have_rows($field) ):

    while ( have_rows($field) ) : the_row();

        if( get_row_layout() == 'hero' ):

        	get_template_part('blocks/hero');

        elseif( get_row_layout() == 'media_content' ):

        	get_template_part('blocks/media_content');

        elseif( get_row_layout() == 'text_block' ):

        	get_template_part('blocks/text_block');



        elseif( get_row_layout() == 'image' ):

        	get_template_part('blocks/images');

        elseif( get_row_layout() == 'accordions' ):

        	get_template_part('blocks/accordions');

        elseif( get_row_layout() == 'cta_tiles' ):

        	get_template_part('blocks/cta_tiles');

        elseif( get_row_layout() == 'post_preview' ):

        	get_template_part('blocks/post_preview');

        elseif( get_row_layout() == 'image_tiles' ):

        	get_template_part('blocks/image_tiles');


        elseif( get_row_layout() == 'hr' ):

        	?><hr /><?php

       elseif( get_row_layout() == 'slider' ):

      	get_template_part('blocks/slider');

        elseif( get_row_layout() == 'instagram' ):

         get_template_part('blocks/instagram');

       elseif( get_row_layout() == 'content_blocks' ):

        get_template_part('blocks/content_blocks');

      elseif( get_row_layout() == 'video' ):

       get_template_part('blocks/video');

      elseif( get_row_layout() == 'services' ):

        get_template_part('blocks/services');

      elseif( get_row_layout() == 'carousel_img_media' ):

        get_template_part('blocks/carousel_img_media');

      elseif( get_row_layout() == 'testimonials' ):

        get_template_part('blocks/testimonials');

      elseif( get_row_layout() == 'logo_list' ):

        get_template_part('blocks/logos');

      elseif( get_row_layout() == 'spacer' ):

        get_template_part('blocks/spacer');

      elseif( get_row_layout() == 'project_details' ):

        get_template_part('blocks/project_details');

      elseif( get_row_layout() == 'side_by_side' ):

        get_template_part('blocks/side_by_side');

      elseif( get_row_layout() == 'stats' ):

        get_template_part('blocks/stats');

      elseif( get_row_layout() == 'steps' ):

        get_template_part('blocks/steps');

      elseif( get_row_layout() == 'image_carousel' ):

        get_template_part('blocks/carousel-image');

      elseif( get_row_layout() == 'team' ):

        get_template_part('blocks/team');

      elseif( get_row_layout() == 'form' ):

        get_template_part('blocks/form');

      elseif( get_row_layout() == 'two_col_text' ):

        get_template_part('blocks/two_col_text');
      //
      // elseif( get_row_layout() == 'project_details' ):
      //
      //   get_template_part('blocks/project_details');

      // elseif( get_row_layout() == 'project_details' ):
      //
      //   get_template_part('blocks/project_details');
      //
      // elseif( get_row_layout() == 'project_details' ):
      //
      //   get_template_part('blocks/project_details');
      endif;

    endwhile;

endif;

?>
