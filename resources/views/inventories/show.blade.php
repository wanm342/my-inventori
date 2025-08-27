@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-header">{{ __('Inventory show') }}</div>

                <div class="card-body">
                 

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{$inventory->name}}" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="qty" class="form-label">Quantity</label>
                            <input type="number" value ="{{$inventory->qty}}" class="form-control" id="qty" name="qty" required>
                        </div>

                        <div class="mb-3">
                            <label for="serial_no" class="form-label">Serial No</label>
                            <input type="text" value =" {{$inventory->serial_no}}" class="form-control" id="serial_no" name="serial_no" required>
                        </div>

                        <!-- <button type="submit" class="btn btn-primary">Create Inventory</button> -->

                        <a href = "{{ route ('inventories.index')}}" class="btn btn-primary">Back to Inventory</a>
                   
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
