<?php
defined( 'ABSPATH' ) || exit;
class WP_API_Yoast_Update {
	public function init_hooks() {
		add_action('rest_api_init', [ $this, 'register_update_endpoint' ]);
	}
	public function register_update_endpoint() {
		register_rest_route('wp-api-yoast-update/v1', '/update', [
			'methods' => 'POST',
			'callback' => [ $this, 'update_yoast_fields' ],
			'permission_callback' => function() {
				return current_user_can('edit_posts');
			},
		]);
	}
	public function update_yoast_fields($data) {
		$post_id = isset($data['post_id']) ? $data['post_id'] : 0;
		$focus_keyword = isset($data['focus_keyword']) ? $data['focus_keyword'] : '';
		$meta_description = isset($data['meta_description']) ? $data['meta_description'] : '';
		if (!$post_id) {
			return new WP_Error('no_post_id', 'Post ID is required', [ 'status' => 400 ]);
		}
		update_post_meta($post_id, '_yoast_wpseo_focuskw', $focus_keyword);
		update_post_meta($post_id, '_yoast_wpseo_metadesc', $meta_description);
		return rest_ensure_response([ 'success' => true ]);
	}
}
