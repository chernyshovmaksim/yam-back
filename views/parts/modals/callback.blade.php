<div id="callback-modal" class="fixed left-0 top-0 z-50 hidden h-full w-full">
    <div class="modal-overlay absolute left-0 top-0 flex h-screen w-full items-center justify-center">
        <div class="modal-bg flex w-4/5 flex-col rounded bg-white p-4 shadow-2xl md:w-1/2">
            <div class="flex w-full justify-end">
                <i id="close-modal" data-feather="x"></i>
            </div>
            <h3 class="w-full text-center text-xl">Обратный звонок</h3>
            <form id="form-callback" class="mt-2 flex flex-col gap-2">
                <input type="hidden" name="formid" value="callback">
                <input class="rounded border-[1px] border-gray-700 p-2" type="text" name="name"required
                    minlength="2" placeholder="Ваше имя" />
                <input id="phoneInput" class="rounded border-[1px] border-gray-700 p-2" type="text" required
                    name="phoneInput" placeholder="+7 (999) 999-99-99" />
                <button type="submit" class="cursor-pointer rounded bg-pink-600 px-4 py-2 text-xs text-white">
                    Отправить заявку
                </button>
            </form>
        </div>
    </div>
</div>
