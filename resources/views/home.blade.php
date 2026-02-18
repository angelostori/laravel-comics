@extends("layouts.defaultLayout")

@section("content")
<h1>hello world</h1>

@foreach ($comics as $comic)
<x-card>
    <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
    <x-slot:description>{{ $comic['description'] }}</x-slot:description>
    {{ $comic['series'] }}
</x-card>
@endforeach
@endsection