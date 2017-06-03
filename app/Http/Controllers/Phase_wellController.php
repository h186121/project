<?php

namespace App\Http\Controllers;
use App\Phase_well;
use Illuminate\Http\Request;

class Phase_wellController extends Controller
{
    public function index()
    {
        $phase_well = Phase_well::all();
        return response()->json(['data'=>$phase_well],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Phase_well::create($request->only(['phase_name']));
        return response()->json(['Mensaje'=>'Phase_well creada','code'=>200],200);
    }


    public function show($id)
    {
        $phase_well= Phase_well::find($id);

        if(!$phase_well){
            return response()->json(['Mensaje'=>'Phase_well '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$phase_well],200);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
