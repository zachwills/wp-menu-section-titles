<?php
/**
 * Plugin Name: Menu Section Titles
 * Plugin URI: https://github.com/zachwills/wp-menu-section-titles
 * Description:  Add the ability to create menu items that aren't a link. Useful in scenarios like a large footer menu where you want to have sections with links underneath the section titles.
 * Version: 1.1.1
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

		// get the hash
		$tag_base = explode("#", $tag_href);

		if( count($tag_base) > 1 ) {
			// set it to what we care about
			$tag_base = $tag_base[1];

			// get string between parenthsis
			preg_match('#\((.*?)\)#', $tag_base, $match);

			// check to see if there were parenthesis
			if( isset($match[1]) && !empty($match[1]) ) {
				// create the new element
				$new_element = $dom->createElement($match[1], $tag->nodeValue);
			}
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