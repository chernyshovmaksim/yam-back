@extends('layouts.main')


@section('content')
    <section class="mt-8">
        <div class="container">
            <h2 class="text-xl font-bold">{{ $documentObject['pagetitle'] }}</h2>
        </div>
    </section>

    <section class="container mt-8 text-xs">
        {!! $documentObject['content'] !!}
    </section>

    <!-- Карта Яндекс -->
    <section class="map mt-8">
        <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A056f96a7922f693deae3c9978be35a60ec09a19a1dc4657b69e6cbe462c0b03c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false">
        </script>
    </section>
@endsection
