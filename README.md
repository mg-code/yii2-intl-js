Usage
-----

By default `IntlLocaleAsset` uses locale defined in Formatter configuration.
If you want to override it you can define it in application `params` section:

```php
return [
    ..... application configuration ....
    'params' => [
        'intlJsLocale' => 'en-US',
        ...
    ]
];
```