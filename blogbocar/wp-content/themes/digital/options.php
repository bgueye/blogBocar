<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'digital';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'digital'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'3' => __('3', 'digital'),
		'5' => __('5', 'digital'),
		'6' => __('6', 'digital'),
		'8' => __('8', 'digital'),
		'10' => __('10', 'digital')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'digital'),
		'two' => __('Pancake', 'digital'),
		'three' => __('Omelette', 'digital'),
		'four' => __('Crepe', 'digital'),
		'five' => __('Waffle', 'digital')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);
	
	// Background Defaults
	$background_defaults = array(
		'color' => '#f7f7f7',
		'image' => '',
		'repeat' => 'repeat',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '14px',
		'face' => 'false',
		'style' => 'normal',
		'color' => '#555555' );
	$typography_entrytitle = array(
		'size' => '28px',
		'face' => 'false',
		'style' => 'normal',
		'color' => '#555555' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => false,
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
$options[] = array(
            'desc' => '<h2 style="color: #FFF !important;">' . esc_attr__( 'Upgrade to Premium Theme & Enable Full Features!', 'digital' ) . '</h2>
            <li>' . esc_attr__( 'SEO Optimized WordPress Theme.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'More Slides for your slider.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Theme Customization help & Support Forum.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Page Speed Optimize for better result.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Color Customize of theme.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Custom Widgets and Functions.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Social Media Integration.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Responsive Website Design.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Different Website Layout to Select.', 'digital' ) . '</li>
            <li>' . esc_attr__( 'Many of Other customize feature for your blog or website.', 'digital' ) . '</li>
            <p><span class="buypre"><a href="' . esc_url(__('http://www.insertcart.com/digital','digital')) . '" target="_blank">' . esc_attr__( 'Upgrade Now', 'digital' ) . '</a></span><span class="buypred"><a href="' . esc_url(__('http://forum.insertcart.com/','digital')) . '" target="_blank">' . esc_attr__( 'Support Forum !', 'digital' ) . '</a></span></p>',
            'class' => 'tesingh',
            'type' => 'info');
	$options[] = array(
		'name' => __('Basic Settings', 'digital'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Custom Favicon URL', 'digital'),
		'desc' => __('Upload Favicon Image in .ico format .', 'digital'),
		'id' => 'digital_favicon',
		'std' => '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Upload Site Logo', 'digital'),
		'desc' => __('Upload Website Logo that fit here. Note you can upload any size it will automatic resize .', 'digital'),
		'id' => 'digital_logo',
		'type' => 'upload');
	$options[] = array(	
		'name' =>  __('Customize Theme Background', 'digital'),
		'desc' => __('Header Background color.', 'digital'),
		'id' => 'digital_headerbg',
		'std' => '#ffffff',
		'type' => 'color' );
	$options[] = array(
		'name' => __('Show Author Profile', 'digital'),
		'desc' => __('Check the box to show Author Profile Below the Post and Pages.', 'digital'),
		'id' => 'digital_author',
		'std' => '',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Show Posts from particular categories in Home Page 1', 'digital'),
		'desc' => __('Enable/Disable', 'digital'),
		'id' => 'digital_latest',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		    'desc' => 'Change Text of Latest Post.',
            'id' => 'digital_latestchange',
            'std' => 'Categorie 1',
			'class' => 'mini',
            'type' => 'text');	
		if ( $options_categories ) {
	$options[] = array(
		'desc' => __('Select a Category', 'digital'),
		'id' => 'select_categories',
		'type' => 'select',
		'options' => $options_categories);
	}
		$options[] = array(
		'desc' => __('Numbers of Posts to Show', 'digital'),
		'id' => 'digital_latestpostnumber',
		'std' => '4',
		'class' => 'mini',
		'type' => 'text');
		
		$options[] = array(
		'desc' => __('Change Strip line background Color change', 'digital'),
		'id' => 'digital_posthd',
		'std' => '#13E290',
		'type' => 'color' );
		
	
	$options[] = array(
		'name' => __('Show Posts from particular categories in Home Page 2', 'digital'),
		'desc' => __('Enable/disable', 'digital'),
		'id' => 'digital_latest2',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		    'desc' => 'Change Text of Latest Post.',
            'id' => 'digital_latestchange2',
            'std' => 'Categories 2 ',
			'class' => 'mini',
            'type' => 'text');	
		if ( $options_categories ) {
	$options[] = array(
		'desc' => __('Select a Category', 'digital'),
		'id' => 'select_categories2',
		'type' => 'select',
		'options' => $options_categories);
	}
		$options[] = array(
		'desc' => __('Numbers of Posts to Show', 'digital'),
		'id' => 'digital_latestpostnumber2',
		'std' => '4',
		'class' => 'mini',
		'type' => 'text');
		
		$options[] = array(
		'desc' => __('Categories and Breadcrumb Strip line background Color change', 'digital'),
		'id' => 'digital_posthd2',
		'std' => '#13E290',
		'type' => 'color' );		
			
		$options[] = array(
		'name' =>  __('Change Default Thumb Image', 'digital'),
		'desc' => __('Change default thumb Image in Website.', 'digital'),
		'id' => 'digital_defaulthumb',
		'std' => $imagepath . 'thumb.jpg',
		'type' => 'upload' );
		$options[] = array(
		'name' => __('Social Profile', 'digital'),
		'type' => 'heading');
		$options[] = array(
		'name' => __('Show Profiles Links for Top Navigation', 'digital'),
		'desc' => __('Check or uncheck Box to show and hide share buttons', 'digital'),
		'id' => 'digital_sharebut',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'name' => __('Facebook Link', 'digital'),
		'desc' => __('Enter your Facebook URL if you have one.', 'digital'),
		'id' => 'digital_fb',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Twitter Follow Link', 'digital'),
		'desc' => __('Enter your Twitter URL if you have one.', 'digital'),
		'id' => 'digital_tw',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('YouTube Channel Link', 'digital'),
		'desc' => __('Enter your YouTube URL if you have one.', 'digital'),
		'id' => 'digital_youtube',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Google+ URL', 'digital'),
		'desc' => __('Enter your Google+ Link if you have one.', 'digital'),
		'id' => 'digital_gp',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('RSS Feed URL', 'digital'),
		'desc' => __('Enter your RSS Feed URL if you have one', 'digital'),
		'id' => 'digital_rss',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Linked In URL', 'digital'),
		'desc' => __('Enter your Linkedin URL if you have one.', 'digital'),
		'id' => 'digital_in',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Pinterest In URL', 'digital'),
		'desc' => __('Enter your Pinterest URL if you have one.', 'digital'),
		'id' => 'digital_pinterest',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Skype In URL', 'digital'),
		'desc' => __('Enter your skype URL if you have one', 'digital'),
		'id' => 'digital_skype',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Vimeo In URL', 'digital'),
		'desc' => __('Enter your vimeo URL if you have one', 'digital'),
		'id' => 'digital_vimeo',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Flickr In URL', 'digital'),
		'desc' => __('Enter your flickr URL if you have one', 'digital'),
		'id' => 'digital_flickr',
		'std' => '',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Dribbble In URL', 'digital'),
		'desc' => __('Enter your dribbble URL if you have one', 'digital'),
		'id' => 'digital_dribbble',
		'std' => '',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Slider Settings', 'digital'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Enable Slider', 'digital'),
		'desc' => __('Check this to Enable Slider.', 'digital'),
		'id' => 'slider_enabled',
		'type' => 'checkbox',
		'std' => '0' );
		
	$options[] = array(
		'name' => __('Slider Image 1', 'digital'),
		'desc' => __('First Slide', 'digital'),
		'id' => 'slide1',
		'class' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'digital'),
		'id' => 'slidetitle1',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'digital'),
		'id' => 'slideurl1',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'digital'),
		'desc' => __('Second Slide', 'digital'),
		'id' => 'slide2',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'digital'),
		'id' => 'slidetitle2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'digital'),
		'id' => 'slideurl2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'digital'),
		'desc' => __('Third Slide', 'digital'),
		'id' => 'slide3',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'desc' => __('Title', 'digital'),
		'id' => 'slidetitle3',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'digital'),
		'id' => 'slideurl3',
		'std' => '',
		'type' => 'text');		
	$options[] = array(
		'name' => __('Slider Image 4', 'digital'),
		'desc' => __('Slide 4', 'digital'),
		'id' => 'slide4',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'digital'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'digital'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');		
	
		$options[] = array(
		'desc' => sprintf( __( '<b>Only Premium User Have More slider </b>  <a href="%1$s" target="_blank">Buy Premium version</a>', 'digital' ), 'http://www.insertcart.com/digital' ), 
		'type' => 'info');
		
		
$options[] = array(
		'name' => __('Custom Styling', 'digital'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Custom CSS', 'digital'),
		'desc' => __('Quickly add some CSS to your theme by adding it to this block.', 'digital'),
		'id' => 'digital_customcss',
		'std' => '',
		'type' => 'textarea');
		

$options[] = array(
		'name' => __('Ads Management', 'digital'),
		'type' => 'heading');
	
	$options[] = array(
		 'desc' => esc_attr__( 'If you want to add or edit more code and place widget then you need to edit from Widget area.', 'digital' ).'<b>'. esc_attr__( 'Dashboard > Appearance > Widget > add widget wherever you want.', 'digital'). '</b>',
            'type' => 'info');	
	$options[] = array(
		'name' => __('Paste Ads code for header.', 'digital'),
		'desc' => __('Enter your ads code here, preferably units Ex. 728*90 lead-board ad.', 'digital'),
		'id' => 'banner_top',
		'std' => '',
		'type' => 'editor',
		'settings' => $wp_editor_settings= array(
		'wpautop' => true, // Default
		'textarea_rows' => 5));
	$options[] = array(
		 'name' => __( 'AD Code For Single Post', 'digital' ),
            'desc' => 'Paste Ad code for single post it show ads below post title and before content.',
            'id' => 'digital_ad2',
            'std' => '',
            'type' => 'editor',
		'settings' => $wp_editor_settings= array(
		'wpautop' => true, // Default
		'textarea_rows' => 5));
     $options[] = array(
		'name' => __( 'AD Code For Footer', 'digital' ),
            'desc' => 'Paste Ad Code for Footer Area.',
            'id' => 'digital_ad1',
            'std' => '',
            'type' => 'editor',
		'settings' => $wp_editor_settings= array(
		'wpautop' => true, // Default
		'textarea_rows' => 5));	
			
$options[] = array(
		'name' => __('Advance (Pro Only)', 'digital'),
		'type' => 'heading');
				
	$options[] = array(
		'desc' => '<span class="pre-title">New Features</span>', 
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Social Share Buttons with count', 'digital'),
		'desc' => __('Display social share buttons with count below post title.', 'digital'),
		'id' => 'digital_flowshare',
		'std' => '0',
		'type' => 'checkbox');
	$options[] = array(
		'name' => __('Show Popular Posts in Sidebar', 'digital'),
		'desc' => __('Check the box to Show Popular Posts with Thumbnail in Sidebar.', 'digital'),
		'id' => 'digital_popular',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'desc' => __('Numbers of Popular posts to display', 'digital'),
		'id' => 'digital_popularpostnumber',
		'std' => '5',
		'class' => 'mini',
		'type' => 'text');
	$options[] = array(
		'name' => __('Responsive Website Design', 'digital'),
		'desc' => __('Enable Responsive Design for you website to increase experience on Mobile Devices', 'digital'),
		'id' => 'digital_responsive',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'name' => __('Excerpt Length (Number of words display in post description)', 'digital'),
		'desc' => __('Number of words display in every post description Default is 45.', 'digital'),
		'id' => 'digital_excerp',
		'std' => '25',
		'class' => 'mini',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Home Icon from Top and Main Navigation', 'digital'),
		'desc' => __('Show or Hide Home Icon.', 'digital'),
		'id' => 'digital_homeicon',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
		
	$options[] = array(
		'name' => __('Footer Widget Area Settings', 'digital'),
		'desc' => __('Show or Hide Footer Widget Area.', 'digital'),
		'id' => 'digital_footerwidget',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));

		$options[] = array(
		'name' => __('Post Hover Effect', 'digital'),
		'desc' => __('Show or Hide post hover effect on every post .', 'digital'),
		'id' => 'digital_countinue',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
					
						
						
		$options[] = array(
		'desc' => '<span class="pre-title">Color Customize</span>', 
		'type' => 'info');
				
		$options[] = array(	
		'name' => __('Top Menu Color Customize', 'digital'),
		'desc' => __('Top menu background.', 'digital'),
		'id' => 'digital_botborder',
		'std' => '#303030',
		'type' => 'color' );
		
		$options[] = array(	
		'desc' => __('Top Menu Hover color.', 'digital'),
		'id' => 'digital_topnavibgcolorh',
		'std' => '#13E290',
		'type' => 'color' );
		$options[] = array(	
		'desc' => __('Top Menu Text Color.', 'digital'),
		'id' => 'digital_toptext',
		'std' => '#ffffff',
		'type' => 'color' );
		
		$options[] = array(
		'name' => __('Main Navigation Color Customize', 'digital'),
		'desc' => __('Main Navigation Background.', 'digital'),
		'id' => 'digital_mainnavibg',
		'std' => '#424242',
		'type' => 'color' );
	
		$options[] = array(
		'desc' => __('Main Navigation hover Color.', 'digital'),
		'id' => 'digital_mainnavilinkcolor',
		'std' => '#13E290',
		'type' => 'color' );
		
		$options[] = array(
		'desc' => __('Main Navigation Text Color', 'digital'),
		'id' => 'digital_navilinks',
		'std' => '#ffffff',
		'type' => 'color' );
		$options[] = array(
		'name' => __('Change Link Color', 'digital'),
		'desc' => __('Select Links Color.', 'digital'),
		'id' => 'digital_linkcolor',
		'std' => '#2D89A7',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Change Link Hover Color.', 'digital'),
		'id' => 'digital_linkhover',
		'std' => '#13E290',
		'type' => 'color' );
		$options[] = array(
		'name' => __('Other customize color & design', 'digital'),
		'desc' => __('Sidebar Widget heading background Color change', 'digital'),
		'id' => 'digital_sidebarbg',
		'std' => '#13E290',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Next and Previous Post link Background color', 'digital'),
		'id' => 'digital_nextprev',
		'std' => '#13E290',
		'type' => 'color' );
		$options[] = array(
		'name' => __('Page Number Navigation Color Change ', 'digital'),
		'desc' => __('Change Current Page Background.', 'digital'),
		'id' => 'digital_pageanvibg',
		'std' => '#333333',
		'type' => 'color' );
		$options[] = array(
			'desc' => __('Change background color of other pages.', 'digital'),
		'id' => 'digital_pageanvia',
		'std' => '#13E290',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Numbers text Color Change.', 'digital'),
		'id' => 'digital_pageanvilink',
		'std' => '#ffffff',
		'type' => 'color' );
		$options[] = array(	
		'name' => __('Footer Area Color Customize', 'digital'),
		'desc' => __('Footer Widget background color.', 'digital'),
		'id' => 'digital_ftwidget',
		'std' => '#333333',
		'type' => 'color' );
	
	$options[] = array(	
		'desc' => __('Text Color.', 'digital'),
		'id' => 'digital_ftwidgettext',
		'std' => '#ffffff',
		'type' => 'color' );
		
		$options[] = array(
		'name' => __('Edit Categories & date/author stamp from thumbnail', 'digital'),
		'desc' => __('Show or Hide Date & Author Stamp from Thumbnail in index and other archive pages .', 'digital'),
		'id' => 'digital_authstamp',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
		
		$options[] = array(				
		'desc' => __('Show or hide Categories Button from Thumbnail in index and other archive pages .', 'digital'),
		'id' => 'digital_homecat',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
		$options[] = array(
		'desc' => __('Categories Background Color Change.', 'digital'),
		'id' => 'digital_homecatbg',
		'std' => '#4DD247',
		'type' => 'color' );		
	
		
		
		
		$options[] = array( 'name' => __('Customize Theme Fonts', 'digital'),
		'desc' => __('Change <b>Body (Theme) Font</b> color and Size.', 'digital'),
		'id' => "digital_bodyfonts",
		'std' => $typography_defaults,
		'type' => 'typography' );
		$options[] = array( 
		'desc' => __('Change <b>H1 Posts and Pages Title </b>Font color or Size.', 'digital'),
		'id' => "digital_entrytitle",
		'std' => $typography_entrytitle,
		'type' => 'typography' );
			
					
		$options[] = array(
		'name' => "Website layout",
		'desc' => "Select Images for Website layout.",
		'id' => "digital_layout",
		'std' => "s1",
		'type' => "images",
		'options' => array(
			's1' => $imagepath . 's1.png',
			's2' => $imagepath . 's2.png',
			'sl' => $imagepath . 'sl.png',
			
			)
	);
		
		
		
		$options[] = array(
		'desc' => '<span class="pre-titlecus">Customization</span>', 
		'type' => 'info');
		
		$options[] = array(
		'name' => __('Breadcrumbs Options', 'digital'),
		'desc' => __('Check Box to Enable or Disable Breadcrumbs.', 'digital'),
		'id' => 'digital_bread',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'name' => __('Enable Post Meta Info.', 'digital'),
		'desc' => __('Check Box to Show or Hide Tags ', 'digital'),
		'id' => 'digital_tags',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'desc' => __('Check Box to Show or Hide Comments ', 'digital'),
		'id' => 'digital_comments',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'desc' => __('Check Box to Show or Hide Categories ', 'digital'),
		'id' => 'digital_categrious',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'desc' => __('Check Box to Show or Hide Author and date ', 'digital'),
		'id' => 'digital_autodate',
		'std' => '1',
		'type' => 'checkbox');
			
	$options[] = array(
		'name' => __('Next and Previous Post Link', 'digital'),
		'desc' => __('Show or Hide Next and Previous Post Link below every post.', 'digital'),
		'id' => 'digital_links',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
	$options[] = array(
		'name' => __('Show or Hide Copy Right Text', 'digital'),
		'desc' => __('Show or hide Copyright Text and Link.', 'digital'),
		'id' => 'digital_copyright',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
	$options[] = array(
		    'desc' => 'Change copyright text.',
            'id' => 'digital_ftarea',
            'std' => 'Copyright  &#169; 2015',
            'type' => 'editor',
		'settings' => $wp_editor_settings= array(
		'wpautop' => true, // Default
		'textarea_rows' => 5));	
	$options[] = array(
		'name' => __('Theme Support', 'digital'),
		'type' => 'heading' );


	$options[] = array(
		 'desc' => '<h2>' . esc_attr__( 'Need support about theme go to Support forum', 'digital' ) . '</h2>
		 
            ' . esc_attr__( 'If you have any problem in using options then please read theme documentation first ', 'digital' ) . '<a href="' . esc_url(__('http://www.wrock.org/documentation-install-wordpress-premium-theme-without-data-loss/','digital')) . '" target="_blank">' . esc_attr__( 'Theme Documentation', 'digital' ) . '</a>  ' . esc_attr__( 'Before you contact us via directly please use support forum also We recommend you to use some WordPress plugin like "Regenerate Thumbnails" WordPress SEO and W3tc to optimize and get great website experience.', 'digital' ) . '
            <p><span class="buypre"><a href="' . esc_url(__('http://forum.insertcart.com','digital')) . '" target="_blank">' . esc_attr__( 'Support Forum', 'digital' ) . '</a></span></p></br>'
			,
            'type' => 'info');		

		
	return $options;
}