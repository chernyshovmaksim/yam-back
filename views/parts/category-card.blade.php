<div class="product">
    <div class="relative w-full overflow-hidden ">
        <a href="{{ $el->url }}">
            <img src="{{ $el->thumb }}" class="h-48 md:h-80 object-cover" alt="{{ $el->pagetitle }}" />
        </a>
    </div>
    <div class="text-sm">
        <a href="{{ $el->url }}">{{ $el->pagetitle }}</a>
    </div>
</div>
