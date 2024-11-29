<button data-commerce-cart="{{ $data['hash'] }}" data-instance="{{ $data['instance'] }}" id="cart-icon-in-bottom-bar"
    class="relative flex flex-col items-center gap-2 text-white">
    <i data-feather="shopping-cart" width="18px"></i>
    <span class="text-xs">Корзина</span>
    <div
        class="absolute -top-3 right-1 flex h-5 w-5 items-center justify-center rounded-full bg-pink-600 text-xs text-white">
        {{ $data['count'] }}
    </div>
</button>
