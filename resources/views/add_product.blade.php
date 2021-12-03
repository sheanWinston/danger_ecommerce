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
                                <div class="ec-vendor-block-profile">
                                    <form action="{{ route('product.store') }}" method="POST" >@csrf
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Price</label>
                                            <input type="number" name="price" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Quantity</label>
                                            <input type="text" name="quantity" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <input type="text" name="category" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <button class="btn btn-primary">Upload</button>
                                    </form>
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
