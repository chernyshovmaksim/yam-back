<div class="product">
    <div class="relative h-48 w-full overflow-hidden md:h-80">
        <a href="{{ $el->url }}">
            <img src="/{{ $el->thumb }}" class="h-48 w-full object-cover md:h-80" alt="{{ $el->pagetitle }}" />
        </a>
        <form action="#" data-commerce-action="add" data-instance="wishlist">
            <input type="hidden" name="id" value="{{ $el->id }}">
            <input type="hidden" name="count" value="1">
            <button type="submit"
                class="cursor-pointer absolute right-0 top-0 mr-2 mt-2 flex h-10 w-10 items-center justify-center rounded-full bg-[rgba(0,0,0,.5)]">
                <i data-feather="heart" class="text-white"></i>
            </button>
        </form>
    </div>
    <form action="#" data-commerce-action="add" class="flex items-center justify-between py-2 font-semibold">
        <input type="hidden" name="id" value="{{ $el->id }}">
        <input type="hidden" name="count" value="1">
        <span>{{ $el->price }} ₽</span>
        <button type="submit" class="flex cursor-pointer items-center justify-center rounded bg-pink-600 px-4 py-2">
            <span class="hidden text-xs text-white md:inline-block">Купить</span>
            <i data-feather="shopping-cart" class="invert md:hidden" width="14px"></i>
        </button>
    </form>
    <div class="text-xs">
        <a href="{{ $el->url }}"> {{ $el->pagetitle }} </a>
    </div>
</div>
