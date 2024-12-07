<form method="POST" data-commerce-order="{{ $data['form_hash'] }}" class="mx-auto mt-4 flex flex-col gap-2 md:w-1/4">
    <input type="hidden" name="formid" value="order">
    <input class="rounded border-[1px] border-gray-600 px-4 py-2 text-xs" id="order-name" type="text" name="name"
        placeholder="Имя" />
    <input class="rounded border-[1px] border-gray-600 px-4 py-2 text-xs" id="order-email" type="email" name="email"
        placeholder="ivan@mail.ru" />
    <input class="rounded border-[1px] border-gray-600 px-4 py-2 text-xs" id="order-phone" type="text" name="phone"
        placeholder="+7 (999) 999-99-99" />
    <button class="flex rounded bg-pink-600 px-4 py-2 text-center text-xs text-white" type="submit">
        Оформить заказ
    </button>
</form>
