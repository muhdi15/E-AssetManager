<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $table = 'asset';
    protected $fillable = [
        'nama_aset',
        'jenis_aset',
        'kondisi',
        'lokasi',
        'tambahkan_oleh',
        'di_perbarui_oleh',
        'tanggal_penambahan'
    ];

    public $timestamps = false;

    // Define any relationships if necessary
}
