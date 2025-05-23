=== WP API Yoast Update ===
Contributors: djadomi
Tags: api, yoast, seo, wp-api
Requires at least: ?
Tested up to: 6.7.2
Requires PHP: 8.3
License: MIT
License URI: https://opensource.org/licenses/MIT

== Description ==
WP API Yoast Update provides an easy way to update Yoast SEO fields (focus keyword, meta description) for posts using the WP REST API.

Syntax of payload for endpoint `/wp-json/wp-api-yoast-update/v1/update`:

```json
{
  "yoast_meta": {
	"focus_keyword": "your-focus-keyword",
	"meta_description": "your-meta-description"
  }
}
```

== Installation ==
1. Upload the plugin to the `/wp-content/plugins/wp-api-yoast-update/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==
= 0.0.1p =
* Skeleton of plugin with no functionality yet.
= 0.0.1a =
* Mostly working Alpha
= 0.0.2 =
* Working beta version

== Upgrade Notice ==
= 0.0.2 =
* Working beta version
= 0.0.3 =
* Releases working
