<section class="banner d-flex align-items-center">
    <div class="my-container">
        <ul class="d-flex align-items-center">

            @foreach ($navElement as $item)
                <li class="d-flex align-items-center me-3">
                    <img src="{{  Vite::asset($item['img']) }}" alt="{{ $item['description'] }} logo">
                    <p class="ms-4 fw-bold">
                        {{ $item['description'] }}
                    </p>
                </li>  
            @endforeach
            

        </ul>
        
    </div>

</section>