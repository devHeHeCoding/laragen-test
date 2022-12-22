<div {!! $attributes->merge(['class'=>'flex flex-col']) !!} >
    <a href="{{url('/')}}">
        <img class="w-auto" src="{{ asset('images/logo-rogarden.png') }}" alt="RoGarden Logo">
    </a>
    {{$slot}}
</div>
