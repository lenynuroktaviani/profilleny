<?php

namespace App\Http\Controllers\Api;

use App\Models\Historys;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historys = Historys::all();

        return response()->json([ // yang direturn atau dikembalikan berupa json
            'success' => true, 
            'message' => 'Daftar Data Absensi',
            'data' => $historys
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
            'historys'   => 'required',
            'sd'     => 'required',
            'smp'   => 'required',
            'sma'   => 'required',
            'perguruan_tinggi'   => 'required'
        ]);

        $historys = Historys::create([
            'historys'     => $request->historys,
            'sd'     => $request->sd,
            'smp'   => $request->smp,
            'sma'   => $required->sma,
            'perguruan_tinggi'   => $required->perguruan_tinggi
        ]);

        if($historys)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'historys berhasil di tambahkan',
                    'data' => $historys
                ], 200);
            }else{
                return response()->json([
                'success' => false,
                'message' => 'historys gagal di tambahkan',
                'data' => $historys
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
        $historys = Historys::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail data historys',
            'data' => $historys
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
