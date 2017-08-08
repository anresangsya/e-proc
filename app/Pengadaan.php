<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    protected $guarded = [];
    
    protected $table = 'pengadaan';

    protected $fillable = [
    'id_spk', 'nama_barang', 'jenis_barang', 'jumlah', 'harga_satuan', 'nama_supplier', 'keperluan', 'tanggal'
    ];
}
