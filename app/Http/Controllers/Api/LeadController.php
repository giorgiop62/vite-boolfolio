<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    function store($request){
        $data = $request->all();
        $success = true;

        $validator = validator::make($data,
        [
            'name' => 'required|min:3|max255',
            'email' => 'required|min:3|max255|email',
            'text' => 'required|min:5',
        ]);

        //controllo validazione
        if($validator->fails()){
            $success = false;
            $errors = $validator->errors();
            return response()->json(compact('success','errors'));
        }

        //salvo i dati nel db
         $new_lead = new Lead();
         $new_lead->fill($data);
         $new_lead->save();

         Mail::to('"hello@example.com"')->send(new  NewContact($new_lead));


        return response()->json($data);
    }
}
