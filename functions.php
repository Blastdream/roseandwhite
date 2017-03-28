<?php 


add_action('init', 'register_cpt_galerie');

function register_cpt_galerie()
	{
	$labels = array(
		'name' => _x('Galerie', 'galerie') ,
		'singular_name' => _x('Galerie', 'galerie') ,
		'add_new' => _x('Galerie', 'galerie') ,
		'add_new_item' => _x('Ajouter Galerie', 'galerie') ,
		'edit_item' => _x('Editer Galerie', 'galerie') ,
		'new_item' => _x('Nouvelle Galerie', 'galerie') ,
		'view_item' => _x('Voir Galerie', 'galerie') ,
		'search_items' => _x('Rechercher Galerie', 'galerie') ,
		'not_found' => _x('Aucune Galerie', 'galerie') ,
		'not_found_in_trash' => _x('Aucune Galerie dans Galerie', 'galerie') ,
		'parent_item_colon' => _x('Parent Galerie:', 'galerie') ,
		'menu_name' => _x('Galerie', 'galerie') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'page-attributes'
		) ,
		//'taxonomies' => array('category','post_tag'),
		'taxonomies' => array('post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-appearance',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type('galerie', $args);
	}

add_action('init', 'register_cpt_oeuvres');

function register_cpt_oeuvres()
	{
	$labels = array(
		'name' => _x('Oeuvres', 'oeuvres') ,
		'singular_name' => _x('Oeuvres', 'oeuvres') ,
		'add_new' => _x('Ajouter', 'oeuvres') ,
		'add_new_item' => _x('Ajouter Oeuvres', 'oeuvres') ,
		'edit_item' => _x('Editer Oeuvres', 'oeuvres') ,
		'new_item' => _x('Nouvelle Oeuvres', 'oeuvres') ,
		'view_item' => _x('Voir Oeuvres', 'oeuvres') ,
		'search_items' => _x('Rechercher Oeuvres', 'oeuvres') ,
		'not_found' => _x('Aucune Oeuvres', 'oeuvres') ,
		'not_found_in_trash' => _x('Aucune Oeuvres dans Oeuvres', 'oeuvres') ,
		'parent_item_colon' => _x('Parent Oeuvres:', 'oeuvres') ,
		'menu_name' => _x('Oeuvres', 'oeuvres') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'page-attributes'
		) ,
		//'taxonomies' => array('category','post_tag'),
		'taxonomies' => array('post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-appearance',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type('oeuvres', $args);
	}
/*--------------------*/
add_action('init', 'register_cpt_apropos');

function register_cpt_apropos()
	{
	$labels = array(
		'name' => _x('A propos', 'apropos') ,
		'singular_name' => _x('A propos', 'apropos') ,
		'add_new' => _x('Ajouter', 'A propos') ,
		'add_new_item' => _x('Ajouter A propos', 'apropos') ,
		'edit_item' => _x('Editer A propos', 'apropos') ,
		'new_item' => _x('Nouvelle A propos', 'apropos') ,
		'view_item' => _x('Voir A propos', 'apropos') ,
		'search_items' => _x('Rechercher A propos', 'apropos') ,
		'not_found' => _x('Aucune A propos', 'apropos') ,
		'not_found_in_trash' => _x('Aucune A propos dans A propos', 'apropos') ,
		'parent_item_colon' => _x('Parent A propos:', 'apropos') ,
		'menu_name' => _x('A propos', 'apropos') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'page-attributes'
		) ,
		//'taxonomies' => array('category','post_tag'),
		'taxonomies' => array('post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-id-alt',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type('apropos', $args);
	}

?>