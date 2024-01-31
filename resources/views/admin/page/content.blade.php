@extends('admin.index')
@section('admin')
@if(session('success'))
<h1 class="alert alert-info text-center">{{ session('success') }}</h1>
@endif
<section class="content">
    <div class="one">
       <a href="{{ route('product.list') }}" class="nav-link">
        <h1 class="text-white">Products</h1>
       </a>
        <h3>{{ $product }}</h3>
    </div>
    <div class="two">
        <h1 class="text-white">Income</h1>
        <h3>₱{{ $income }}</h3>
    </div>
    <div class="three">
        <a href="{{ route('user.list') }}" class="nav-link">
            <h1 class="text-white">Users</h1>
        </a>
        {{-- <h3>{{ $users }}</h3> --}}
        </div>


    <div class="four">
        <h1 class="text-white">Admin</h1>
    </div>
    <div class="five">
        <h1 class="text-white">17</h1>
    </div>
    <div class="six">
        <h1 class="text-white">126 </h1>
    </div>

<div class="tinapay">
    <form action="{{ route('product.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @error('name')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <input type="text" name="name" placeholder="Name">
        @error('price')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <input type="text" name="price" placeholder="Price">
        @error('quantity')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <input type="text" name="quantity" placeholder="Quantity">

        @error('description')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
       <textarea name="description" placeholder="Description" id="" cols="30" rows="10"></textarea>

       @error('image')
       <p class="alert alert-danger">{{ $message }}</p>

       @enderror
        <input type="file" name="image">
        <button class="btn btn-success">Submit</button>

    </form>
</div>

</section>

@endsection
