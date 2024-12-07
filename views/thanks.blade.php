@extends('layouts.main')

@section('content')
    <!-- Страница "Спасибо за заказ" -->
    <section class="mt-4">
        <div class="container mx-auto flex-col items-center">
            <h1 class="text-center text-2xl font-bold">Спасибо за заказ!</h1>
            <p>
                Флорист свяжется с вами в ближайшее время для уточнения деталей
                заказа.
            </p>
            <p class="text-xs">
                Дополнительную информацию вы можете уточнить по телефону:
                <a class="text-pink-600 underline"
                    href="tel:{{ evo()->getConfig('client_phone_raw') }}">{{ evo()->getConfig('client_phone_display') }}</a>
            </p>
        </div>
    </section>
@endsection
