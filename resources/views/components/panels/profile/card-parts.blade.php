@props([
    'header',
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'card shadow-sm']) }}>
    <div class="card-body">
        <section>
            <header>
                <h5>{{ $header }}</h5>

                @if ($description) 
                    <p class="mt-1 text-muted mb-0">
                        {{ $description }}
                    </p>
                @endif
            </header>

            {{ $slot }}
        </section>
    </div>
</div>
