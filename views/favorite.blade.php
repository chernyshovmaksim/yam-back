@extends('layouts.main')

@section('content')
    <!-- Заголовок -->
    <section>
        <div class="container">
            <h2 class="mt-4 text-2xl font-bold">Избранные товары:</h2>
        </div>

        <!-- Товары -->
        <section>
            <div class="container">
                {!! evo()->runSnippet('Cart', [
                    'instance' => 'wishlist',
                    'theme' => '',
                    'ownerTPL' => '@B_FILE:wishlist/page/owner',
                    'tpl' => '@B_FILE:wishlist/page/row',
                    'noneTPL' => '@B_FILE:wishlist/page/none',
                    'templatePath' => 'views/',
                    'tvList' => 'image',
                ]) !!}
            </div>
        </section>
    </section>
@endsection
