<?php
add_action('init', 'register_post_types');
function register_post_types() {
	register_post_type( 'offerings', array(
		'labels'              => array(
			'name'          => __( 'Offerings' ),
			'singular_name' => __( 'Offering' ),
			'add_new'       => 'Add new offeringss', // для добавления новой записи
			'add_new_item'  => 'Add new offerings', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'     => 'Edit offerings', // для редактирования типа записи
			'new_item'      => 'New offerings', // текст новой записи
			'view_item'     => '', // для просмотра записи этого типа.

		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null,
		'show_in_rest'        => true,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-admin-customizer',
		'capability_type'     => 'post',
//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => true,
		'supports'            => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array( 'offerings' ),
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}




