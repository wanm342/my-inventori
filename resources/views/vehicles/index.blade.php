@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('🚗Vehicle.index') }}</div>
                
                
                <div class="card-body">
                <table class="table table-hover table-bordered table-striped align-middle text-center">   
                 
                <!-- <table class="table"> -->
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Model</th>
                                <th>Jenama</th>
                                <th>Warna</th>
                                <th>No Plate</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->model }}</td>
                                    <td>{{ $vehicle->jenama }}</td>  
                                    <td>{{ $vehicle->warna }}</td>  
                                    <td>{{ $vehicle->plate_no }}</td> 
                                    <td> <a href="{{ route('vehicles.show', $vehicle) }}" class="btn btn-success btn-sm">Show  </a>
                                    <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-primary btn-sm">Edit  </a>
                                    <a href="{{ route('vehicles.destroy', $vehicle) }}" 
                                           class="btn btn-info btn-danger"
                                           onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
