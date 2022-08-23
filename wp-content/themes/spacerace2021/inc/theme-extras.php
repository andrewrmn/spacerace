<?php
/**
* Functions which enhance the theme by hooking into WordPress
*
* @package nagios
*/

//
// Allow SVG Uploads
//
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
function common_svg_media_thumbnails($response, $attachment, $meta){
  if($response['type'] === 'image' && $response['subtype'] === 'svg+xml' && class_exists('SimpleXMLElement')) {
    try {
      $path = get_attached_file($attachment->ID);
      if(@file_exists($path))
      {
        $svg = new SimpleXMLElement(@file_get_contents($path));
        $src = $response['url'];
        $width = (int) $svg['width'];
        $height = (int) $svg['height'];

        //media gallery
        $response['image'] = compact( 'src', 'width', 'height' );
        $response['thumb'] = compact( 'src', 'width', 'height' );

        //media single
        $response['sizes']['full'] = array(
          'height'        => $height,
          'width'         => $width,
          'url'           => $src,
          'orientation'   => $height > $width ? 'portrait' : 'landscape',
        );
      }
    }
    catch(Exception $e){}
  }
  return $response;
}
add_filter('wp_prepare_attachment_for_js', 'common_svg_media_thumbnails', 10, 3);


//
// Admin styles & Tiny MCE Additions
//
function load_custom_wp_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/style-editor.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

function themeit_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'themeit_mce_buttons_2' );

function them_tiny_mce_before_init( $settings ) {
	$settings['theme_advanced_blockformats'] = 'p,a,div,span,h1,h2,h3,h4,h5,h6,tr,';
	$style_formats = array(
		array( 'title' => 'Large text', 'block' => 'p',  'classes' => 'p-lg' ),
		array( 'title' => 'Small text', 'block' => 'p',  'classes' => 'p-sm' ),
		array( 'title' => 'H2 - Style h1', 'block' => 'h2',  'classes' => 'h1' ),
		array( 'title' => 'H2 - Style h3', 'block' => 'h2',  'classes' => 'h3' ),
    array( 'title' => 'H3 - Style h1', 'block' => 'h3',  'classes' => 'h1' ),
		array( 'title' => 'H3 - Style h2', 'block' => 'h3',  'classes' => 'h2' ),
    array( 'title' => 'Sub heading', 'block' => 'h3',  'classes' => 'h6-alt' )
	);
	$custom_colours = '
		"151629", "Black",
		"FFFFFF", "White",
		"385EFC", "Brand",
		"3F30EC", "Brand dark",
		"00BFFF", "Brand light",
		"2E3760", "Slate",
		"5D78AC", "Slate light",
		"DBE2ED", "Gray",
    "F8F9FB", "Gray light"
	';
	$settings['textcolor_map'] = '['.$custom_colours.']';

	$settings['style_formats'] = json_encode( $style_formats );
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'them_tiny_mce_before_init' );

function editor_styles() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor-styles.css' );
}
add_action( 'after_setup_theme', 'editor_styles' );


//
// ACF Options page
//
add_action('acf/input/admin_head', 'my_acf_admin_head');
acf_add_options_page(array(
	'page_title' 	=> 'Globals',
	'menu_title'	=> 'Globals'
));

//
// Remove archive name from title
//
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title( '', false );
	}
	return $title;
});


// Change gravity forms submit to button
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn gform_button' id='gform_submit_button_{$form['id']}'>
        <span>Send Message</span>
        <svg width='8px' height='8px' viewBox='0 0 8.7 8.9'>
          <ellipse cx='1' cy='4.4' rx='1' ry='1' />
          <polygon points='4.4,8.9 3.6,8.2 7.3,4.4 3.6,0.7 4.4,0 8.7,4.4 '/>
        </svg>
      </button>";
}
