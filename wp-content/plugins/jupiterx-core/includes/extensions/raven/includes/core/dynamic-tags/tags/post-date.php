<?php
namespace JupiterX_Core\Raven\Core\Dynamic_Tags\Tags;

use Elementor\Controls_Manager;
use Elementor\Core\DynamicTags\Tag as Tag;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Post_Date extends Tag {
	public function get_name() {
		return 'post-date';
	}

	public function get_title() {
		return __( 'Post Date', 'jupiterx-core' );
	}

	public function get_group() {
		return 'post';
	}

	public function get_categories() {
		return [ \Elementor\Modules\DynamicTags\Module::TEXT_CATEGORY ];
	}

	protected function _register_controls() {
		$this->add_control(
			'type',
			[
				'label' => __( 'Type', 'jupiterx-core' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'post_date_gmt' => __( 'Post Published', 'jupiterx-core' ),
					'post_modified_gmt' => __( 'Post Modified', 'jupiterx-core' ),
				],
				'default' => 'post_date_gmt',
			]
		);

		$this->add_control(
			'format',
			[
				'label' => __( 'Format', 'jupiterx-core' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'default' => __( 'Default', 'jupiterx-core' ),
					'F j, Y' => date( 'F j, Y' ),
					'Y-m-d' => date( 'Y-m-d' ),
					'm/d/Y' => date( 'm/d/Y' ),
					'd/m/Y' => date( 'd/m/Y' ),
					'human' => __( 'Human Readable', 'jupiterx-core' ),
					'custom' => __( 'Custom', 'jupiterx-core' ),
				],
				'default' => 'default',
			]
		);

		$this->add_control(
			'custom_format',
			[
				'label' => __( 'Custom Format', 'jupiterx-core' ),
				'default' => '',
				'description' => sprintf( '<a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">%s</a>', __( 'Documentation on date and time formatting', 'jupiterx-core' ) ),
				'condition' => [
					'format' => 'custom',
				],
			]
		);
	}

	public function render() {
		$date_type = $this->get_settings( 'type' );
		$format    = $this->get_settings( 'format' );

		if ( 'human' === $format ) {
			/* translators: %s: Human readable date/time. */
			$value = sprintf( __( '%s ago', 'jupiterx-core' ), human_time_diff( strtotime( get_post()->{$date_type} ) ) );
		} else {
			switch ( $format ) {
				case 'default':
					$date_format = '';
					break;
				case 'custom':
					$date_format = $this->get_settings( 'custom_format' );
					break;
				default:
					$date_format = $format;
					break;
			}

			if ( 'post_date_gmt' === $date_type ) {
				$value = get_the_date( $date_format );
			} else {
				$value = get_the_modified_date( $date_format );
			}
		}
		echo wp_kses_post( $value );
	}
}