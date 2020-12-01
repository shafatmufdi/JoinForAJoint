<?php
/**
 * Getting a template to show posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simple Podcast
 */

$simple_podcast_content = get_theme_mod( 'blog_layout' ) === 'list' ? '-list' : '';
?>

<?php

	/*
	 * Include the Post-Format-specific template for the content.
	 */

	get_template_part(
		'template-parts/post/preview' . $simple_podcast_content,
		get_post_format()
	);

