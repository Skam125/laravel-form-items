# laravel-form-items
Form items for SleepingOwlAdmin

Add to `composer.json`
```
{
  ...
  "require": {
     ...
     "skam/laravel-form-items": "dev-master",
  },
  "repositories": [
      {
        "type": "git",
        "url": "https://github.com/Skam125/laravel-form-items.git"
      }
    ]
}
```

After updating composer, add the service provider to the providers array in `config/app.php`
```Skam\FormItems\FormItemsServiceProvider::class```

Open `app/admin/bootstrap.php` and add in
```\AdminFormElement::add('colorPicker', \Skam\FormItems\ColorPicker::class);```

You need to publish the assets
```php artisan vendor:publish --tag=colorPicker --force```

Use
```AdminFormElement::colorPicker('hex', 'Hexadecimal colour')```