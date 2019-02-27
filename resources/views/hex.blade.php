<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $name }}" class="control-label">
        {{ $label }}

        @if($required)
            <span class="form-element-required">*</span>
        @endif
    </label>
    <div class="input-group colorpicker-component ">
        <input {!! $attributes !!} value="{{$value}}"
               @if($readonly) readonly @endif
        >
        <span class="input-group-addon"><i></i></span>
    </div>
    @include(AdminTemplate::getViewPath('form.element.partials.helptext'))
    @include(AdminTemplate::getViewPath('form.element.partials.errors'))
</div>


