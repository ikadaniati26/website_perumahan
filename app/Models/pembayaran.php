<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table= 'pembayaran';
    protected $fillable = ['idPembayaran','jenis_iuran','jumlah','bulan_bayar', 'status','create_at','update_at','penghuni_idpenghuni'];

    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class,'penghuni_idpenghuni','idpenghuni');
    }
}
