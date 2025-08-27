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
    return redirect ( '/vehicle');
   }
    public function show(vehicle $vehicle)
    {
        return view('vehicle.show', compact('vehicle'));
    }
}
