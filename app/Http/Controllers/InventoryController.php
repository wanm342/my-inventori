<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
class InventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function index()
   {
    //query all inventories from table inventories using model
    $inventories = Inventory::latest()->get();

    //return to view with $inventories (resources/views/inventories/index.blades.php)
    return view('inventories.index', compact('inventories'));
   }

   public function create()

   {
    return view('inventories.create');
   }

   public function store(Request $request)
   {
    //store in the table inventories
    //POPO Plain Old PHP Object

    $inventory = new Inventory();
    $inventory ->name = $request->name;
    $inventory->qty =$request->qty;
    //$inventory->color = $request->color;
    $inventory->serial_no = $request->serial_no;
    $inventory->user_id = auth()->user()->id;
    $inventory->save();

    //return to inventory index
    return redirect ( '/inventories');
   }
   // function show
    
   public function show(Inventory $inventory)
    {
        //policy
        $this->authorize('view', $inventory);

        return view('inventories.show', compact('inventory'));
    }

    // function edit
    public function edit(Inventory $inventory)
    {
        $this->authorize('update', $inventory);
        return view('inventories.edit', compact('inventory'));
    }

    // function update

    public function update (Request $request, Inventory $inventory)
    {

        // update using model

    
        $inventory ->name = $request->name;
        $inventory ->qty =$request->qty;
    //$inventory->color = $request->color;
        $inventory->serial_no = $request->serial_no;
        $inventory->save();

     // return to inventory index

        return redirect ('/inventories');
    }
    
    // delete

    public function destroy (Inventory $inventory)
    {
    // policy delete
     $this->authorize('delete', $inventory);

     $inventory->delete();
     
     return redirect()->route('inventories.index');
       
    }
}
