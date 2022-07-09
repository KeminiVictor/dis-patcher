@extends('layouts.admin')

@section('content')
    <div class="container h4 font-weight-light text-secondary my-3">
        Orders
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Tracking Number</th>
                            <th>Date</th>
                            <th>Parcel Name</th>
                            <th>Status</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->tracking_number }}</td>
                                <td>{{ Date('d M, Y', strtotime($order->created_at)) }}</td>
                                <td scope="row">{{ $order->parcel_name }}</td>
                                <td>{{ $order->status }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.edit-order',['order' => $order->id]) }}" class="btn btn-primary">Edit <i class="fa fa-pen"></i></a>
                                        <a href="{{ route('admin.delete-order',['order' => $order->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order? This action cannot be undone')">Delete <i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>



            </div>
        </div>
    </div>
@endsection
