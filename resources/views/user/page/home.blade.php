@extends('user.index')
@section('page')
    <div class="homes">
        <section class="nav-content">
            <div class="nav-info">
                <h1>traditional</h1>
                <h1>artisan bakery</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos sit aspernatur qui iure, odit nam
                    optio
                    quae quod porro pariatur quasi, consectetur inventore quibusdam. Quo, obcaecati inventore! Est, deserunt
                    recusandae!</p>
                <button><b>
                        Shop Now</b></button>
            </div>
            <div class="nav-location">
                <span>
                    <img src="{{ asset('assets/icon/location.png') }}" alt="">
                    <b>Dasmarinas, Cavite Phillippines</b>
                </span>
            </div>
        </section>
        <section class="home">
            <div class="home-section-info">
                <div class="home-section-category">
                    <small>filter by:</small>
                    <ul>
                        <li>
                            <a href="">
                                <p>Daily items</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>pastry</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <p>specially</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="home-section-title">
                    <h1>CUSTOMER</h1>
                    <h1>FAVOURITES</h1>
                </div>
                <div class="home-section-notification">
                    <small>
                        <p>all orders for tuesday</p>
                        <p>pick up must be placed</p>
                        <p> by 8pm sunday evening</p>
                    </small>

                </div>

            </div>
            <div class="home-items">
                @foreach ($items as $item )
                <div class="item-main">
                    <div class="item-image">
                        <img src="images/{{ $item->product_image }}" alt="" width="250px" height="250px">
                    </div>
                    <div class="item-info">
                        <img src="{{ asset('assets/icon/info.png') }}" alt="" width="25px">
                    </div>
                    <div class="item-price-info">
                        <p>${{ $item->product_price }}</p>
                        <p>{{ $item->product_quantity }}/pcs</p>
                    </div>
                    <div class="item-name-add">
                        <h5>{{ $item->product_name }}</h5>
                        <a href="{{ route('checkout', $item->id) }}">
                            <button><b>View</b></button>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="home-sample">
                <button><b>View All</b></button>
            </div>

        </section>
    </div>
@endsection
