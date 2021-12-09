@extends('layouts.app')

@section('content')
<section class="ec-page-content ec-vendor-uploads ec-user-account section-space-p">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            @include('partial.sidebar')

            <div class="ec-shop-rightside col-lg-9 col-md-12">
                <div class="ec-vendor-dashboard-card ec-vendor-setting-card">
                    <div class="ec-vendor-card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="ec-vendor-dashboard-card space-bottom-30">
                                    <div class="ec-vendor-card-header">
                                        <h5>Product List</h5>
                                        <div class="ec-header-btn">
                                            <a class="btn btn-lg btn-primary" href="#">View All</a>
                                            <a class="btn btn-lg btn-primary" href="#">Add</a>
                                        </div>
                                    </div>
                                    <div class="ec-vendor-card-body">
                                        <div class="ec-vendor-card-table">
                                            <table class="table ec-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Quantity</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)
                                                    <tr>
                                                        <th scope="row"><span>{{ $product->id }}</span></th>
                                                        <td><img class="prod-img" src="/products/{{ $product->image }}" alt="product image"></td>
                                                        <td><span>{{ $product->title }}</span></td>
                                                        <td><span>${{ number_format($product->price) }}</span></td>
                                                        <td><span>{{ $product->category }}</span></td>
                                                        <td><span>{{ $product->quantity }}</span></td>

                                                    </tr>
                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End User profile section -->
@endsection
