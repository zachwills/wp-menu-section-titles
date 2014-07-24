=== Plugin Name ===
Contributors: oxymoron
Tags: nav menu, menu, menu title, menu columns
Requires at least: 3.0.1
Tested up to: 3.9.1
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add the ability to create menu items that aren't a link.

== Description ==

Add the ability to create menu items that aren't a link. Useful in scenarios like a large footer menu where you want to have sections with links underneath the section titles.

[GitHub Repo](https://github.com/zachwills/wp-menu-section-titles "WP Menu Section Titles")

== Installation ==

1. Upload `menu-section-titles` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add a menu link with the appropriate hashes (e.g. for an `<h1>` set the link o `#(h1)`)

== Frequently Asked Questions ==

= What elements can I tell it to use? =

Anything! It is dynamic and anything you put inside the parenthesis `#()` will become the element.

Examples:

* h1 => `#(h1)`
* h2 => `#(h2)`
* span => `#(span)`
* div => `#(div)`
* p => `#(p)`
* strong => `#(strong)`

== Screenshots ==

1. Example configuration screen
2. Example footer menu with titles that you can achieve

== Changelog ==

= 1.1 =
* Made plugin more dynamic so you can add any element to your menu

= 1.0 =
* Plugin Launch