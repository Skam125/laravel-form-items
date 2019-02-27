<?php namespace Skam\FormItems;

use SleepingOwl\Admin\Form\Element\NamedFormElement;

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

    protected $view = 'laravel-form-items::hex';

    public function initialize()
    {
        parent::initialize();
        \Meta::addCss('colorpicker-css', '/vendor/laravel-form-items/css/bootstrap-colorpicker.min.css');
        \Meta::addJs('colorpicker-js', '/vendor/laravel-form-items/js/bootstrap-colorpicker.min.js', ['admin-default'], true);
        \Meta::addJs('fields-handler', '/vendor/laravel-form-items/js/fields.js', ['colorpicker-js'], true);
    }

    /**
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return app('sleeping_owl.template')->view(
            $this->getView(),
            $this->toArray()
        );
    }
}
