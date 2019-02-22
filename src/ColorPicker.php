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
//        https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css
//        https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/img/bootstrap-colorpicker/alpha-horizontal.png
//        https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/img/bootstrap-colorpicker/alpha.png
//        https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/img/bootstrap-colorpicker/hue-horizontal.png
//        https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/img/bootstrap-colorpicker/hue.png
//        https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/img/bootstrap-colorpicker/saturation.png
//        https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js
        \Meta::addCss('colorpicker', asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css'));
        \Meta::addJs('colorpicker', asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js'), ['admin-default'], true);
//        \Meta::addJs('admin-extend', asset('/packages/mypackage/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'), 'admin-default', true);
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
