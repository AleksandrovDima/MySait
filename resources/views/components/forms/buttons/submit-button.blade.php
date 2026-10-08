<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-orange text-white fw-bold px-4']) }}>
    {{ $slot }}
</button>
