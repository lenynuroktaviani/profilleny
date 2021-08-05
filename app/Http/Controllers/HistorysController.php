<?php

namespace App\Http\Controllers;
Use App\Models\Historys;
use Illuminate\Http\Request;

class HistorysController extends Controller
{
    public function index()
    {
     $historys = Historys::orderBy('id')->paginate(5);
     
     return view ('historys.index', compact('historys'));
    }
    public function create()
    {
     
     return view ('historys.create');
    }
    public function store(Request $request)
     {
         // Validate the request...
         $request->validate([
          'sd' => 'required',
          'smp' => 'required|unique:historys|max:255',
          'sma' => 'required',
          'perguruan_tinggi' => 'required',
      ]);
 
         $historys = new Historys;
 
         $historys->sd = $request->sd;
         $historys->smp = $request->smp;
         $historys->sma = $request->sma;
         $historys->perguruan_tinggi = $request->perguruan_tinggi;
 
         $historys->save();
 
         return redirect('/');
 
    }
    public function show($id)
    {
       $history = Historys::where('id',$id)->first();
       return view('historys.show', ['history' => $history]);
    }
    public function edit($id)
    {
       $history = Historys::where('id',$id)->first();
       return view('historys.edit', ['history' => $history]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
         'sd' => 'required',
         'smp' => 'required|unique:historys|max:255',
         'sma' => 'required',
         'perguruan_tinggi' => 'required',
        ]);
   
         Historys::find($id)->update([
            'sd' => $request->sd,
            'smp' => $request->smp,
            'sma' => $request->sma,
            'perguruan_tinggi' => $request->perguruan_tinggi
         ]);
   
         return redirect ('/');
    }
    public function destroy($id)
    {
       Historys::find($id)->delete();
       return redirect ('/');
    }
}