@props(['errors'])


@if(!empty($errors))
    <span class="error-message">
        @foreach ($errors as $message)
            {{ $message }}<br>
        @endforeach
    </span>
@endif
