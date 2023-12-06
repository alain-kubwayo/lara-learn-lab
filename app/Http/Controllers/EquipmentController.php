<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');  // apply to all actions
    // }

    public function index() {
        // $equipments = ['name' => 'dumbbells', 'price' => 75];
        // return view('equipments.index', $equipments);
        // $equipments = [
        //     ['name' => 'dumbbells', 'price' => 124],
        //     ['name' => 'treadmill', 'price' => 400]
        // ];

        // $name = request('name');
        // $age = request('age');

        // return view('equipments.index', [ 
        //     'equipments' => $equipments, 
        //     'name' => $name,
        //     'age' => request('age')
        // ]);

        // $equipments = Equipment::all();
        // $equipments = Equipment::orderBy('name', 'desc')->get();
        // $equipments = Equipment::where('name', 'bicycles')->get();
        $equipments = Equipment::latest()->get();

        return view('equipments.index', [ 
            'equipments' => $equipments
        ]);
    }

    public function show($id) {
        // $equipment = Equipment::find($id);
        $equipment = Equipment::findOrFail($id);
        return view('equipments.show', ['equipment' => $equipment]);
    }

    public function create() {
        return view('equipments.create');
    }

    public function store() {
        // error_log(request('name'));
        // error_log(request('category'));
        // error_log(request('price'));
        // error_log($equipment);
        // return request('additionals');

        $equipment = new Equipment();
        $equipment->name = request('name');
        $equipment->category = request('category');
        $equipment->price = request('price');
        $equipment->additionals = request('additionals');
        
        $equipment->save();

        return redirect('/')->with('message', 'Equipment created successfully!');
    }

    public function destroy($id) {
        $equipment = Equipment::findOrFail($id);
        $equipment->delete();
        return redirect('/equipments')->with('message', 'Equipment deleted successfully!');
    }
}
