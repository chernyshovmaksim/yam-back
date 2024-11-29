@extends('layouts.main')

@section('content')
    <!-- Категории -->
    <section class="products mt-8">
        <div class="container">
            <h3 class="text-xl font-light">{{ $documentObject['pagetitle'] }}</h3>
        </div>
        <div class="container mt-4 grid grid-cols-2 gap-4 md:grid-cols-4">

            @if ($products->total > 0)
                @foreach ($products->rows as $item)
                    @include('parts.product-card', ['el' => $item])
                @endforeach
            @endif


        </div>
    </section>
@endsection
