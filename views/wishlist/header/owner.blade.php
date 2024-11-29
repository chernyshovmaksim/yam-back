<a href="/favorites" data-commerce-cart="{{ $data['hash'] }}" data-instance="{{ $data['instance'] }}"
    class="relative cursor-pointer">
    <i data-feather="heart" class="w-5"></i>
    <div
        class="absolute -right-3 -top-3 flex h-5 w-5 items-center justify-center rounded-full bg-pink-600 text-xs text-white">
        {{ $data['count'] }}
    </div>
</a>
