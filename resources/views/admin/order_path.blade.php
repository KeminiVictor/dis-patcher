@extends('layouts.admin')

@section('content')
    <div class="container h4 font-weight-light text-secondary my-3">
        Enter Path for the Parcel <span class="text-dark">{{ $order->parcel_name }}</span>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="tracking-num my-4">
                    Tracking Number : {{ $order->tracking_number }}
                </div>

                <div class="col-md-6 position-relative overflow-hidden">
                    <div class="line"></div>


                    {{-- Package departure --}}
                    <form class="mb-3 delivery-point-from col" action="{{ route('admin.edit-delivery-point') }}" method="POST">
                        @csrf
                        <div class="label fw-bold">FROM</div>

                        <div class="card bg-white">
                            <div class="card-body">
                                <input type="hidden" name="type" value="FROM">
                                <input type="hidden" name="point_id" value="{{ $order->from()->id }}">
                                <label for="" class="my-1 text-secondary">Set Pickup Location</label>
                                <div class="mb-1">
                                    <input type="text" class="form-control text-dark" name="location"
                                        placeholder="Enter Location" value="{{ $order->from()->location }}">
                                </div>


                                <button class="btn btn-sm btn-primary my-1">Save</button>
                            </div>

                        </div>

                     
                    </form>


                      {{-- delivery stops here --}}

                    <div class="stops ms-4">
                        {{-- List all stops --}}
                        @foreach ($order->stops() as  $stop)
                        <form class="mb-3 delivery-point-stop col" action="{{ route('admin.edit-delivery-point') }}" method="POST">
                            @csrf
                            <div class="label">STOP LOCATION</div>
    
                            <div class="card bg-white">
                                <div class="card-body">
                                    <input type="hidden" name="type" value="STOP">
                                    <input type="hidden" name="point_id" value="{{ $stop->id }}">
                                    <label for="" class="my-1 text-secondary">Set Pickup Location</label>
                                    <div class="mb-1">
                                        <input type="text" class="form-control text-dark" name="location"
                                            placeholder="Enter Location" value="{{ $stop->location }}">
                                    </div>
    
                                    <a class="btn btn-sm btn-danger my-1" href="{{ route('admin.delete-delivery-point',['point_id'=> $stop->id]) }}" onclick="return confirm('Are you sure you want to delete this stop?')"><i class="fa fa-trash"></i></a>
                                    <button class="btn btn-sm btn-primary my-1">Save</button>
                                </div>
    
                            </div>
    
                         
                        </form>
                        @endforeach

                        {{-- add a stop --}}
                        <form class="mb-3 delivery-point-form col" action="{{ route('admin.new-delivery-point') }}" method="POST">
                            @csrf
                            <div class="label">Add Stop</div>
    
                            <div class="card bg-white">
                                <div class="card-body">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <label for="" class="my-1 text-secondary">Set Stop Location</label>
                                    <div class="mb-1">
                                        <input type="text" class="form-control text-dark" name="location"
                                            placeholder="Enter Location" value="">
                                    </div>
    
    
                                    <button class="btn btn-sm btn-warning my-1">Add Stop</button>
                                </div>
    
                            </div>
                        </form>

                    </div>
                    {{-- delivery stops here --}}


                    <div class="stop-btn col">
                        <button type="button" class="btn btn-secondary ms-auto d-block" onclick="addStop()">Add Stop</button>
                    </div>

                      {{-- Package Destination--}}
                    <form class=" delivery-point-to col" action="{{ route('admin.edit-delivery-point') }}" method="POST">

                        @csrf
                        <div class="label fw-bold">TO</div>

                        <div class="card bg-white">
                            <div class="card-body">
                                <input type="hidden" name="type" value="TO">     
                                 <input type="hidden" name="point_id" value="{{ $order->to()->id }}">
                                <label for="" class="my-1 text-secondary">Set Pickup Location</label>
                                <div class="mb-1">
                                    <input type="text" class="form-control" name="location" placeholder="Enter Location" value="{{ $order->to()->location }}">
                                </div>
                                <button class="btn btn-sm btn-primary my-1">Save</button>
                            </div>
                        </div>
              
                    </form>
                </div>


            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>
@endsection
