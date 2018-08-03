<?php
/**
 * Alert
 *
 * @package     NickDavis\Alerts
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://nickdavis.co
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Alerts;

use BrightNucleus\Views;
use WP_Query;

class Alert {
	public function register() {
		add_action( 'init', [ $this, 'register_cpt' ], 11 );

		add_action( 'nd_alerts', [ $this, 'render' ] );
	}

	public function register_cpt() {
		register_extended_post_type( 'nd-alert',
			[
				'publicly_queryable' => false,
				'supports'           => [
					'title',
					'editor'
				],
				'menu_icon'          => 'dashicons-megaphone',
			],
			[
				// Overrides the base names used for labels.
				'singular' => 'Alert',
				'plural'   => 'Alerts',
				'slug'     => 'alerts',
			]
		);
	}

	public function render() {
		if ( false === $this->get_alert()->have_posts() ) {
			return;
		}

		$post_id = $this->get_alert()->posts[0];
		$post    = get_post( $post_id );

		$data = [
			'title' => $post->post_title,
			'text'  => $post->post_content,
		];

		echo Views::render( 'alert', $data );
	}

	public function get_alert() {
		$args = [
			'post_type'              => 'nd-alert',
			'posts_per_page'         => 1,
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'fields'                 => 'ids',
		];

		return new WP_Query( $args );
	}
}
