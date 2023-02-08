@extends('layouts.app')

@section('main-content')
    <section class="current-series d-flex flex-wrap">
        @foreach ($comicsList as $comic)
            <div class="card">
                <div class="image">
                    <img src="{{ $comic['thumb'] }}" alt="cover {{ $comic['title'] }}">
                </div>

                <div class="description">
                    <p class="fw-bold text-center">
                        {{ $comic['title'] }}
                    </p>
                </div>
            </div>
        @endforeach
         
    </section>   
@endsection