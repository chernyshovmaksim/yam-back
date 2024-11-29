<div data-id="{{ $data['id'] }}" data-commerce-row="{{ $data['row'] }}" class="mt-4 rounded bg-gray-100 p-2">
    <div class="my-4 flex w-full items-center justify-end">
        <div class="cursor-pointer h-6 min-w-6 rounded-full bg-gray-900" data-commerce-action="remove">
            <img src="/theme/assets/svg/x.svg" alt="" class="invert">
        </div>
    </div>
    <div class="flex items-center gap-2">
        <a href="/" class="h-10 min-w-10">
            <img src="{{ evo()->runSnippet('phpthumb', [
                'input' => $data['tv.image'],
                'options' => 'w=100,h=100,zc=1,q=100',
                'webp' => 1,
            ]) }}"
                class="h-10 w-10 object-cover" alt="" />
        </a>
        <a href="/" class="text-xs text-pink-600 underline">{{ $data['pagetitle'] }}</a>
    </div>
    <div class="mt-1 rounded bg-gray-200 p-1 text-xs">
        {{ $data['price'] }}₽ X {{ $data['count'] }} = {{ $data['total'] }}₽
    </div>
    <div class="mt-2 flex justify-center">
        <div data-commerce-action="increase"
            class="flex h-10 min-w-10 cursor-pointer items-center justify-center rounded-bl rounded-tl border-[1px] bg-gray-300">
            +
        </div>
        <input type="number" name="count" value="{{ $data['count'] }}" data-commerce-action="recount"
            class="flex text-center h-10 min-w-10 items-center justify-center border-[1px] bg-gray-300">

        <div data-commerce-action="decrease"
            class="flex h-10 min-w-10 cursor-pointer items-center justify-center rounded-br rounded-tr border-[1px] bg-gray-300">
            -
        </div>
    </div>
</div>
