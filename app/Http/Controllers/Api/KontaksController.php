<?php

namespace App\Http\Controllers\Api;

use App\Models\Kontaks;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontaksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontaks = Kontaks::all();

        return response()->json([ // yang direturn atau dikembalikan berupa json
            'success' => true, 
            'message' => 'Daftar Data History',
            'data' => $kontaks
        ], 200); //http status code sukses
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kontaks'   => 'required',
            'no_tlp'     => 'required',
            'email'   => 'required',
            'instagram'   => 'required',
            'facebook'   => 'required'
        ]);

        $kontaks = Kontaks::create([
            'kontaks'     => $request->kontaks,
            'no_tlp'     => $request->no_tlp,
            'email'   => $request->email,
            'instagram'   => $required->instagram,
            'facebook'   => $required->facebook
        ]);

        if($kontaks)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'kontaks berhasil di tambahkan',
                    'data' => $kontaks
                ], 200);
            }else{
                return response()->json([
                'success' => false,
                'message' => 'kontaks gagal di tambahkan',
                'data' => $kontaks
            ], 409);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontaks = Kontaks::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail data kontaks',
            'data' => $kontaks
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
