<div {!! $attributes->merge(['class'=>'flex flex-col']) !!} >
    <a href="{{url('/')}}">
        <img class="w-44" src="{{ asset('images/logo-color-rgb.svg') }}" alt="RoGarden Logo">
    </a>
    {{$slot}}
</div>
