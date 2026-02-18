@extends("layouts.defaultLayout")

@section("content")
<main>
    <section class="jumbotron text-center py-5">
        <button type="button" class="btn btn-primary">CURRENT SERIES</button>
    </section>

    <section>
        <div class="container">
            <div class="row g-4">
                @foreach (config('comics') as $comic)
                <x-card>
                    <x-slot:thumb>{{ asset($comic['thumb']) }}</x-slot:thumb>
                    <x-slot:description>{{ $comic['description'] }}</x-slot:description>
                    {{ $comic['series'] }}
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