<!-- Session Status -->
@if (session('status'))
    <div class="font-medium text-sm text-green-600 mb-4">
        {{ session('status') }}
    </div>
@endif
