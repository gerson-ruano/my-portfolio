<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function adminIndex() {

        $workModel = new Work();
        $works = $workModel->getAllWorks();

        return view('adminIndex',compact('works'));

    }

    public function adminCreate() {

        return view('adminCreate');

    }

    public function adminSave(Request $request) {

        $messages = [
            'name.required' => 'El nombre del proyecto es obligatorio.',
            'name.min' => 'El nombre del proyecto debe tener un minimo de 4 caracteres.',
            'name.max' => 'El nombre del proyecto debe tener un maximo de 30 caracteres.',
            'description.required' => 'La descripción del proyecto es obligatoria.',
            'description.min' => 'La descripción del proyecto debe tener un minimo de 47 caracteres.',
            'description.max' => 'La descripción del proyecto debe tener un maximo de 137 caracteres.',
            'image.required' => 'La imagen es obligatoria.',
            'demo_link.url' => 'El enlace demo debe ser una URL válida.',
            'repo_link.url' => 'El enlace del repositorio debe ser una URL válida.',
        ];
        $request->validate(

        [   'image' => ['image','required'],
            'name' => ['required', 'min:4', 'max:30'],
            'description' =>['required', 'min:30', 'max:135'],
            'demo_link' =>['url','nullable'],
            'repo_link' =>['url','nullable'],
        ], $messages);

        $fileName = $request->file('image')->hashName();
        $request->file('image')->storeAs('public', $fileName);

        $work = new work();
        $work->img_name = $fileName;
        $work->name = $request->name;
        $work->description = $request->description;
        $work->demo_link = $request->demo_link;
        $work->repo_link = $request->repo_link;


        $work->save();

        return redirect()->route('admin.index')->with(
            [
                'type' => '¡Creado!',
                'msg' =>'Tu trabajo se ha creado correctamente'
            ]);

    }

    public function adminEdit(Work $work) {

        return view('adminEdit', compact('work'));

    }

    public function adminUpdate(Request $request, Work $work) {

        $messages = [
            'name.required' => 'El nombre del trabajo es obligatorio.',
            'name.min' => 'El nombre del proyecto debe tener un minimo de 4 caracteres.',
            'name.max' => 'El nombre del proyecto debe tener un maximo de 30 caracteres.',
            'description.required' => 'La descripción es obligatoria.',
            'description.min' => 'La descripción del proyecto debe tener un minimo de 47 caracteres.',
            'description.max' => 'La descripción del proyecto debe tener un maximo de 137 caracteres.',
            //'image.required' => 'La imagen es obligatoria.',
            'demo_link.url' => 'El enlace demo debe ser una URL válida.',
            'repo_link.url' => 'El enlace del repositorio debe ser una URL válida.',
        ];

        $request->validate(

            [   //'image' => ['image','nullable'],
                'name' => ['required', 'min:4', 'max:30'],
                'description' =>['required', 'min:47', 'max:135'],
                'demo_link' =>['url','nullable'],
                'repo_link' =>['url','nullable'],
            ], $messages);


       if ($request->image)  // By default work has a image. If file has an image upgrade it
        {

            $fileName = $request->file('image')->hashName();
            $request->file('image')->storeAs('public', $fileName);
            $work->img_name = $fileName;

        };

        $work->name = $request->name;
        $work->description = $request->description;
        $work->demo_link = $request->demo_link;
        $work->repo_link = $request->repo_link;
        $work->is_visible = $request->input('status');

        $work->save();

        return redirect()->route('admin.index')->with(
            [
                'type' => '¡Actualizado!',
                'msg' =>'Tu trabajo se ha actualizado correctamente'
            ]);

    }

    public function adminDelete(Work $work) {

        $work->delete();

        return redirect()->route('admin.index')->with(
            [
                'type' => '¡Eliminado!',
                'msg' =>'Tu trabajo se ha eliminado correctamente'
            ]);

    }
}
