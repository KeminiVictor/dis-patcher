@extends('layouts.admin')

@section('content')
    <div class="container h4 font-weight-light text-secondary my-3">
     Create a New Order
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md py-3">

                <form action="{{ route('admin.create-new-order') }}" class="card col-md-7 py-3" method="POST">

                  @csrf
                    <div class="card-body">

               

                    <div class="mb-3">
                      <label for="" class="form-label">Parcel Name</label>
                      <input type="text"
                        class="form-control" name="parcel_name" id="" aria-describedby="helpId" placeholder="" required>
                      <small id="helpId" class="form-text text-muted">Enter the name of the Parcel</small>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Parcel Image - Optional</label>
                        <input type="file"
                          class="form-control"  name="parcel_image" id="" aria-describedby="helpId" placeholder="" accept="image/*">
                        <small id="helpId" class="form-text text-muted">Upload a Photo of the Parcel</small>
                      </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Sender's Name</label>
                        <input type="text"
                          class="form-control" name="sender_name" id="" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">Enter the name of the sender</small>
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Sender's Email</label>
                        <input type="text"
                          class="form-control" name="sender_email" id="" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">Enter the Sender's email</small>
                      </div>

                      <div class="mb-3">
                        <label for="" class="form-label">Amount ($)</label>
                        <input type="number" step="any"
                          class="form-control" name="amount_paid" id="" aria-describedby="helpId" placeholder="" required>
                        <small id="helpId" class="form-text text-muted">Total Cost of the Parcel</small>
                      </div>




                      <button class="btn btn-primary my-3 float-end d-block ">Create Order</button>
                    </div>


                </form>



            </div>
        </div>
    </div>
@endsection
