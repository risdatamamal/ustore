@extends('layouts.app')

@section('title')
    UStore Cart Page
@endsection

@section('content')

    <!-- Page Content -->
    <!-- Breadcrumb -->
    <div class="page-content page-cart">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Cart</li>
                </ol>
              </div>
            </div>
          </div>
        </section>
        <!-- Breadcrumb End -->

        <!-- Store Cart -->
        <section class="store-cart">
          <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-12 table-responsive">
                <table class="table table-borderless table-cart">
                  <thead>
                    <tr>
                      <td>Image</td>
                      <td>Name &amp; Seller</td>
                      <td>Price</td>
                      <td>Menu</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="width: 25%">
                        <img src="/images/product-details-1.jpg" alt="" class="cart-image w-100" />
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">Sofa Ternyaman</div>
                        <div class="product-subtitle">by markonah</div>
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">$9999</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 20%">
                        <a href="#" class="btn btn-remove-cart">Remove</a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 25%">
                        <img src="/images/product-details-2.jpg" alt="" class="cart-image w-100" />
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">Sofa Ternyaman</div>
                        <div class="product-subtitle">by markonah</div>
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">$9999</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 20%">
                        <a href="#" class="btn btn-remove-cart">Remove</a>
                      </td>
                    </tr>
                    <tr>
                      <td style="width: 25%">
                        <img src="/images/product-details-3.jpg" alt="" class="cart-image w-100" />
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">Sofa Ternyaman</div>
                        <div class="product-subtitle">by markonah</div>
                      </td>
                      <td style="width: 35%">
                        <div class="product-title">$9999</div>
                        <div class="product-subtitle">USD</div>
                      </td>
                      <td style="width: 20%">
                        <a href="#" class="btn btn-remove-cart">Remove</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Create line -->
            <div class="row" data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-4">Shipping Details</h2>
              </div>
            </div>
            <!-- Form -->
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="addressOne">Address 1</label>
                  <input type="text" class="form-control" id="addressOne" name="addressOne" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="addressTwo">Address 2</label>
                  <input type="text" class="form-control" id="addressTwo" name="addressTwo" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="province">Province</label>
                  <select name="province" id="province" class="form-control">
                    <option value="West Java">West Java</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="city">City</label>
                  <select name="city" id="city" class="form-control">
                    <option value="tangerang">Tangerang</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="postalCode">Postal Code</label>
                  <input type="text" class="form-control" id="postalCode" name="postalCode" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control" id="country" name="country" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mobile">Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" />
                </div>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-1">Payment Information</h2>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-4 col-md-2">
                <div class="product-title">$10</div>
                <div class="product-subtitle">Country Tax</div>
              </div>
              <div class="col-4 col-md-3">
                <div class="product-title">$10</div>
                <div class="product-subtitle">Product Insurance</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title">$10</div>
                <div class="product-subtitle">Ship to Tangerang</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title text-success">$30</div>
                <div class="product-subtitle">Total</div>
              </div>
              <div class="col-8 col-md-3">
                <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block"> Checkout </a>
              </div>
            </div>
          </div>
        </section>
        <!-- Store cart End -->
    </div>

@endsection
