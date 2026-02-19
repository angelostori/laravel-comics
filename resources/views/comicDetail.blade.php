@extends('layouts.defaultLayout')

@section('content')
<div class="vw-100 py-5 detail-container">

    <div class="container">
        <h1>{{ $comic['series'] }}</h1>

        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">

        <p>{{ $comic['description'] }}</p>
        <p><strong>Prezzo:</strong> {{ $comic['price'] }}</p>
        <p><strong>Data:</strong> {{ $comic['sale_date'] }}</p>
        <p><strong>Tipo:</strong> {{ $comic['type'] }}</p>
    </div>

</div>
@endsection