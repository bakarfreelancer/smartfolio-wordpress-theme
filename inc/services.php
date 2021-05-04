<?php
// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'sf' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'sf' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'sf' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'sf' ),
		'archives' => __( 'Service Archives', 'sf' ),
		'attributes' => __( 'Service Attributes', 'sf' ),
		'parent_item_colon' => __( 'Parent Service:', 'sf' ),
		'all_items' => __( 'All Services', 'sf' ),
		'add_new_item' => __( 'Add New Service', 'sf' ),
		'add_new' => __( 'Add New', 'sf' ),
		'new_item' => __( 'New Service', 'sf' ),
		'edit_item' => __( 'Edit Service', 'sf' ),
		'update_item' => __( 'Update Service', 'sf' ),
		'view_item' => __( 'View Service', 'sf' ),
		'view_items' => __( 'View Services', 'sf' ),
		'search_items' => __( 'Search Service', 'sf' ),
		'not_found' => __( 'Not found', 'sf' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'sf' ),
		'featured_image' => __( 'Featured Image', 'sf' ),
		'set_featured_image' => __( 'Set featured image', 'sf' ),
		'remove_featured_image' => __( 'Remove featured image', 'sf' ),
		'use_featured_image' => __( 'Use as featured image', 'sf' ),
		'insert_into_item' => __( 'Insert into Service', 'sf' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'sf' ),
		'items_list' => __( 'Services list', 'sf' ),
		'items_list_navigation' => __( 'Services list navigation', 'sf' ),
		'filter_items_list' => __( 'Filter Services list', 'sf' ),
	);
	$args = array(
		'label' => __( 'Service', 'sf' ),
		'description' => __( 'Providing services', 'sf' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-products',
		'supports' => array('title', 'thumbnail'),
		// 'taxonomies' => array('category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

// Custom fields generated
/**
 * 
 * Retrieving the values:
 * Description = get_post_meta( get_the_ID(), 'details_description', true )
 * Price = get_post_meta( get_the_ID(), 'details_price', true )
 * Time in days = get_post_meta( get_the_ID(), 'details_time-in-days', true )
 * Action button text = get_post_meta( get_the_ID(), 'details_action-button-text', true )
 * Action button link = get_post_meta( get_the_ID(), 'details_action-button-link', true )
 */
class Sf_service {
	private $config = '{"title":"Details","prefix":"details_","domain":"sf","class_name":"Sf_service","post-type":["service"],"context":"normal","priority":"default","cpt":"service","fields":[{"type":"textarea","label":"Description","id":"details_description"},{"type":"text","label":"Price","id":"details_price"},{"type":"text","label":"Project delivery time","id":"details_time-in-days"},{"type":"text","label":"Action button text","id":"details_action-button-text"},{"type":"text","label":"Action button link","id":"details_action-button-link"}]}';

	public function __construct() {
		$this->config = json_decode( $this->config, true );
		$this->process_cpts();
		add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );
		add_action( 'save_post', [ $this, 'save_post' ] );
	}

	public function process_cpts() {
		if ( !empty( $this->config['cpt'] ) ) {
			if ( empty( $this->config['post-type'] ) ) {
				$this->config['post-type'] = [];
			}
			$parts = explode( ',', $this->config['cpt'] );
			$parts = array_map( 'trim', $parts );
			$this->config['post-type'] = array_merge( $this->config['post-type'], $parts );
		}
	}

	public function add_meta_boxes() {
		foreach ( $this->config['post-type'] as $screen ) {
			add_meta_box(
				sanitize_title( $this->config['title'] ),
				$this->config['title'],
				[ $this, 'add_meta_box_callback' ],
				$screen,
				$this->config['context'],
				$this->config['priority']
			);
		}
	}

	public function save_post( $post_id ) {
		foreach ( $this->config['fields'] as $field ) {
			switch ( $field['type'] ) {
				case 'url':
					if ( isset( $_POST[ $field['id'] ] ) ) {
						$sanitized = esc_url_raw( $_POST[ $field['id'] ] );
						update_post_meta( $post_id, $field['id'], $sanitized );
					}
					break;
				default:
					if ( isset( $_POST[ $field['id'] ] ) ) {
						$sanitized = sanitize_text_field( $_POST[ $field['id'] ] );
						update_post_meta( $post_id, $field['id'], $sanitized );
					}
			}
		}
	}

	public function add_meta_box_callback() {
		$this->fields_table();
	}

	private function fields_table() {
		?><table class="form-table" role="presentation">
			<tbody><?php
				foreach ( $this->config['fields'] as $field ) {
					?><tr>
						<th scope="row"><?php $this->label( $field ); ?></th>
						<td><?php $this->field( $field ); ?></td>
					</tr><?php
				}
			?></tbody>
		</table><?php
	}

	private function label( $field ) {
		switch ( $field['type'] ) {
			default:
				printf(
					'<label class="" for="%s">%s</label>',
					$field['id'], $field['label']
				);
		}
	}

	private function field( $field ) {
		switch ( $field['type'] ) {
			case 'textarea':
				$this->textarea( $field );
				break;
			default:
				$this->input( $field );
		}
	}

	private function input( $field ) {
		printf(
			'<input class="regular-text %s" id="%s" name="%s" %s type="%s" value="%s">',
			isset( $field['class'] ) ? $field['class'] : '',
			$field['id'], $field['id'],
			isset( $field['pattern'] ) ? "pattern='{$field['pattern']}'" : '',
			$field['type'],
			$this->value( $field )
		);
	}

	private function textarea( $field ) {
		printf(
			'<textarea class="regular-text" id="%s" name="%s" rows="%d">%s</textarea>',
			$field['id'], $field['id'],
			isset( $field['rows'] ) ? $field['rows'] : 5,
			$this->value( $field )
		);
	}

	private function value( $field ) {
		global $post;
		if ( metadata_exists( 'post', $post->ID, $field['id'] ) ) {
			$value = get_post_meta( $post->ID, $field['id'], true );
		} else if ( isset( $field['default'] ) ) {
			$value = $field['default'];
		} else {
			return '';
		}
		return str_replace( '\u0027', "'", $value );
	}

}
new Sf_service;


// Register Taxonomy Category
function create_service_category_tax() {

	$labels = array(
		'name'              => _x( 'Services categories', 'taxonomy general name', 'sf' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'sf' ),
		'search_items'      => __( 'Search Categories', 'sf' ),
		'all_items'         => __( 'All Categories', 'sf' ),
		'parent_item'       => __( 'Parent Category', 'sf' ),
		'parent_item_colon' => __( 'Parent Category:', 'sf' ),
		'edit_item'         => __( 'Edit Category', 'sf' ),
		'update_item'       => __( 'Update Category', 'sf' ),
		'add_new_item'      => __( 'Add New Category', 'sf' ),
		'new_item_name'     => __( 'New Category Name', 'sf' ),
		'menu_name'         => __( 'Categories', 'sf' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'sf' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'servicecategory', array('service'), $args );

}
add_action( 'init', 'create_service_category_tax' );