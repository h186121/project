<?php

namespace App\Http\Controllers;

use App\Action_plan;
use Illuminate\Http\Request;

class Action_planController extends Controller
{

    public function index()
    {
        $action_plan = Action_plan::all();
        return response()->json(['data'=>$action_plan],200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Action_plan::create($request->only(['description', 'e_date', 'status_id', 'cpis_id']));
        return response()->json(['Mensaje'=>'Action_plan creado','code'=>200],200);
    }


    public function show($id)
    {
        $action_plan= Action_plan::find($id);

        if(!$action_plan){
            return response()->json(['Mensaje'=>'Action_plan '.$id.' no existe','code'=>404],404);
        }

        return response()->json(['data'=>$action_plan],200);
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
