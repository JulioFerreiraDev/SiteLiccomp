<?php

function simplicity_customize_register($wp_customize){

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //    
    
    $wp_customize->add_section('simplicity_options', array(
        'priority' 		=> 10,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('SIMPLICITY OPTIONS', 'simplicity-lite'),
        'description'   => ' <div class="infohead">' . __('We appreciate an','simplicity-lite') . ' <a href="http://wordpress.org/support/view/theme-reviews/simplicity-lite" target="_blank">' . __('Honest Review','simplicity-lite') . '</a> ' . __('of this Theme if you Love our Work','simplicity-lite') . '<br /> <br />

' . __('Need More Features and Options including Exciting 3D Slide and 100+ Advanced Features? Try ','simplicity-lite') . '<a href="' . esc_url('http://d5creation.com/theme/simplicity/') .'
" target="_blank"><strong>' . __('SIMPLICITY Extend','simplicity-lite') . '</strong></a><br /> <br /> 
        
        
' . __('You can Visit the SIMPLICITY Extend ','simplicity-lite') . ' <a href="' . esc_url('http://demo.d5creation.com/themes/?theme=Simplicity') .'" target="_blank"><strong>' . __('Demo Here','simplicity-lite') . '</strong></a> 
        </div>		
		'
    ));
	
	
// Upgrade to Extend
    $wp_customize->add_setting('simplicity[upgrade-text]', array(
        'default'        	=> '',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_upgrade-text' , array(
        'label'      => __('Upgrade to Extended Version', 'simplicity-lite'),
        'section'    => 'simplicity_options',
        'settings'   => 'simplicity[upgrade-text]'
    ));
	
	
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('simplicity_heading', array(
        'priority' 		=> 11,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Front Page Heading', 'simplicity-lite'),
        'description'   => ''
    ));

// Front Page Heading
    $wp_customize->add_setting('simplicity[heading_text]', array(
        'default'        	=> __('Welcome to the World of Creativity!','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_heading_text' , array(
        'label'      => __('Front Page Heading', 'simplicity-lite'),
        'section'    => 'simplicity_heading',
        'settings'   => 'simplicity[heading_text]'
    ));
	
// Front Page Heading Description
    $wp_customize->add_setting('simplicity[heading_des]', array(
        'default'        	=> __('You can use Simplicity Extend Theme for more options, more functions and more visual elements. Extend Version has come with simple color customization option','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_heading_des' , array(
        'label'      => __('Front Page Heading Description', 'simplicity-lite'),
        'section'    => 'simplicity_heading',
        'settings'   => 'simplicity[heading_des]',
		'type' 		 => 'textarea'
    ));

  
 // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('simplicity_slide', array(
        'priority' 		=> 12,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Front Page Slide', 'simplicity-lite'),
        'description'   => ''
    ));

 	  
//  Banner Image/ Slide Image

	foreach (range(1,2) as $opsinumber) {
		
    $wp_customize->add_setting('simplicity[slide-image' . $opsinumber .']', array(
        'default'           => get_template_directory_uri() . '/images/slides/' . $opsinumber . '.jpg',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
		

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'slide-image' . $opsinumber, array(
        'label'    			=> __('Sliding Image', 'simplicity-lite') . '-' .$opsinumber ,
        'section'  			=> 'simplicity_slide',
        'settings' 			=> 'simplicity[slide-image' . $opsinumber .']',
		'description'   	=> __('Upload an image for the Front Page Banner. 930px X 350px image is recommended','simplicity-lite')
		
    )));
	
// Slide Image Title
    $wp_customize->add_setting('simplicity[slide-image' . $opsinumber . '-title]', array(
        'default'        	=> __('This is a Test Image Title','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_slide-image' . $opsinumber . '-title', array(
        'label'      => __('Image Title', 'simplicity-lite'). '-' . $opsinumber,
        'section'    => 'simplicity_slide',
        'settings'   => 'simplicity[slide-image' . $opsinumber .'-title]'
    ));
	
	
// Slide Image Caption
    $wp_customize->add_setting('simplicity[slide-image' . $opsinumber . '-caption]', array(
        'default'        	=> __('This is a Test Image for Simplicity Theme. If you feel any problem please contact with D5 Creation','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_slide-image' . $opsinumber . '-caption', array(
        'label'      => __('Image Caption', 'simplicity-lite'). '-' . $opsinumber,
        'section'    => 'simplicity_slide',
        'settings'   => 'simplicity[slide-image' . $opsinumber .'-caption]',
		'type' 		 => 'textarea'
    ));
	
	}
	
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('simplicity_quote', array(
        'priority' 		=> 13,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Front Page Quote', 'simplicity-lite'),
        'description'   => ''
    ));

	
//  Quote Text
    $wp_customize->add_setting('simplicity[bottom-quotation1]', array(
        'default'        	=> __('All the developers of D5 Creation have come from the disadvantaged part or group of the society. All have established themselves after a long and hard struggle in their life ----- D5 Creation Team',  'simplicity-lite'),
    	'sanitize_callback' => 'esc_textarea',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_bottom-quotation1', array(
        'label'      => __('Quote Text', 'simplicity-lite'),
        'section'    => 'simplicity_quote',
        'settings'   => 'simplicity[bottom-quotation1]',
		'type' 		 => 'textarea'
    ));
	

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('simplicity_frfb', array(
        'priority' 		=> 14,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - First Row Featured Boxes', 'simplicity-lite'),
        'description'   => ''
    ));	
	
	foreach (range(1,8) as $fbsinumber) {
	  
//  Featured Image
    $wp_customize->add_setting('simplicity[featured-image'. $fbsinumber .']', array(
        'default'           => get_template_directory_uri() . '/images/featured-image' . $fbsinumber . '.png',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
		

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'featured-image'. $fbsinumber, array(
        'label'    			=> __('First Row Featured Image', 'simplicity-lite') . '-' . $fbsinumber,
        'section'  			=> 'simplicity_frfb',
        'settings' 			=> 'simplicity[featured-image'. $fbsinumber .']',
		'description'   	=> __('Upload an image for the Featured Box. 200px X 100px image is recommended','simplicity-lite')
    )));
  
// Featured Image Title
    $wp_customize->add_setting('simplicity[featured-title' . $fbsinumber . ']', array(
        'default'        	=> __('Simplicity Theme for Small Business','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_featured-title' . $fbsinumber, array(
        'label'      => __('Title', 'simplicity-lite'). '-' . $fbsinumber,
        'section'    => 'simplicity_frfb',
        'settings'   => 'simplicity[featured-title' . $fbsinumber .']'
    ));


// Featured Image Description
    $wp_customize->add_setting('simplicity[featured-description' . $fbsinumber . ']', array(
        'default'        	=> __('The Color changing options of Simplicity will give the WordPress Driven Site an attractive look. Simplicity is super elegant and Professional Responsive Theme which will create the business widely expressed','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'wp_kses_post',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_featured-description' . $fbsinumber  , array(
        'label'      => __('Description', 'simplicity-lite') . '-' . $fbsinumber,
        'section'    => 'simplicity_frfb',
        'settings'   => 'simplicity[featured-description' . $fbsinumber .']',
		'type' 		 => 'textarea'
    ));
	
// Featured Image Link
    $wp_customize->add_setting('simplicity[featured-link' . $fbsinumber . ']', array(
        'default'        	=> '#',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_featured-link' . $fbsinumber, array(
        'label'      => __('Link URL', 'simplicity-lite'). '-' . $fbsinumber,
        'section'    => 'simplicity_frfb',
        'settings'   => 'simplicity[featured-link' . $fbsinumber .']'
    ));
	
  }
  
 
 // +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('simplicity_srfb', array(
        'priority' 		=> 15,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Second Row Featured Boxes', 'simplicity-lite'),
        'description'   => ''
    )); 
 
  	foreach (range(1, 8) as $fbsinumber) {
	  
//  Featured Image
    $wp_customize->add_setting('simplicity[featured-image2'. $fbsinumber .']', array(
        'default'           => get_template_directory_uri() . '/images/featured-image.png',
        'capability'        => 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'
		

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'featured-image2'. $fbsinumber, array(
        'label'    			=> __('Second Row Featured Image', 'simplicity-lite') . '-' . $fbsinumber,
        'section'  			=> 'simplicity_srfb',
        'settings' 			=> 'simplicity[featured-image2'. $fbsinumber .']',
		'description'   	=> __('Upload an image for the Featured Box. 50px X 50px image is recommended','simplicity-lite')
    )));
  
// Featured Image Title
    $wp_customize->add_setting('simplicity[featured-title2' . $fbsinumber . ']', array(
        'default'        	=> __('Simplicity Theme for Business','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_textarea',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_featured-title2' . $fbsinumber, array(
        'label'      => __('Title', 'simplicity-lite'). '-' . $fbsinumber,
        'section'    => 'simplicity_srfb',
        'settings'   => 'simplicity[featured-title2' . $fbsinumber .']'
    ));


// Featured Image Description
    $wp_customize->add_setting('simplicity[featured-description2' . $fbsinumber . ']', array(
        'default'        	=> __('Simplicity is super elegant and Professional Responsive Theme which will create the business widely expressed. The Color changing options of Simplicity will give the WordPress Driven Site an attractive look','simplicity-lite'),
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'wp_kses_post',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_featured-description2' . $fbsinumber  , array(
        'label'      => __('Description', 'simplicity-lite') . '-' . $fbsinumber,
        'section'    => 'simplicity_srfb',
        'settings'   => 'simplicity[featured-description2' . $fbsinumber .']',
		'type' 		 => 'textarea'
    ));
	
// Featured Image Link
    $wp_customize->add_setting('simplicity[featured-link2' . $fbsinumber . ']', array(
        'default'        	=> '#',
        'capability'     	=> 'edit_theme_options',
    	'sanitize_callback' => 'esc_url',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_featured-link2' . $fbsinumber, array(
        'label'      => __('Link URL', 'simplicity-lite'). '-' . $fbsinumber,
        'section'    => 'simplicity_srfb',
        'settings'   => 'simplicity[featured-link2' . $fbsinumber .']'
    ));	
	
	
  }
  
  
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('simplicity_pr', array(
        'priority' 		=> 16,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Post and Responsive', 'simplicity-lite'),
        'description'   => ''
    ));


//  Front Page Post
    $wp_customize->add_setting('simplicity[fpostex]', array(
        'default'        	=> '0',
    	'sanitize_callback' => 'esc_html',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_fpostex', array(
        'label'      => __('Do not show any Posts or Page in the Front Page', 'simplicity-lite'),
        'section'    => 'simplicity_pr',
        'settings'   => 'simplicity[fpostex]',
		'description' => __('Check the Box if you do not want to show any Posts or Page in the Front Page','simplicity-lite'),
		'type' 		 => 'checkbox'
    ));

//  Responsive Layout
    $wp_customize->add_setting('simplicity[responsive]', array(
        'default'        	=> '0',
    	'sanitize_callback' => 'esc_html',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_responsive', array(
        'label'      => __('Use Responsive Layout', 'simplicity-lite'),
        'section'    => 'simplicity_pr',
        'settings'   => 'simplicity[responsive]',
		'description' => __('Check the Box if you want the Responsive Layout of your Website','simplicity-lite'),
		'type' 		 => 'checkbox'
    ));
	

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ //

 $wp_customize->add_section('simplicity_sl', array(
        'priority' 		=> 17,
		'capability'     => 'edit_theme_options',
		'title'    		=> __('&nbsp;&nbsp;&nbsp;&nbsp; - Social Links', 'simplicity-lite'),
        'description'   => ''
    ));
	
//  Facebook Link
    $wp_customize->add_setting('simplicity[facebook-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_facebook-link', array(
        'label'      => __('Facebook Link', 'simplicity-lite'),
        'section'    => 'simplicity_sl',
        'settings'   => 'simplicity[facebook-link]'
    ));
	
//  Twitter Link
    $wp_customize->add_setting('simplicity[twitter-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_twitter-link', array(
        'label'      => __('Twitter Link', 'simplicity-lite'),
        'section'    => 'simplicity_sl',
        'settings'   => 'simplicity[twitter-link]'
    ));
 
//  You Tube Channel Link
    $wp_customize->add_setting('simplicity[youtube-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_youtube-link', array(
        'label'      => __('You Tube Channel Link', 'simplicity-lite'),
        'section'    => 'simplicity_sl',
        'settings'   => 'simplicity[youtube-link]'
    ));
	
//  Google Plus Link
    $wp_customize->add_setting('simplicity[gplus-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_gplus-link', array(
        'label'      => __('Google Plus Link', 'simplicity-lite'),
        'section'    => 'simplicity_sl',
        'settings'   => 'simplicity[gplus-link]'
    ));

 
//  Picassa Web Album Link
    $wp_customize->add_setting('simplicity[picassa-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_picassa-link', array(
        'label'      => __('Picassa Web Album Link', 'simplicity-lite'),
        'section'    => 'simplicity_sl',
        'settings'   => 'simplicity[picassa-link]'
    ));
	
//  Linked In Link
    $wp_customize->add_setting('simplicity[li-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_li-link', array(
        'label'      => __('Linked In Link', 'simplicity-lite'),
        'section'    => 'simplicity_sl',
        'settings'   => 'simplicity[li-link]'
    ));

//  Feed or Blog Link
    $wp_customize->add_setting('simplicity[feed-link]', array(
        'default'        	=> '#',
    	'sanitize_callback' => 'esc_url',
        'capability'     	=> 'edit_theme_options',
        'type'           	=> 'option'

    ));

    $wp_customize->add_control('simplicity_feed-link', array(
        'label'      => __('Feed or Blog Link', 'simplicity-lite'),
        'section'    => 'simplicity_sl',
        'settings'   => 'simplicity[feed-link]'
    ));


}


add_action('customize_register', 'simplicity_customize_register');


	if ( ! function_exists( 'simplicity_get_option' ) ) :
	function simplicity_get_option( $simplicity_name, $simplicity_default = false ) {
	$simplicity_config = get_option( 'simplicity' );

	if ( ! isset( $simplicity_config ) ) : return $simplicity_default; else: $simplicity_options = $simplicity_config; endif;
	if ( isset( $simplicity_options[$simplicity_name] ) ):  return $simplicity_options[$simplicity_name]; else: return $simplicity_default; endif;
	}
	endif;