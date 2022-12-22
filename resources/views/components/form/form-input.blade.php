@props([
    'disabled' => false,
    'label' => 'Label',
    'type' => 'text',
    'id' => null,
])

@php
    if(is_null($id)){
        $id = $attributes->get('name', 'no-name') . '-auto-' . \Illuminate\Support\Str::random(5);
    }

    $inputErrors = null;
    $hasErrors = false;

    if($errors->any()){
        $inputErrors = $errors->get($attributes->get('name'));
        if($inputErrors){
            $hasErrors = true;
        }
    }

    $baseClass = 'form-group';
    if($hasErrors){
        $baseClass .= ' error';
    }
@endphp

<div {!! $attributes->merge(['class' => $baseClass]) !!}>
    <label>
        {{$label}}
        <input
            type="{{$type}}"
            id="{{$id}}"
            class="form-control"
            {!! $attributes->except(['class', 'id', 'disabled', 'type']) !!}
            {{ $disabled ? 'disabled' : '' }}
        >
        @if($hasErrors)
            <x-form.errors :errors="$inputErrors"/>
        @endif
    </label>
</div>
