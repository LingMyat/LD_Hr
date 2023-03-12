@props(['name'])
<li>
    <a {{ $attributes }}>
        {{ $slot }}
        <span>{{ $name }}</span>
    </a>
</li>
