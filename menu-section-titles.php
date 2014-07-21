<?php
/**
 * Plugin Name: Menu Section Titles
 * Plugin URI: http://zachwills.net/plugins/menu-section-titles-wp-plugin
 * Description:  Add the ability to create menu items that aren't a link. Useful in scenarios like a large footer menu where you want to have sections with links underneath the section titles.
 * Version: 1.0
 * Author: Zach Wills
 * Author URI: http://zachwills.net
 * License: GPL2
 */

// wp recommended security precaution
defined('ABSPATH') or die('No script kiddies please!');

add_filter( 'wp_nav_menu_items', 'zw_menu_section_titles', 10, 2 );

/**
 * 
 */
function zw_menu_section_titles ( $items, $args ) {

	$dom = new DOMDocument();
	
	$dom->loadHTML( $items );

	$tags = $dom->getElementsByTagName('a');

	// loop through all a tags
	foreach($tags as $tag) {

		// set the href to a var
		$tag_href = $tag->getAttribute('href');

		// check if it equals the hash for h1
		if( $tag_href == '#h1' ) {
			// create the new element
			$new_element = $dom->createElement('h1', $tag->nodeValue);
		}

		// check if it equals the hash for h2
		if( $tag_href == '#h2' ) {
			// create the new element
			$new_element = $dom->createElement('h2', $tag->nodeValue);
		}

		// check if it equals the hash for h3
		if( $tag_href == '#h3' ) {
			// create the new element
			$new_element = $dom->createElement('h3', $tag->nodeValue);
		}

		// check if it equals the hash for h4
		if( $tag_href == '#h4' ) {
			// create the new element
			$new_element = $dom->createElement('h4', $tag->nodeValue);
		}

		// check if it equals the hash for h5
		if( $tag_href == '#h5' ) {
			// create the new element
			$new_element = $dom->createElement('h5', $tag->nodeValue);
		}

		// check if it equals the hash for h6
		if( $tag_href == '#h6' ) {
			// create the new element
			$new_element = $dom->createElement('h6', $tag->nodeValue);
		}

		// check if it equals the hash for span
		if( $tag_href == '#span' ) {
			// create the new element
			$new_element = $dom->createElement('span', $tag->nodeValue);
		}

		// make sure we have a new element and it isnt empty
		if( isset($new_element) && $new_element != '' ) {
			// replace the tag
			$tag->parentNode->replaceChild($new_element, $tag);

			// reset the var so it doesnt trigger by accident
			$new_element = '';
		}	
	}

	// return the string
	return $dom->saveHTML();
}