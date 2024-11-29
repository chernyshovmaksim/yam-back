<div data-id="{{ $data['id'] }}" data-commerce-row="{{ $data['row'] }}" class="mt-4 rounded bg-gray-100 p-2">
    <div class="my-4 flex w-full items-center justify-end">
        <div data-commerce-action="remove" class=" cursor-pointer h-6 min-w-6 rounded-full bg-gray-900">
            <i id="close-modal" class="text-white" data-feather="x"></i>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <a href="{{ $data['url'] }}" class="h-10 min-w-10">
            <img src="{{ evo()->runSnippet('phpthumb', [
                'input' => $data['tv.image'],
                'options' => 'w=100,h=100,zc=1,q=100',
                'webp' => 1,
            ]) }}"
                class="h-10 w-10 object-cover" alt="" />
        </a>
        <a href="{{ $data['url'] }}" class="text-xs text-pink-600 underline">{{ $data['pagetitle'] }}</a>
        <form action="#" data-commerce-action="add" data-instance="products">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            <input type="hidden" name="count" value="1">
            <button type="submit"
                class="flex ml-auto cursor-pointer items-center justify-center rounded bg-pink-600 px-4 py-2">
                <span class="hidden text-xs text-white md:inline-block">Купить</span>
                <i data-feather="shopping-cart" class="invert md:hidden" width="14px"></i>
            </button>
        </form>

    </div>
</div>
