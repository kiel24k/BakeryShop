@extends('user.index')
@section('page')

<section class="reserve-section">
    <div class="checkout-description">
        <h3>
            <li>{{ $product->product_name }}</li>

            <li>{{ $product->product_price }}</li>

            <li> {{ $product->product_quantity }}</li>

            <li> {{ $product->product_description }}</li>
        </h3>
    </div>
    <div class="reserve">
        <form action="{{ route('reserve.submit') }}" method="POST">
            @csrf

            <input type="hidden" name="productId" value="{{ $product->id }}">
            <input type="hidden" name="productQuan" value="{{ $product->product_quantity }}">
            <input type="hidden" name="productName" value="{{ $product->product_name  }}">
            <input type="hidden" name="amount" value="{{ $product->product_price  }}">
            @error('firstName')
            <small class="text-danger">{{ $message }}</small>
                        @enderror
            <input type="text" name="firstName" placeholder="First Name">
            @error('lastName')
            <small class="text-danger">{{ $message }}</small>
                        @enderror
            <input type="text" name="lastName" placeholder="Last Name">
            @error('contactNumber')
            <small class="text-danger">{{ $message }}</small>
                        @enderror
            <input type="text" name="contactNumber" placeholder="Contact Number">
            @error('email')
            <small class="text-danger">{{ $message }}</small>
                        @enderror
            <input type="text" name="email" placeholder="Email">
            <label for="">Place</label>
            <select name="place" id="">
                <option value="Solar Homes">Solar Homes</option>
                <option value="City Homes">City Homes</option>
            </select>
            @error('quantity')
            <small class="text-danger">{{ $message }}</small>
                        @enderror
            <label for="">Quantity</label>
            <input type="number" name="quantity" placeholder="Quantity" max="15" min="0">
            <button class="btn btn-secondary">Reserve</button>
        </form>
    </div>
</section>
@endsection
