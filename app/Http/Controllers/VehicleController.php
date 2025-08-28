<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
class VehicleController extends Controller
{
    public function index()
   {
    //query all inventories from table inventories using model
    $vehicles = Vehicle::all();

    //return to view with $inventories (resources/views/inventories/index.blades.php)
    return view('vehicles.index', compact('vehicles'));
   }
//function create
    public function create()

   {
    return view('vehicles.create');
   }

   public function store(Request $request)
   {
    //store in the table vehicles
    //POPO Plain Old PHP Object

    $vehicle = new Vehicle();
    $vehicle ->model = $request->model;
    $vehicle ->jenama =$request->jenama;
    $vehicle ->warna = $request->warna;
    $vehicle ->plate_no = $request->plate_no;
    //$inventory->serial_no = $request->serial_no;
    $vehicle->save();

    //return to inventory index
    return redirect ( 'vehicles');
   }

    public function show(vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    
    // function edit
    public function edit(vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    //function update

    public function update (Request $request, vehicle $vehicle)
    {

        // update using model
    
        $vehicle->model = $request->model;
        $vehicle->jenama =$request->jenama;
        $vehicle->warna = $request->warna;
        $vehicle->plate_no = $request->plate_no;
        $vehicle->save();

     // return to vehicle index

        return redirect ('/vehicles');
    }
    // func delete 

     public function destroy (vehicle $vehicle)
    {
     $vehicle->delete();
     
     return redirect()->route('vehicles.index');
       
    }
}
