# WP API Yoast Update

>Note that this is a pre-alpha skeleton with no functionality.

WP API Yoast Update provides an easy way to update Yoast SEO fields (focus keyword, meta description) for posts using the WP REST API.

HTTP syntax:

``` http
POST {{host}}/wp-json/wp-api-yoast-update/v1/update
Authorization: Basic {{auth}}
Content-Type: application/json

{
	"post_id": 123,
	"focus_keyword": "thing I'm writing about",
	"meta_description": "This is a new meta description about the thing I'm writing about."
}
```

## WP CLI installation

```bash
wp plugin install https://github.com/djadomi/wp-api-yoast-update/releases/latest/download/wp-api-yoast-update.zip --activate
```

To update, add the `--force` flag to that command.

Note that there's no (simple) way to use `wp vhosts plugin` to install or update the plugin.
