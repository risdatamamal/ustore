@extends('layouts.dashboard')

@section('title')
    UStore Dashboard
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Dashboard</h2>
            <p class="dashboard-subtitle">Look what you have made today</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
            <div class="col-md-4">
                <div class="card mb-2">
                <div class="card-body">
                    <div class="dashboard-card-title">Customer</div>
                    <div class="dashboard-card-subtitle">16.000</div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                <div class="card-body">
                    <div class="dashboard-card-title">Revenue</div>
                    <div class="dashboard-card-subtitle">190.321</div>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-2">
                <div class="card-body">
                    <div class="dashboard-card-title">Transaction</div>
                    <div class="dashboard-card-subtitle">22.006.001</div>
                </div>
                </div>
            </div>
            </div>
            <!-- Recent Transactions -->
            <div class="row mt-3">
            <div class="col-12 mt-2">
                <h5 class="mb-3">Recent Transactions</h5>
                <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-1.png" alt="" />
                    </div>
                    <div class="col-md-4">Black Edition Nike</div>
                    <div class="col-md-3">Atik Rizkyani</div>
                    <div class="col-md-3">30 Mei 2021</div>
                    <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-rigth.svg" alt="" />
                    </div>
                    </div>
                </div>
                </a>
                <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-2.png" alt="" />
                    </div>
                    <div class="col-md-4">Orange Bogotta</div>
                    <div class="col-md-3">Udin</div>
                    <div class="col-md-3">35 Mei 2021</div>
                    <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-rigth.svg" alt="" />
                    </div>
                    </div>
                </div>
                </a>
                <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-3.png" alt="" />
                    </div>
                    <div class="col-md-4">Sofa</div>
                    <div class="col-md-3">Ucok</div>
                    <div class="col-md-3">36 Mei 2021</div>
                    <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-rigth.svg" alt="" />
                    </div>
                    </div>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
