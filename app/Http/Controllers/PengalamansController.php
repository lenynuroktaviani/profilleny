<?php

namespace App\Http\Controllers;
Use App\Models\Pengalamans;
use Illuminate\Http\Request;

class PengalamansController extends Controller
{
    public function index()
    {
     $pengalamans = Pengalamans::orderBy('id')->paginate(5);
     
     return view ('pengalamans.index', compact('pengalamans'));
    }
    public function create()
    {
     
     return view ('pengalamans.create');
    }
    public function store(Request $request)
     {
         // Validate the request...
         $request->validate([
          'kerja' => 'required',
          'usaha' => 'required',
      ]);
 
         $pengalamans = new pengalamans;
 
         $pengalamans->kerja = $request->kerja;
         $pengalamans->usaha = $request->usaha;
 
         $pengalamans->save();
 
         return redirect('/pengalamans');
 
    }
    public function show($id)
    {
       $pengalaman = Pengalamans::where('id',$id)->first();
       return view('pengalamans.show', ['pengalaman' => $pengalaman]);
    }
    public function edit($id)
    {
       $pengalaman = Pengalamans::where('id',$id)->first();
       return view('pengalamans.edit', ['pengalaman' => $pengalaman]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
         'kerja' => 'required',
         'usaha' => 'required',
        ]);
   
         Pengalamans::find($id)->update([
            'kerja' => $request->kerja,
            'usaha' => $request->usaha,
         ]);
   
         return redirect ('/');
    }
    public function destroy($id)
    {
       Pengalamans::find($id)->delete();
       return redirect ('/pengalamans');
    }
}