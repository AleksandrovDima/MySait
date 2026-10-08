@props(['messages'])
<div {{ $attributes }}>
    <div class="alert alert-danger" role="alert">
        @foreach($messages as $message)
            <p class="mb-0{{ !$loop->last ? ' mb-2' : '' }}">{{ $message }}</p>
        @endforeach
    </div>
</div>
