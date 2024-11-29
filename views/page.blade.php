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
@endsection
