@extends('layouts.app')

@section('main-content')
    <section class="current-series my-container d-flex flex-wrap">
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
         

        <div class="button">
            <button class="my-button">
                LOAD MORE
            </button>
        </div>
    </section>   


    <section class="banner d-flex align-items-center">
        <div class="my-container">
            <ul class="d-flex align-items-center">
                <li class="d-flex align-items-center me-3">
                    <img src="{{  Vite::asset('resources/assets/img/buy-comics-digital-comics.png') }}" alt="digital comics logo">
                    <p class="ms-4 fw-bold">
                        DIGITAL COMICS
                    </p>
                </li>

                <li class="d-flex align-items-center">
                    <img src="{{  Vite::asset('resources/assets/img/buy-comics-digital-comics.png') }}" alt="digital comics logo">
                    <p class="ms-4 fw-bold">
                        DIGITAL COMICS
                    </p>
                </li>

                <li class="d-flex align-items-center">
                    <img src="{{  Vite::asset('resources/assets/img/buy-comics-digital-comics.png') }}" alt="digital comics logo">
                    <p class="ms-4 fw-bold">
                        DIGITAL COMICS
                    </p>
                </li>

                <li class="d-flex align-items-center">
                    <img src="{{  Vite::asset('resources/assets/img/buy-comics-digital-comics.png') }}" alt="digital comics logo">
                    <p class="ms-4 fw-bold">
                        DIGITAL COMICS
                    </p>
                </li>

                <li class="d-flex align-items-center">
                    <img src="{{  Vite::asset('resources/assets/img/buy-comics-digital-comics.png') }}" alt="digital comics logo">
                    <p class="ms-4 fw-bold">
                        DIGITAL COMICS
                    </p>
                </li>
            </ul>
            
        </div>

    </section>
@endsection