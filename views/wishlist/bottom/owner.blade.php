<a href="/favorites" data-commerce-cart="{{ $data['hash'] }}" data-instance="{{ $data['instance'] }}"
    class="relative flex flex-col items-center gap-2 text-white">
    <i data-feather="heart" width="18px"></i>
    <span class="text-xs">Избранное</span>
    <div
        class="absolute -top-3 right-1 flex h-5 w-5 items-center justify-center rounded-full bg-pink-600 text-xs text-white">
        {{ $data['count'] }}
    </div>
</a>
