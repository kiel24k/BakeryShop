@extends('user.index')
@section('page')
    <section class="product">
        <div class="product-content-one">
            <div class="product-content-one-text">
                <h1>Special offer</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eaque soluta facilis neque aspernatur
                    voluptatibus quidem non, delectus eius repudiandae harum veniam aliquid facere blanditiis quas ipsa eum
                    et aut.</P>
                <button>
                    <b>Order Now</b>
                </button>
            </div>
        </div>
        <div class="product-content-two">
            <div class="try-one">
                <p>try it today</p>
                <h1>Popular shit</h1>
            </div>
            <div class="try-two">
                <div class="try-two-content-one">
                    <p>try it</p>
                    <h1>Fresh and chill</h1>
                </div>
                <div class="try-two-content-two">
                    <p>try it</p>
                    <h1>maanghang haha</h1>
                </div>
            </div>
        </div>
        <div class="product-content-three">
            <div class="product-content-three-info">
                <h1>Choose & enjoy</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni nihil recusandae id enim unde, fuga illo
                    accusantium cumque sunt soluta mollitia rem, alias laboriosam praesentium aperiam dignissimos et tempora
                    placeat.</p>
            </div>
            {{-- flex --}}
            <div class="product-content-category">
                <img src="{{ asset('assets/icon/burger.gif') }}" alt="" width="50px">
                <img src="{{ asset('assets/icon/pizza.gif') }}" alt="" width="50px">
                <img src="{{ asset('assets/icon/cupcake.gif') }}" alt="" width="50px">
                <img src="{{ asset('assets/icon/soft-drink.gif') }}" alt="" width="50px">
            </div>
        </div>
    </section>
@endsection
