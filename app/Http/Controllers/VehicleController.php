<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function getVehicle(){
        return Vehicle::all();
    }
    public function index(){
        return view('content.add');
    }
    public function store(Request $request){
        try{
            DB::beginTransaction();
            $movie = new Vehicle();
            $movie->model =  $request->input('model');
            $movie->power = $request->input('power');
            $movie->wheels = $request->input('wheels');
            $movie->save();
            DB::commit();
            $response = ['object' => null, 'error' => false, 'message' => 'Vehicle Stored'];
        }catch (\Exception $e){
            DB::rollback();
            $response = ['object' => null, 'error' => true, 'message' => $e->getMessage()];
        }
        return $response;
    }
}
