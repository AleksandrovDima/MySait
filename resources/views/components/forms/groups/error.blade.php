@props([
    'messages' => [],
    'class' => 'invalid-feedback'
])

@if(!empty($messages))
    <div @class([$class])>
        @if(count($messages) === 1)
            {{ $messages[0] }}
        @else
            <ul class="mb-0 ps-3">
                @foreach($messages as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif
