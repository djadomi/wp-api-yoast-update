# WP API Yoast Update

>Note that this is a pre-alpha skeleton with no functionality.

WP API Yoast Update provides an easy way to update Yoast SEO fields (focus keyword, meta description) for posts using the WP REST API.

Syntax of payload for endpoint `/wp-json/wp-api-yoast-update/v1/update`:

```json
{
  "yoast_meta": {
	"focus_keyword": "your-focus-keyword",
	"meta_description": "your-meta-description"
  }
}
