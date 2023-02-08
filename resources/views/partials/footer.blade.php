<section class="main-footer">
    <div class="container d-flex">
        <div class="left">
            <nav class="d-flex pt-5">
                @foreach ($footerNavElement as $navElement)
                    <ul class="text-light list-unstyled me-3">
                        <h2 class="fw-bold">
                            {{ $navElement['title'] }}
                        </h2>
                        @foreach ($navElement['links'] as $link )
                        <li>
                            {{ $link }}
                        </li>
                        @endforeach
                        
                    </ul>
                @endforeach
            </nav>
        </div>
    </div>
    
    

</section>

<section class="end-footer">

</section>