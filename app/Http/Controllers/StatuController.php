<?php

namespace App\Http\Controllers;

use App\Statu;
use Illuminate\Http\Request;

class StatuController extends Controller
{

    public function index()
    {
        $statu = Run::all();
        return response()->json(['data'=>$statu],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Statu::create($request->only(['description']));
        return response()->json(['Mensaje'=>'Statu creado','code'=>200],200);
    }


    public function show($id)
    {
        $statu= Statu::find($id);

        if(!$statu){
            return response()->json(['Mensaje'=>'Statu '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$statu],200);
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
