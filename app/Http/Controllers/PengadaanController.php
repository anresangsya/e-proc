<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Pengadaan;
use PDF;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        $pengadaan = Pengadaan::all();

        return view('pengadaan/index', ['pengadaan' => $pengadaan,'supplier' => $supplier]);
    }

    public function tes()
    {
        return view('pengadaan/tes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        foreach( $request->nama_barang as $key=>$val){
            Pengadaan::create([
                'id_spk' => $request->id_spk,
                'nama_supplier' => $request->nama_supplier,
                'tanggal' => $request->tanggal,
                'keperluan' => $request->keperluan,
                'nama_barang' => $request->nama_barang[$key],
                'jenis_barang' => $request->jenis_barang[$key],
                'jumlah' => $request->jumlah[$key],
                'harga_satuan' => $request->harga_satuan[$key],
            ]);
        };
        return redirect()->back();



        // banyak barang gagal
        // $input = $request->all();
        // $data = [];
        // for($i=0 ; $i<2 ; $i++) {
        //  $data[]= array ('id_spk' => $input['id_spk'],
        //                  'keperluan'=>$input['keperluan'],
        //                  'nama_supplier'=>$input['nama_supplier'],
        //                  'tanggal'=>$input['tanggal'],
        //                  'id_spk'=>$input['id_spk'],
        //                  'nama_barang'=>$input[$i]['nama_barang'],
        //                  'jenis_barang'=>$input[$i]['jenis_barang'],
        //                  'jumlah'=>$input[$i]['jumlah'],
        //                  'harga_satuan'=>$input[$i]['harga_satuan']);
        // };

        
        // Pengadaan::create($data);
        // return redirect()->back();




        // 1 barang
        // $input = $request->all();

        // Pengadaan::create($input);
        // return redirect()->back();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    public function getPdf()
    {
        $pengadaan = Pengadaan::all();
        $pdf = PDF::loadView('pdf/pengadaan',compact('pengadaan'))
                    ->setPaper('a4');
     
        return $pdf->stream();
    }
}
