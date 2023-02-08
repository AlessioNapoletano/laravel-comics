<div class="container d-flex justify-content-between align-items-center py-3">

    <!--img logo -->
    <div class="logo">
        <img src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="Logo DC">
    </div>  

    <!--Navbar-->
    <nav>
        <ul class="d-flex list-unstyled">
            @foreach ($navlist as $navitem)
                <li class="fw-bold pe-4"> {{ $navitem['title'] }} </li>
            @endforeach
        </ul>
    </nav>
    
    <div class="search">
        <input class="" type="search" name="" id="" placeholder="Search">
    </div>
</div>
