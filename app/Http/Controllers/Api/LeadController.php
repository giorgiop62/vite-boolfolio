<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    function store($request){
        $data = $request->all();


        return response()->json($data);
    }
}
