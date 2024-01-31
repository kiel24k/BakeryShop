@extends('admin.index')
@section('admin')
<div class="products">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Product Description</th>
                <th>Product Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
            <tr>
                <td><img src="images/{{ $product->product_image }}" height="150px" width="150px" alt=""></td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_quantity }}</td>
                <td>{{ $product->product_description }}</td>
              <td>
                <a href="{{ route('product.download',$product->id) }}">
                    <button class="btn btn-success">Download</button>
                </a>
                <button class="btn btn-info">Update</button>
                <button class="btn btn-danger">Delete</button>
              </td>


            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
