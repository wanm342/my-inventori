@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventories.index') }}</div>

                <div class="card-body">
                   <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Serial No</th>
                                <th>user</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)
                                <tr>
                                    <td>{{ $inventory->id }}</td>
                                    <td>{{ $inventory->name }}</td>
                                    <td>{{ $inventory->qty }}</td>  
                                    <td>{{ $inventory->serial_no }}</td>  
                                    <td>{{ $inventory->user->name }} - {{ $inventory->user->email }}</td>

                                    
                                    <td>
                                    @can ('view', $inventory)    
                                    <a href="{{ route('inventories.show', $inventory) }}" class="btn btn-danger btn-sm">Show Ler 
                                    </a> 
                                    @endcan

                                </td>

                                     <td> @can ('view', $inventory)  
                                        <a href="{{ route('inventories.edit', $inventory) }}" class="btn btn-danger btn-sm">Edit Ler </a> @endcan
                                    </td>

                                      <td>  @can ('view', $inventory) 
                                        <a href="{{ route('inventories.destroy', $inventory) }}" 
                                           class="btn btn-info btn-sm"
                                           onclick="return confirm('Are you sure want to delete?')">DELETE</a>@endcan</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <td> <a href="{{ route('inventories.create') }}" class="btn btn-danger btn-sm">Create Ler </a></td>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
