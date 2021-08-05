<?php

namespace App\Http\Controllers;
Use App\Models\Kontaks;
use Illuminate\Http\Request;

class KontaksController extends Controller
{
    public function index()
    {
     $kontaks = Kontaks::orderBy('id')->paginate(5);
     
     return view ('kontaks.index', compact('kontaks'));
    }
    public function create()
    {
     
     return view ('kontaks.create');
    }
    public function store(Request $request)
     {
         // Validate the request...
         $request->validate([
          'no_tlp' => 'required|numeric',
          'email' => 'required|unique:kontaks|max:255',
          'instagram' => 'required',
          'facebook' => 'required',
      ]);
 
         $kontaks = new Kontaks;
 
         $kontaks->no_tlp = $request->no_tlp;
         $kontaks->email = $request->email;
         $kontaks->instagram = $request->instagram;
         $kontaks->facebook = $request->facebook;
 
         $kontaks->save();
 
         return redirect('/');
 
    }
    public function show($id)
    {
       $kontak = Kontaks::where('id',$id)->first();
       return view('kontaks.show', ['kontak' => $kontak]);
    }
    public function edit($id)
    {
       $kontak = Kontaks::where('id',$id)->first();
       return view('kontaks.edit', ['kontak' => $kontak]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
         'no_tlp' => 'required|numeric',
         'email' => 'required|unique:kontaks|max:255',
         'instagram' => 'required',
         'facebook' => 'required',
        ]);
   
         Kontaks::find($id)->update([
            'no_tlp' => $request->no_tlp,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook
         ]);
   
         return redirect ('/');
    }
    public function destroy($id)
    {
       Kontaks::find($id)->delete();
       return redirect ('/');
    }
}