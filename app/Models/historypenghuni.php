<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class historypenghuni extends Model
{
    protected $table = 'historypenghuni';
    protected $fillable = ['idhistoryPenghuni', 'tanggal_mulai', 'tanggal_berakhir', 'Penghuni_idPeghuni', 'rumah_idrumah'];

    public function rumah()
    {
        return $this->belongsTo(Rumah::class, 'rumah_idrumah', 'idrumah');
    }

    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'Penghuni_idPenghuni', 'idpenghuni');
    }
}
