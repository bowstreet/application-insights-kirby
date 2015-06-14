# Application Insights plugin

Integration for [Microsoft Application Insights]( http://azure.microsoft.com/services/application-insights/ ) tracking in your Kirby site.

## Installation

1. Create a directory `application-insights` in your site's `/site/plugins` directory.
2. Copy all files into this directory.

Configure the corresponding values in your site config.
**Tip:** Make use of Kirby's simple [multi-environment options]( http://getkirby.com/docs/advanced/options ) feature to set up tracking only for your production site.

### Config Variables

- `applicationinsights.active`: true / false (Default: true)
- `applicationinsights.instrumentationkey`: (Use your Application Insights Instrumentation Key)

## Example usage

### Config

```php
c::set('applicationinsights.active', true);
c::set('applicationinsights.instrumentationkey', 'your-instrumentation-key');
```

### Snippets

You can either add the following to your site's `<head>` element or as the last element right before the closing `</body>` tag.

```php
<?php echo application_insights(); ?>
```

## Author

Matthias Wenz, bowstreet
<https://bowstreet.de>