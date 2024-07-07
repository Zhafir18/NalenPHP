@extends('layout')

@section('title', 'Product')

@section('content')
<main class="product-index py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h4>Product</h4>
            </div>
        </div>

        <form method="get" action="{{ route('products.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="productName" class="form-control" placeholder="Search by name" value="{{ request('productName') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <div class="mb-4">
            <a href="{{ route('products.create') }}" class="btn btn-success">Insert</a>
        </div>

        <div class="grid-container">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <a href="{{ route('products.edit', ['product_id' => $product->product_id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('products.deletes', $product->product_id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_description }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>
                            <img src="{{ asset('images/' . $product->product_image) }}" alt="Product Image" class="img-fluid" style="max-width: 100px; height: auto;">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
