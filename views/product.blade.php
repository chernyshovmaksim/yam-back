@extends('layouts.main')

@section('content')
    <section id="product">
        <div id="product-container" class="container flex w-full flex-col">
            <div id="product-name">
                <h2 class="mt-4 text-xl md:text-2xl">{{ $documentObject['pagetitle'] }}</h2>
            </div>

            <div id="product-flex" class="flex flex-col sm:flex-row mt-4">
                <div class="w-full sm:w-1/4">
                    <div id="product-photos">
                        <div class="swiper" id="product-gallery">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                @if (count($images))
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <a href="/{{ $image->image }}" data-fancybox="product-gallery">
                                                <img src="/{{ $image->thumb }}" class="min-h-52 w-full object-cover"
                                                    alt="" />
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div id="product-infoblock" class="flex flex-1 flex-col md:p-2 md:pt-0">

                    <div id="product-price"
                        class="mt-4 py-2 text-center text-4xl font-black uppercase md:mt-0 md:text-left">
                        {{ $documentObject['price'] }} ₽
                    </div>
                    <div id="product-buttons" class="mt-2 flex items-center gap-2">
                        <form action="#" data-commerce-action="add" data-instance="wishlist"
                            class="flex flex-1 flex-grow">
                            <input type="hidden" name="id" value="{{ $documentObject['id'] }}">
                            <input type="hidden" name="count" value="1">
                            <button type="submit"
                                class="flex flex-1 flex-grow cursor-pointer items-center gap-1 rounded bg-gray-900 px-4 py-2 text-xs text-white">
                                <span><i data-feather="heart"></i></span>
                                <span class="flex-1 text-center">Добавить в избранное</span>
                            </button>
                        </form>

                        <form action="#" data-commerce-action="add" class="flex flex-1 flex-grow">
                            <input type="hidden" name="id" value="{{ $documentObject['id'] }}">
                            <input type="hidden" name="count" value="1">
                            <button type="submit"
                                class=" flex w-full cursor-pointer items-center rounded bg-pink-600 px-4 py-2 text-xs text-white">
                                <span><i data-feather="heart"></i></span>
                                <span class="flex-1 text-center">Добавить в корзину</span>
                            </button>
                        </form>
                    </div>
                    <div id="product-description" class="mt-2">
                        {!! $documentObject['content'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
