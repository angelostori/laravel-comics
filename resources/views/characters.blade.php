@extends("layouts.defaultLayout")

@section("content")
<main>
    <section class="jumbotron text-center py-5">
        <button type="button" class="btn btn-primary">CURRENT SERIES</button>
    </section>

    <section>
        <div class="container">
            <div class="row g-4">
                @foreach (config('characters') as $character)
                <x-card>
                    <x-slot:thumb>{{ asset($character['thumb']) }}</x-slot:thumb>
                    <x-slot:description>{{ $character['name'] }}</x-slot:description>
                    {{ $character['name'] }}
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