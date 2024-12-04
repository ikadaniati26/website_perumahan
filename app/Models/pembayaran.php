<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table= 'pembayaran';
    protected $fillable = ['jenis_iuran','jumlah','bulan_bayar', 'status','create_at','update_at','Penghuni_idPenghuni'];
}
