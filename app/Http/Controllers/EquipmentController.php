<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;

class EquipmentController extends Controller
{
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

        $equipments = Equipment::all();

        return view('equipments.index', [ 
            'equipments' => $equipments
        ]);
    }

    public function show($id) {
        return view('equipments.details', ['id' => $id]);
    }
}
