<div class="swiper-slide h-auto overflow-hidden rounded-xl border-[1px] border-gray-900">
    <div class="flex items-center">
        <div class="flex h-full flex-1 items-center p-2 text-sm font-semibold">
            <p>{{ $item['title'] }}</p>
        </div>
        <div class="flex h-[20vh] flex-1 flex-grow md:h-[30vh]">
            <img src="{{ $item['thumb'] }}" class="object-cover" alt="{{ $item['title'] }}" />
        </div>
    </div>
</div>
