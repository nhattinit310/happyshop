<?php
/**
 * Footer bottom content
 *
 * @package Total WordPress Theme
 * @subpackage Partials
 * @version 4.6.5
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Get post ID
$post_id = wpex_get_current_post_id();

// Return if disabled
if ( ! wpex_has_callout( $post_id ) ) {
	return;
}

// Get post content
$content = wpex_callout_content( $post_id );

// Get link
if ( $post_id && $meta = get_post_meta( $post_id, 'wpex_callout_link', true ) ) {
	$link = $meta;
} else {
	$link = wpex_get_mod( 'callout_link', '#' );
}

// Get link text
if ( $post_id && $meta = get_post_meta( $post_id, 'wpex_callout_link_txt', true ) ) {
	$link_text = $meta;
} else {
	$link_text = wpex_get_mod( 'callout_link_txt', 'Get In Touch' );
}

// If link is defined set target and rel
if ( $link ) {

	// Link target
	$btn_target	= wpex_get_mod( 'callout_button_target', 'blank' );
	$btn_target	= ( 'blank' == $btn_target ) ? ' target="_blank"' : '';

	// Link rel
	$btn_rel = wpex_get_mod( 'callout_button_rel', false );
	$btn_rel = ( 'nofollow' == $btn_rel ) ? ' rel="nofollow"' : '';

}

// Button Icon
$icon = wpex_get_mod( 'callout_button_icon' );
$icon = $icon ? '<span class="theme-button-icon-right fa fa-'. esc_html( $icon ) .'"></span>' : '';

// Translate Theme mods
$link      = wpex_translate_theme_mod( 'callout_link', $link );
$link_text = wpex_translate_theme_mod( 'callout_link_txt', $link_text );

// Bail if conditions are not met
if ( ! $content && ( ! $link || ! $link_text ) ) {
	return;
}

// Callout classes
$classes = 'clr';
if ( ! $content ) {
	$classes .= ' btn-only';
}
if ( 'always-visible' != wpex_get_mod( 'callout_visibility', 'always-visible' ) ) {
	$classes .= ' ' . wpex_get_mod( 'callout_visibility' );
}

// Attributes
$attrs = array(
	'id'    => 'footer-callout-wrap',
	'class' => esc_attr( $classes ),
);
if ( $label = wpex_get_mod( 'footer_callout_aria_label' ) ) {
	$attrs['aria-label'] = esc_attr( $label );
} ?>

