<?php
add_action( 'after_setup_theme', 'agencia_home_content_setup');
function agencia_home_content_setup(){
	
	
	$sections = array();
		
	$sections[] = array(
		'uid'	=> 'cta',
		'title'	=> 'Call To Action',
		'name'	=> 'steed_pc_section_page_content',
		'settings'		=> array(
			'content' => 'excerpt', //full,none,excerpt
			'image' => 'background', //none, top, bottom, left, right, full_left, full_right, background
			'image_size' => 'full',
			'title' => true, //true, false
			'title_tag' => 'h2',
			'button' => true, //true, false
			'button_text' => 'Read More',
			'css_class' => '',
		),
	);

	$sections[] = array(
		'uid'	=> 'about',
		'title'	=> 'About Us',
		'name'	=> 'steed_pc_section_page_content',
		'settings'		=> array(
			'content' => 'excerpt', //full,none,excerpt
			'image' => 'full_left', //none, top, bottom, left, right, full_left, full_right, background
			'image_size' => 'full',
			'title' => true, //true, false
			'title_tag' => 'h2',
			'button' => true, //true, false
			'button_text' => 'Read More',
			'css_class' => '',
		),
	);
	$sections[] = array(
		'uid'	=> 'gallery',
		'title'	=> 'Gallery',
		'name'	=> 'steed_pc_section_page_content',
		'settings'		=> array(
			'content' => 'full', //full,none,excerpt
			'image' => 'none', //none, top, bottom, left, right, full_left, full_right, background
			'image_size' => 'full',
			'title' => false, //true, false
			'title_tag' => 'h2',
			'button' => false, //true, false
			'button_text' => 'Read More',
			'css_class' => '',
		),
	);

	$sections[] = array(
		'uid'	=> 'contact',
		'title'	=> 'Contact Us',
		'name'	=> 'steed_pc_section_page_content',
		'settings'		=> array(
			'content' => 'full', //full,none,excerpt
			'image' => 'full_right', //none, top, bottom, left, right, full_left, full_right, background
			'image_size' => 'full',
			'title' => true, //true, false
			'title_tag' => 'h2',
			'button' => false, //true, false
			'button_text' => 'Read More',
			'css_class' => 'home_page_cta',
		),
	);
	
	$settings = array(
		'title' => '**Home Page Content**',
		'description' => '',
		'slug' => 'home_page',
		'sections' => apply_filters('agencia_home_sections', $sections),
	);
	new steed_pc_builder($settings);
}