# Application Insights plugin

Integration for [Microsoft Application Insights]( http://azure.microsoft.com/services/application-insights/ ) tracking in your Kirby site.

## Installation

1. Create a directory `application-insights` in your site's `/site/plugins` directory.
2. Copy all files into this directory.

### Advanced Installation

If you use Git for your site you can also install in a single step by using a [Git submodule](https://git-scm.com/book/en/v2/Git-Tools-Submodules). From the root of your site execute this:

```
git submodule add https://github.com/bowstreet/application-insights-kirby.git site/plugins/application-insights
```

## Config Variables

Configure the corresponding values in your site config.

**Tip:** Make use of Kirby's simple [multi-environment options]( http://getkirby.com/docs/advanced/options ) feature to set up tracking only for your production site.

- applicationinsights.active: true / false (Default: true)
- applicationinsights.instrumentationkey: (Use your Application Insights Instrumentation Key)

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
