<?php namespace Skam\FormItems;

use SleepingOwl\Admin\Form\Element\NamedFormElement;
use SleepingOwl\Admin\AssetManager\AssetManager;

class ColorPicker extends NamedFormElement
{
    public function __construct($path, $label = null)
    {
        parent::__construct($path, $label);

        $this->setHtmlAttributes([
            'class' => 'form-control',
            'type'  => 'text',
        ]);
    }

    protected $view = 'laravel-form-items::resources.views.hex';

    public function initialize()
    {
        parent::initialize();

        $this->loadViewsFrom(__DIR__ .'/views', 'laravel-form-items');

        \Meta::addJs('admin-extend', asset('/packages/mypackage/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'), 'admin-default', true);
        \Meta::addJs('admin-extend', asset('/packages/mypackage/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'), 'admin-default', true);
    }


    // FormItem::colorPicker('hex', 'Hexadecimal colour')->required()
}
