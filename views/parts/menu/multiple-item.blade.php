<li>
    <span>{{ $el['pagetitle'] }}</span>
    <ul>
        @foreach ($el['children'] as $item)
            @if (isset($item['children']))
                @include('parts.menu.multiple-item', ['el' => $item])
            @else
                <li>
                    <a href="{{ $item['url'] }}">{{ $item['pagetitle'] }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</li>
