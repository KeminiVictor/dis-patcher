@extends('layouts.admin')

@section('content')
    <div class="container h4 font-weight-light text-secondary my-3">
        Overview
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md">

                <div class="card-group no-border">
                    <div class="card mb-3 me-3" style="max-width: 400px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="card-image align-text-bottom  ">
                                    <i class="fas fa-box align-text-bottom mx-5 font-weight-light text-secondary"></i>
                                </div>
                            </div>
                            <div class="col-md-8 mt-4">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">Orders</h5>
                                    <p class="card-text h2 ">{{ $ordersCount }}</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card mb-3 me-3" style="max-width: 400px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="card-image align-text-bottom">
                                    <i class="fas fa-dollar align-text-bottom mx-5 font-weight-light text-secondary"></i>
                                </div>

                            </div>
                            <div class="col-md-8 mt-4">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">Deposits</h5>
                                    <p class="card-text h2 ">
                                        {{ 9}}
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
@endsection
