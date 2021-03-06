<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-page',
		'title' => 'Home Page',
		'fields' => array (
			array (
				'key' => 'field_5399b714acf26',
				'label' => 'Template Info',
				'name' => '',
				'type' => 'message',
				'message' => 'The main image beneath your site\'s menu can be set below in the \'Banner\' section.	If you are having difficulty finding a good image for this area, consider using an image from <a href="http://packpix.photoshelter.com/#!/index">PackPix</a>.	These images may still need to be cropped.
	
	Main content on the page can be added by clicking \'Add Row\' in the \'Page Content\' section.	Each content module can be added in any order, but be mindful to create a page where the content flows naturally and isn\'t too cluttered.	Not all content modules haves to be used.
	
	Content modules can be reordered by hovering over the module\'s name on this page and dragging to the desired location.',
			),
			array (
				'key' => 'field_5375275d6e138',
				'label' => 'Banner',
				'name' => 'banner',
				'type' => 'repeater',
				'instructions' => 'Main image area at top of homepage below site name and logo.	Recommended image dimensions are 1500x844px (i.e. 16:9 ratio).',
				'required' => 0,
				'sub_fields' => array (
					array (
						'key' => 'field_53762d3833cf3',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'required' => 0,
						'column_width' => '',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_53762f16486da',
						'label' => 'Headline',
						'name' => 'headline',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53762e5f486d9',
						'label' => 'Teaser',
						'name' => 'teaser',
						'type' => 'text',
						'instructions' => '',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53762f49486ec',
						'label' => 'URL Text',
						'name' => 'url_text',
						'type' => 'text',
						'instructions' => 'Display text for URL link',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53762f49486db',
						'label' => 'URL',
						'name' => 'url',
						'type' => 'text',
						'instructions' => 'Destination URL',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => 'http://',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => 1,
				'layout' => 'row',
				'button_label' => 'Add Row',
			),
			array (
				'key' => 'field_537527816e139',
				'label' => 'Page Content',
				'name' => 'page_content',
				'type' => 'flexible_content',
				'instructions' => 'Main page content.	Sections can be reordered by dragging.',
				'layouts' => array (
					array (
						'label' => 'News Story Feed',
						'name' => 'story_feed',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_537528bafdef7',
								'label' => 'Section Name',
								'name' => 'section_name',
								'type' => 'text',
								'instructions' => 'Title displayed on website.	Optional.',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'News Stories',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_537528bafdef8',
								'label' => 'Feed URL',
								'name' => 'feed_url',
								'type' => 'text',
								'instructions' => 'RSS feed to display',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'https://news.ncsu.edu/feed/',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53760f92d6420',
								'label' => 'Show Date',
								'name' => 'show_date',
								'type' => 'true_false',
								'instructions' => 'Display the date with each story.',
								'column_width' => '',
								'message' => 'Show date',
								'default_value' => 0,
							),
							array (
								'key' => 'field_53765a76ee58b',
								'label' => 'More News Link',
								'name' => 'more_button',
								'type' => 'true_false',
								'instructions' => 'Displays a button link at the bottom of this module if there are at least 3 stories.	Optional.',
								'column_width' => '',
								'message' => 'Show button',
								'default_value' => 0,
							),
							array (
								'key' => 'field_53765af2fe5ae',
								'label' => 'Button Settings',
								'name' => 'button_settings',
								'type' => 'repeater',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_53765a76ee58b',
											'operator' => '==',
											'value' => '1',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_53765b1afe5af',
										'label' => 'Button Text',
										'name' => 'button_text',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'More Stories',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_53765b46fe5b0',
										'label' => 'Button Link',
										'name' => 'button_link',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'http://',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
								),
								'row_min' => 1,
								'row_limit' => 1,
								'layout' => 'row',
								'button_label' => 'Add Row',
							),
						),
					),
					array (
						'label' => 'Announcements and Resources',
						'name' => 'generic_content',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_53765525024fa',
								'label' => 'Section Name',
								'name' => 'section_name',
								'type' => 'text',
								'instructions' => 'Title displayed on website.	Optional.',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'Resources',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53765560024fb',
								'label' => 'Content Blocks',
								'name' => 'content_blocks',
								'type' => 'repeater',
								'required' => 1,
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_537655bf024fc',
										'label' => 'Image',
										'name' => 'image',
										'type' => 'image',
										'instructions' => 'Dimensions: 768x432px.',
										'column_width' => '',
										'save_format' => 'object',
										'preview_size' => 'thumbnail',
										'library' => 'all',
									),
									array (
										'key' => 'field_5376561d024fd',
										'label' => 'Heading',
										'name' => 'heading',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'Heading',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5376564a024fe',
										'label' => 'Description',
										'name' => 'description',
										'type' => 'text',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'Description',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_5376568f024ff',
										'label' => 'Link To',
										'name' => 'link_to',
										'type' => 'text',
										'instructions' => 'URL',
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'http://',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
								),
								'row_min' => 3,
								'row_limit' => 3,
								'layout' => 'row',
								'button_label' => 'Add Row',
							),
						),
					),
					array (
						'label' => 'Homepage Intro Copy',
						'name' => 'body_copy',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_537a1f9e21e86',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
						),
					),
					array (
						'label' => 'Callout',
						'name' => 'cross-section_content',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_537a24b90bead',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'wysiwyg',
								'instructions' => 'Pay close attention to the length of your text. If you put too much, it will get cut off.',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_537a2704aab47',
								'label' => 'Image',
								'name' => 'image',
								'type' => 'image',
								'instructions' => 'Dimensions: 768x432px.',
								'required' => 1,
								'column_width' => '',
								'save_format' => 'object',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_537a24cc0beae',
								'label' => 'Image Position',
								'name' => 'image_position',
								'type' => 'radio',
								'instructions' => 'Position relative to callout text.	If the left side of your image is more important, chose left. If the right is more important, chose right.',
								'column_width' => '',
								'choices' => array (
									'left' => 'Left',
									'right' => 'Right',
								),
								'other_choice' => 0,
								'save_other_choice' => 0,
								'default_value' => 'left',
								'layout' => 'vertical',
							),
							array (
								'key' => 'field_537a24f90beaf',
								'label' => 'Link',
								'name' => 'link',
								'type' => 'true_false',
								'instructions' => 'Do you want this callout to be a link?',
								'column_width' => '',
								'message' => 'Make this callout a link',
								'default_value' => 0,
							),
							array (
								'key' => 'field_538e03a7266ab',
								'label' => 'Link Text',
								'name' => 'link_text',
								'type' => 'text',
								'instructions' => 'Text to underline when hovering over the callout',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_537a24f90beaf',
											'operator' => '==',
											'value' => '1',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => 20,
							),
							array (
								'key' => 'field_537a25830beb0',
								'label' => 'Link To',
								'name' => 'url',
								'type' => 'text',
								'instructions' => 'Callout\'s destination URL',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_537a24f90beaf',
											'operator' => '==',
											'value' => '1',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'http://',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_537a25b50beb1',
								'label' => 'Background Color',
								'name' => 'background_color',
								'type' => 'radio',
								'column_width' => '',
								'choices' => array (
									'red' => 'Wolfpack Red',
									'reynolds-red' => 'Reynolds Red',
									'orange' => 'Pyroman Flame (orange)',
									'yellow' => 'Hunt Yellow',
									'green' => 'Genomic Green',
									'blue' => 'Innovation Blue',
									'indigo' => 'Bio-indigo',
									'gray-lighter' => '10% Gray',
									'gray-light' => '25% Gray',
									'gray-dark' => '60% Gray',
									'gray-darker' => '90% Gray',
								),
								'other_choice' => 0,
								'save_other_choice' => 0,
								'default_value' => 'gray-light',
								'layout' => 'vertical',
							),
						),
					),
					array (
						'label' => 'Events',
						'name' => 'events',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5390b79fd3cc1',
								'label' => 'Calendars',
								'name' => '',
								'type' => 'message',
								'column_width' => '',
								'message' => 'Events are auto-populated based upon the <a href="edit.php?post_type=events">events provided in the left-hand menu</a>.',
							),
							array (
								'key' => 'field_537b53dfa9db9',
								'label' => 'Section Name',
								'name' => 'section_name',
								'type' => 'text',
								'instructions' => 'Title displayed on website.	Optional.',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'Calendar',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_537b5433a9dcb',
								'label' => 'Link to Details Page',
								'name' => 'details_link',
								'type' => 'true_false',
								'instructions' => 'Add event listing link to event details page.',
								'column_width' => '',
								'message' => 'True',
								'default_value' => 0,
							),
							array (
								'key' => 'field_537b5433a9dba',
								'label' => 'Link to Calendar Page',
								'name' => 'button',
								'type' => 'true_false',
								'instructions' => 'Display a button link at the bottom of this module if there are at least 3 events.	Optional.',
								'column_width' => '',
								'message' => 'Show button',
								'default_value' => 0,
							),
							array (
								'key' => 'field_537b5484a9dbb',
								'label' => 'Button Settings',
								'name' => 'button_settings',
								'type' => 'repeater',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_537b5433a9dba',
											'operator' => '==',
											'value' => '1',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => '',
								'sub_fields' => array (
									array (
										'key' => 'field_537b54b6a9dbc',
										'label' => 'Button Text',
										'name' => 'button_text',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
									array (
										'key' => 'field_537b54d1a9dbd',
										'label' => 'Button Link',
										'name' => 'button_link',
										'type' => 'text',
										'required' => 1,
										'column_width' => '',
										'default_value' => '',
										'placeholder' => 'http://',
										'prepend' => '',
										'append' => '',
										'formatting' => 'none',
										'maxlength' => '',
									),
								),
								'row_min' => 1,
								'row_limit' => 1,
								'layout' => 'row',
								'button_label' => 'Add Row',
							),
						),
					),
					array (
						'label' => 'Social Media',
						'name' => 'social_media',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5390b0afec8ae',
								'label' => 'Social Media Accounts',
								'name' => '',
								'type' => 'message',
								'column_width' => '',
								'message' => 'This social media module will use the accounts provided in the "NC State Theme Options" at left.	The module is capable of displaying your own Facebook or Twitter content.	Content will only be loaded from the social network you select.',
							),
							array (
								'key' => 'field_537b6b31dd72b',
								'label' => 'Section Name',
								'name' => 'section_name',
								'type' => 'text',
								'instructions' => 'Title displayed on website.	Optional.',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'html',
								'maxlength' => '',
							),
							array (
								'key' => 'field_539b0fe330f56',
								'label' => 'Social Network',
								'name' => 'social_network',
								'type' => 'radio',
								'instructions' => 'Choose which network to display',
								'column_width' => '',
								'choices' => array (
									'facebook' => 'Facebook',
									'twitter' => 'Twitter'
								),
								'default_value' => '',
								'layout' => 'vertical',
							),
						),
					),
				),
				'button_label' => 'Add Row',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-home.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'featured_image',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_news-post',
		'title' => 'News Post',
		'fields' => array (
			array (
				'key' => 'field_5399ead498d0c',
				'label' => 'Post Info',
				'name' => '',
				'type' => 'message',
				'message' => 'To add an image to the post use \'Set featured image\' on the right-hand side of this page.	The image dimensions should be 1100x619px.',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	/*register_field_group(array (
		'id' => 'acf_text-page',
		'title' => 'Text Page',
		'fields' => array (
			array (
				'key' => 'field_5399b452de928',
				'label' => 'Template Information',
				'name' => '',
				'type' => 'message',
				'message' => 'Click \'Add Row\' below to add content to your page.	You may choose from body copy or a callout.	Each content type can be repeated as many times as needed.',
			),
			array (
				'key' => 'field_5363da3a05321',
				'label' => 'Page Content',
				'name' => 'page_content',
				'type' => 'flexible_content',
				'layouts' => array (
					array (
						'label' => 'Body Copy',
						'name' => 'body_copy',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5363da7f05322',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'wysiwyg',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
						),
					),
					array (
						'label' => 'Callout',
						'name' => 'cross-section_content',
						'display' => 'row',
						'min' => '',
						'max' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_5363da9c05324',
								'label' => 'Text',
								'name' => 'text',
								'type' => 'wysiwyg',
								'instructions' => 'Pay close attention to the length of your text. If you put too much, it will get cut off.',
								'column_width' => '',
								'default_value' => '',
								'toolbar' => 'full',
								'media_upload' => 'yes',
							),
							array (
								'key' => 'field_5363daa405325',
								'label' => 'Image',
								'name' => 'image',
								'type' => 'image',
								'instructions' => 'Dimensions: 768x432px.',
								'required' => 1,
								'column_width' => '',
								'save_format' => 'object',
								'preview_size' => 'thumbnail',
								'library' => 'all',
							),
							array (
								'key' => 'field_5363daaf05326',
								'label' => 'Image Position',
								'name' => 'image_position',
								'type' => 'radio',
								'instructions' => 'Position relative to callout text.	If the left side of your image is more important, chose left. If the right is more important, chose right.',
								'column_width' => '',
								'choices' => array (
									'left' => 'Left',
									'right' => 'Right',
								),
								'other_choice' => 0,
								'save_other_choice' => 0,
								'default_value' => 'left',
								'layout' => 'vertical',
							),
							array (
								'key' => 'field_5369077d2256a',
								'label' => 'Link',
								'name' => 'link',
								'type' => 'true_false',
								'instructions' => 'Do you want this callout to be a link?',
								'column_width' => '',
								'message' => 'Make this callout a link',
								'default_value' => 0,
							),
							array (
								'key' => 'field_538e071ca557d',
								'label' => 'Link Text',
								'name' => 'link_text',
								'type' => 'text',
								'instructions' => 'Text to underline when hovering over the callout',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_5369077d2256a',
											'operator' => '==',
											'value' => '1',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => 20,
							),
							array (
								'key' => 'field_5368f6e70455a',
								'label' => 'Link To',
								'name' => 'url',
								'type' => 'text',
								'instructions' => 'Callout\'s destination URL',
								'conditional_logic' => array (
									'status' => 1,
									'rules' => array (
										array (
											'field' => 'field_5369077d2256a',
											'operator' => '==',
											'value' => '1',
										),
									),
									'allorany' => 'all',
								),
								'column_width' => '',
								'default_value' => '',
								'placeholder' => 'http://',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_5369447827dd6',
								'label' => 'Background Color',
								'name' => 'background_color',
								'type' => 'radio',
								'column_width' => '',
								'choices' => array (
									'red' => 'Wolfpack Red',
									'reynolds-red' => 'Reynolds Red',
									'orange' => 'Pyroman Flame (orange)',
									'yellow' => 'Hunt Yellow',
									'green' => 'Genomic Green',
									'blue' => 'Innovation Blue',
									'indigo' => 'Bio-indigo',
									'gray-lighter' => '10% Gray',
									'gray-light' => '25% Gray',
									'gray-dark' => '60% Gray',
									'gray-darker' => '90% Gray',
								),
								'other_choice' => 0,
								'save_other_choice' => 0,
								'default_value' => 'blue',
								'layout' => 'vertical',
							),
						),
					),
				),
				'button_label' => 'Add Row',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'featured_image',
			),
		),
		'menu_order' => 0,
	)); */
	/*register_field_group(array (
		'id' => 'acf_section-description',
		'title' => 'Section Description',
		'fields' => array (
			array (
				'key' => 'field_536b9116f8339',
				'label' => 'Page Description',
				'name' => 'section_description',
				'type' => 'text',
				'instructions' => 'Optional text that will appear below the page\'s title within the gray box.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'top_level',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-text.php',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'default',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));*/
}