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