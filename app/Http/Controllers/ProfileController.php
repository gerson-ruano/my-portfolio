<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileEdit()

    {
        $user = Auth::user();
        return view('profileEdit', compact('user'));
    }

    public function profileUpdate(Request $request)

    {
        $messages = [
            'name.required' => 'El nombre de Usuario es obligatorio.',
            'name.min' => 'El nombre de Usuario debe tener un minimo de 4 caracteres.',
            'name.max' => 'El nombre de Usuario debe tener un maximo de 30 caracteres.',
            'profesion.required' => 'La descripción del profesion es obligatoria.',
            'profesion.min' => 'La descripción de profesion debe tener un minimo de 3 caracteres.',
            'profesion.max' => 'La descripción de profesion debe tener un maximo de 30 caracteres.',
            'description.required' => 'La descripción del Usuario es obligatoria.',
            'description.min' => 'La descripción debe tener un minimo de 47 caracteres.',
            'description.max' => 'La descripción debe tener un maximo de 137 caracteres.',
        ];
        $request->validate(

            [   //'image' => ['image','required'],
                'name' => ['required', 'min:3', 'max:30'],
                'profesion' => ['required', 'min:3', 'max:30'],
                'description' =>['required', 'min:180'],
            ], $messages);


        $user = User::find(Auth::id());

        if ($request->image)

        {

        $fileName = $request->file('image')->hashName();
        $request->file('image')->storeAs('public', $fileName);
        $user->img_name = $fileName;

        };

        $user->name = $request->name;
        $user->profesion = $request->profesion;
        $user->description = $request->description;

        $user->save();

        return redirect()->back()->with(
            [
                'type' => '¡Actualizado!',
                'msg' =>'Tu perfil se ha actualizado correctamente'
            ]);
    }
}
