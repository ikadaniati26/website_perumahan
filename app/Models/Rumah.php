<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;
    // public $timestamps = false; // Nonaktifkan timestamps

    protected $table= 'rumah';
    protected $fillable = ['idrumah','no_rumah','status','penghuni_idpenghuni','created_at','updated_at'];

    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'penghuni_idpenghuni', 'idpenghuni');
    }

    public function historyPenghuni()
    {
        return $this->hasMany(HistoryPenghuni::class, 'rumah_idrumah', 'idrumah');
    }
}
