# laravel-form-items
Form items for SleepingOwlAdmin

After updating composer, add the service provider to the providers array in config/app.php
```Skam\FormItems\FormItemsServiceProvider::class```,

Open `app/admin/bootstrap.php` and add in:
```\AdminFormElement::add('colorPicker', \Skam\FormItems\ColorPicker::class);```

