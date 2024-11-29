@extends('layouts.main')

@section('content')
    <section id="cart">
        <div class="container">
            <h3 class="text-center text-xl font-light">Введите имя, email и телефон:</h3>
            <div class="flex justify-center">
                <span class="mt-2 flex w-fit rounded bg-green-300 p-2 text-center text-xs shadow md:w-1/4">
                    Специалист свяжется с вами в ближайшее время для уточнения заказа
                    и его подтверждения.
                </span>
            </div>

            {!! $form !!}
        </div>
    </section>
@endsection
