<?php

namespace App\Http\Controllers;

use App\Well;
use Illuminate\Http\Request;

class WellController extends Controller
{
    public function index()
    {
        $well = Well::all();
        return response()->json(['data'=>$well],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Well::create($request->only(['well_name', 'zspo']));
        return response()->json(['Mensaje'=>'Well creado','code'=>200],200);
    }


    public function show($id)
    {
        $well= Well::find($id);

        if(!$well){
            return response()->json(['Mensaje'=>'Well '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$well],200);
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
