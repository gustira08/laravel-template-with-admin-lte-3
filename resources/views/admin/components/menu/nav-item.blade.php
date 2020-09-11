
<li class="nav-item">
    <a href="{{ $href ?? '#' }}" class="nav-link {{
        request()->is($active ?? '') ? 'active' : ''
    }}">
        <i class="nav-icon {{ $icon ?? 'far fa-circle' }}"></i>
        <p>{{ $text }}</p>
    </a>
</li>
