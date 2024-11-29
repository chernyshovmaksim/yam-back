<div data-commerce-cart="{{ $data['hash'] }}" data-instance="{{ $data['instance'] }}">
    <div class="rounded bg-green-200 px-2 py-2 text-xs">
        Товаров: <span class="font-bold">{{ $data['count'] }} шт.</span><br />На сумму:
        <span class="font-black">{{ $data['total'] }} ₽</span>
    </div>
    <a href="/order"
        class="mt-2 flex w-full rounded bg-pink-600 p-2 text-center text-sm font-bold text-white shadow">Оформить
        заказ</a>

    <div class="mt-4 w-full" id="cart-products">
        {!! $data['dl.wrap'] !!}
    </div>
</div>
