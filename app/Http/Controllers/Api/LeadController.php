<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'name' => 'required|min:2|max:255',
                'email' => 'required|email|max:255',
                'object' => 'required|email|max:255',
                'message' => 'required|min:5',
            ],
            [
                'name.required' => 'Il nome è un campo obbligatorio',
                'name.min' => 'Il nome deve avere al minimo :min caratteri',
                'name.max' => 'Il nome deve avere al massimo :max caratteri',
                'email.required' => 'L\'email è un campo obbligatorio',
                'email.email' => 'L\'email non è formattata correttamente',
                'email.max' => 'L\'email deve avere al massimo :max caratteri',
                'object.required' => 'L\'email è un campo obbligatorio',
                'object.email' => 'L\'email non è formattata correttamente',
                'object.max' => 'L\'email deve avere al massimo :max caratteri',
                'message.required' => 'Il messaggio è un campo obbligatorio',
                'message.min' => 'Il messaggio deve avere al minimo :min caratteri',
            ]
        );

        if ($validator->fails()) {
            $success = false;
            $errors = $validator->errors();
            return response()->json(compact('success', 'errors'));
        }

        return response()->json($data);
    }
}
