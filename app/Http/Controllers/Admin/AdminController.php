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

        $request->validate(
        
        [   'image' => ['image','required'],
            'name' => ['required', 'min:6', 'max:30'],
            'description' =>['required', 'min:47', 'max:135'],
            'demo_link' =>['url','nullable'],
            'repo_link' =>['url','nullable'],
        ]);
   
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
