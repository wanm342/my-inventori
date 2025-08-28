@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-header">{{ __('Vehicle Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="string" value ="{{ $vehicle->model}}" class="form-control" id="model" name="model" required>
                        </div>

                        <div class="mb-3">
                            <label for="jenama" class="form-label">Jenama</label>
                            <input type="string" value ="{{ $vehicle->jenama}}" class="form-control" id="jenama" name="jenama" required>
                        </div>

                        <div class="mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="string" value ="{{ $vehicle->warna}}" class="form-control" id="warna" name="warna" required>
                        </div>

                        <div class="mb-3">
                            <label for="plate_no" class="form-label">Plate No</label>
                            <input type="string" value ="{{ $vehicle->plate_no}}" class="form-control" id="plate_no" name="plate_no" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Vehicle</button>
                    </form> 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

      <!-- Schema::create('vehicles', function (Blueprint $table) { -->
            <!-- $table->id(); -->
            <!-- $table->string('model'); -->
            <!-- $table->string('jenama'); -->
            <!-- $table->string('warna'); -->
            <!-- $table->string('plate_no'); -->
            <!-- $table->timestamps(); -->
        <!-- }); -->