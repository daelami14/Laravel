<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('produk')->get();
        $produks=[];
        foreach ($produk as $produks) 
        {
            $varis = DB::table('variasi')
            ->where('id_variasi',$produks->id_variasi)
            ->get();

            $data[] = [
                "nama_produk" => $produks->nama_produk,
                "sku" => $produks->sku,
                "brand" => $produks->brand,
                "deskripsi" => $produks->deskripsi,
                "variasi" => $varis
            ];
        }
        return response()->json([
            'Message'=>'Success',
            'data' => $data 
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'sku' => 'required',
            'brand' => 'required',
            'deskripsi' => 'required',
            'id_variasi' => 'required',
        ]);

        $result =  Produk::create([
            'nama_produk' => $request->nama_produk,
            'sku' => $request->sku,
            'brand' => $request->brand,
            'deskripsi' => $request->deskripsi,
            'id_variasi' => $request->id_variasi
        ]);

        if ($result) {
            return response()->json([
                'success' => true,
                'message' => 'Data Produk berhasil di tambah'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Produk gagal di tambah',

            ]);
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
        //
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
        $data = Produk::find($id);

        $result =  Produk::destroy($id);

        if ($result) {
            return response()->json([
                'success' => true,
                'message' => 'Data Produk berhasil di hapus'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Produk gagal di hapus',
            ]);
        }
    }
}
