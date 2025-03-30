<?php
// Déclaration du Custom Post Type projet
function create_projet_post_type() {
    $labels = array(
        'name'               => 'portfolio',
        'singular_name'      => 'Réalisation',
        'menu_name'          => 'portfolio',
        'add_new'            => 'Ajouter',
        'add_new_item'       => 'Ajouter une nouvelle réalisation',
        'edit_item'          => 'Modifier la réalisation',
        'new_item'           => 'Nouvelle réalisation',
        'view_item'          => 'Voir la réalisation',
        'search_items'       => 'Rechercher des réalisations',
        'not_found'          => 'Aucune réalisation trouvée',
        'not_found_in_trash' => 'Aucune réalisation dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array(
            'slug'       => 'portfolio',
            'with_front' => false
        ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array(
            'title', 
            'editor', 
            'thumbnail'
        ),
        'menu_icon'          => 'dashicons-portfolio',
        'show_in_rest'      => true, // Support Gutenberg
        'query_var'         => 'portfolio' // Clé de requête personnalisée
    );

    register_post_type('portfolio', $args);
}
