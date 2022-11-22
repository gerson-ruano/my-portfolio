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
        $user = User::find(Auth::id());
        
        if ($request->image)  
        
        {
          
        $fileName = $request->file('image')->hashName();
        $request->file('image')->storeAs('public', $fileName);
        $user->img_name = $fileName;
        
        };
        
        $user->name = $request->name;
        $user->description = $request->description;

        $user->save();

        return redirect()->back()->with(
            [
                'type' => '¡Actualizado!',
                'msg' =>'Tu perfil se ha actualizado correctamente'
            ]);
    }
}
