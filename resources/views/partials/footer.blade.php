<section class="main-footer">
    <div class="left">
        <nav>
            @foreach ($footerNavElement as $navElement)
                <ul class="text-light">
                    <h2>
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
       
    <div class="right"></div>

</section>

<section class="end-footer">

</section>