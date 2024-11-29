<button data-commerce-cart="{{ $data['hash'] }}" data-instance="{{ $data['instance'] }}" class="relative cursor-pointer"
    id="cart-icon-in-header">
    <img src="/theme/assets/svg/shopping-cart.svg" class="w-5" alt="">
    <div
        class="absolute -right-3 -top-3 flex h-5 w-5 items-center justify-center rounded-full bg-pink-600 text-xs text-white">
        {{ $data['count'] }}
    </div>
</button>
