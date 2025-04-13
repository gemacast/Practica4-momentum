<?php

// Registrar el menú
if (function_exists('register_nav_menus')) {
    register_nav_menus(array(
        'principal' =>('Menú Principal'),
    ));
}

// Agrega la clase nav-link a cada <a>
add_filter('nav_menu_link_attributes', 'clase_link_menu', 10, 3);
function clase_link_menu($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}

// Agrega la clase nav-item a cada <li>
add_filter('nav_menu_css_class', 'clase_item_menu', 10, 4);
function clase_item_menu($classes, $item, $args, $depth) {
    $classes[] = 'nav-item text-end w-100'; // Alinea a la derecha cada item en colapsado
    return $classes;
}

//Agregando imagenes destacadas

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

// Agregando sidebar

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'menulateral' sidebar. */
	register_sidebar(
		array(
			'id'            => 'menu-lateral',
			'name'          =>( 'Menu lateral' ),
			'description'   =>( 'Sidebar lateral izquierdo de las entradas.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s my-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

//Registrar el CPT
// copio codigo de developer.wordpress y adapto
/**
 * Register a custom post type called "Proyectos".
 */
function momentum_registrar_cpt_proyectos() {
	$labels = array(
		'name'                  => ( 'Proyectos' ),
		'singular_name'         => ( 'Proyecto' ),
		'menu_name'             => ( 'Proyectos'),
		'name_admin_bar'        => ( 'Proyecto'),
		'add_new'               =>( 'Añadir nuevo' ),
		'add_new_item'          =>( 'Añadir nuevo proyecto' ),
		'new_item'              =>( 'Nuevo proyecto'),
		'edit_item'             =>( 'Editar Proyecto'),
		'view_item'             =>( 'Ver Proyecto'),
		'all_items'             =>( 'Todos los proyectos' ),
		'search_items'          =>( 'Buscar Proyectos' ),
		'not_found'             =>( 'No se han encontrado Proyectos' ),
		'not_found_in_trash'    =>( 'No se han encontrado Proyectos en la papelera' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'proyectos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	);

	register_post_type( 'proyectos', $args );
}

add_action( 'init', 'momentum_registrar_cpt_proyectos' );



?>



