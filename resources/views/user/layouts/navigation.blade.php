<nav id="navbar">
    {{-- flex --}}
    <div class="links">
        <div class="nav-title">
            <h1>Title</h1>
        </div>
        <div class="nav-page">
            <ul class="nav navbar">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">home</a>
                </li>

                <li class="nav-item">
                    <a href="{{route('products')}}" class="nav-link">products</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">about us</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">contacts</a>
                </li>
            </ul>
        </div>
        <div class="nav-action">
            <img src="{{ asset('assets/icon/basket.png') }}" alt="">
        </div>
    </div>
   
</nav>
