@extends('layout')

@section('title', 'Home')

@section('content')
<style>
    .product-card .card {
        transition: transform 0.2s ease;
    }

    .product-card .card:hover {
        background-color: #F0F0F0;
        transform: translateY(-5px); /* Example of a slight lift effect */
    }

    .product-card .card:hover .card-body {
        color: #e3484d;
    }
</style>
<main>
    <div class="home p-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/LandingPage1.JPG') }}" class="d-block w-100" style="object-fit: cover; height: 500px; border-radius:10px;" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/LandingPage2.JPG') }}" class="d-block w-100" style="object-fit: cover; height: 500px; border-radius:10px;" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/Logo Katbag.jpg') }}" class="d-block w-100" style="object-fit: cover; height: 500px; border-radius:10px;" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="product-section mt-5 d-flex flex-column p-3" style="background-color: #D3D3D3; border-radius: 10px">
            <h2 class="text-center">Our Products</h2>
            <form method="get" action="{{ url('/home') }}" class="mb-4">
                <div class="input-group">
                    <input type="text" name="productName" class="form-control" placeholder="Search by name" value="{{ request('productName') }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn" style="background-color:#e3484d; color: white">Search</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <!-- Looping through the product data -->
                @foreach($products as $product)
                <div class="col-md-4 mb-4 product-card">
                    <div class="card" style="border-radius:10px;">
                        <img src="{{ asset('images/' . $product->product_image) }}" class="card-img-top" style="border-radius:10px; padding: 7px;" alt="{{ $product->product_name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->product_price }}</p>
                            <a href="#" class="btn" style="background-color:#e3484d; color: white">View Product</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#carouselExampleControls').carousel();
        });
    </script>
@endsection
