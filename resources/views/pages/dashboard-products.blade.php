@extends('layouts.dashboard')

@section('title')
    UStore Dashboard Product
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">My Product</h2>
            <p class="dashboard-subtitle">Manage it well and get money</p>
          </div>
          <div class="dashboard-content">
            <!-- Button -->
            <div class="row">
              <div class="col-12">
                <a href="{{ route('dashboard-products-create') }}" class="btn btn-success">Add new product</a>
              </div>
            </div>
            <!-- Content -->
            <div class="row mt-4">
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-products.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                    <div class="product-title">Monkey Toys</div>
                    <div class="product-category">Baby</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-products.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                    <div class="product-title">Monkey Toys</div>
                    <div class="product-category">Baby</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-products.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                    <div class="product-title">Monkey Toys</div>
                    <div class="product-category">Baby</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-products.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                    <div class="product-title">Monkey Toys</div>
                    <div class="product-category">Baby</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/dashboard-products.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2" />
                    <div class="product-title">Monkey Toys</div>
                    <div class="product-category">Baby</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
