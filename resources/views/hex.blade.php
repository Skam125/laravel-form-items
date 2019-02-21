<?php /*<div class="form-group {{  $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>

    <div class="input-group input-{{ $name }}">
        <input name="{{ $name }}" type="text" id="{{ $name }}" value="{{ $value }}" class="form-control" />
        <span class="input-group-addon"><i></i></span>
    </div>

    @include(AdminTemplate::view('formitem.errors'))
</div>

<script>
    $(function(){
        $('.input-{{ $name }}').colorpicker({
            'format' : 'hex'
        });
    });
</script>
*/?>
<div class="form-group form-element-text {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $name }}" class="control-label">
        {{ $label }}

        @if($required)
            <span class="form-element-required">*</span>
        @endif
    </label>
    <input {!! $attributes !!} value="{{$value}}"
           @if($readonly) readonly @endif
    >

    @include(AdminTemplate::getViewPath('form.element.partials.helptext'))
    @include(AdminTemplate::getViewPath('form.element.partials.errors'))
</div>