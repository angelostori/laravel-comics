@extends("layouts.defaultLayout")

@section("content")
<main>
    <section class="jumbotron text-center py-5">
        <button type="button" class="btn btn-primary">CURRENT SERIES</button>
    </section>

    <section>
        <div class="container">
            <div class="row g-4">
                @foreach(config('comics') as $index => $comic)
                <x-card>
                    <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
                    <x-slot:description>{{ $comic['description'] }}</x-slot:description>
                    {{ $comic['series'] }}

                    <!-- Link alla pagina dettaglio -->
                    <a class="btn btn-primary d-block" href="{{ route('comic.show', ['id' => $index]) }}">Dettaglio</a>
                </x-card>
                @endforeach
            </div>

            <div class="text-center my-4">
                <button type="button" class="btn btn-primary">LOAD MORE</button>
            </div>
        </div>
    </section>
</main>
@endsection