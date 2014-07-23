WP Menu Section Titles
==

Add the ability to create menu items that aren't a link. Useful in scenarios like a large footer menu where you want to have sections with links underneath the section titles.

## Installation

### Automatic

Coming soon

### Manual

1. Upload `menu-section-titles` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Usage

Add a menu link with the appropriate hash (e.g. for an `<h1>` set the link to `#(h1)`) through `Appearances -> Menu`.

It is fully dynamic, so anything you put inside the `#()`.

Examples:

* h1 => `#(h1)`
* h2 => `#(h2)`
* span => `#(span)`
* div => `#(div)`
* p => `#(p)`
* strong => `#(strong)`


## Changelog

Current active version: 1.1

### 1.1 (7-23-14)
* Made plugin more dynamic so you can add any element to your menu

### 1.0 (7-21-14)
* Initial Plugin Launch
