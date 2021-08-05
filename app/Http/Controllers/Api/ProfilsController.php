<?php

namespace App\Http\Controllers\Api;

use App\Models\Profils;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = Profils::all();

        return response()->json([ // yang direturn atau dikembalikan berupa json
            'success' => true, 
            'message' => 'Daftar Data Profil',
            'data' => $profils
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
            'profils'   => 'required',
            'nama'     => 'required',
            'ttl'   => 'required',
            'alamat'   => 'required',
            'jk'   => 'required'
        ]);

        $profils = Profils::create([
            'profils'     => $request->profils,
            'nama'     => $request->nama,
            'ttl'   => $request->ttl,
            'alamat'   => $required->alamat,
            'jk'   => $required->jk
        ]);

        if($profils)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'profils berhasil di tambahkan',
                    'data' => $profils
                ], 200);
            }else{
                return response()->json([
                'success' => false,
                'message' => 'profils gagal di tambahkan',
                'data' => $profils
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
        $profils = Profils::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail data profils',
            'data' => $profils
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
