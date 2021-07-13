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
                    <a href="{{ route('home') }}">Home</a>
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
                        @php
                            $totalPrice = 0
                        @endphp
                        @foreach ($carts as $cart)
                            <tr>
                                <td style="width: 25%">
                                    @if ($cart->product->galleries)
                                        <img
                                        src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                                        alt=""
                                        class="cart-image w-100" />
                                    @endif
                                </td>
                                <td style="width: 35%">
                                    <div class="product-title">{{ $cart->product->name }}</div>
                                    <div class="product-subtitle">By {{ $cart->product->user->store_name }}</div>
                                </td>
                                <td style="width: 35%">
                                    <div class="product-title">Rp {{ number_format($cart->product->price) }}</div>
                                    <div class="product-subtitle">IDR</div>
                                </td>
                                <td style="width: 20%">
                                    <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-remove-cart">
                                            Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $totalPrice += $cart->product->price
                            @endphp
                        @endforeach
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
            <form action="{{ route('checkout') }}" id="locations" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="address_one">Address 1</label>
                        <input type="text" class="form-control" id="address_one" name="address_one" style="border-radius: 24px;" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="address_two">Address 2</label>
                        <input type="text" class="form-control" id="address_two" name="address_two" style="border-radius: 24px;" />
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="provinces_id">Province</label>
                          <select name="provinces_id" id="provinces_id" class="form-control" v-model="provinces_id" v-if="provinces" style="border-radius: 24px;">
                            <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                          </select>
                          <select v-else class="form-control"></select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="regencies_id">City</label>
                          <select name="regencies_id" id="regencies_id" class="form-control" v-model="regencies_id" v-if="regencies" style="border-radius: 24px;">
                            <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                          </select>
                          <select v-else class="form-control"></select>
                        </div>
                      </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="zip_code">Postal Code</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" style="border-radius: 24px;" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" style="border-radius: 24px;" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone_number">Phone number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" style="border-radius: 24px;" />
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
                      <div class="product-title">Rp 1000</div>
                      <div class="product-subtitle">Country Tax</div>
                    </div>
                    <div class="col-4 col-md-3">
                      <div class="product-title">Rp 10000</div>
                      <div class="product-subtitle">Product Insurance</div>
                    </div>
                    <div class="col-4 col-md-2">
                      <div class="product-title">Rp 10000</div>
                      <div class="product-subtitle">Ship to Destination</div>
                    </div>
                    <div class="col-4 col-md-2">
                      <div class="product-title text-success">Rp {{ number_format($totalPrice ?? 0) }}</div>
                      <div class="product-subtitle">Total</div>
                    </div>
                    <div class="col-8 col-md-3">
                      <button type="submit" class="btn btn-success mt-4 px-4 btn-block"> Checkout Now </button>
                    </div>
                </div>
            </form>
          </div>
        </section>
        <!-- Store cart End -->
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var locations = new Vue({
            el: "#locations",
            mounted() {
                AOS.init();
                this.getProvincesData();
            },
            data: {
                provinces: null,
                regencies: null,
                provinces_id: null,
                regencies_id: null,
            },
            methods: {
                getProvincesData() {
                    var self = this;
                    axios.get('{{ route('api-provinces') }}')
                    .then(function (response) {
                        self.provinces = response.data;
                    })
                },
                getRegenciesData() {
                    var self = this;
                    axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
                    .then(function (response) {
                        self.regencies = response.data;
                    })
                },
            },
            watch: {
                provinces_id: function (val, oldVal) {
                    this.regencies_id = null;
                    this.getRegenciesData();
                },
            }
      });
    </script>
@endpush

