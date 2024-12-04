<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    // use HasFactory;

    protected $table= 'penghuni';
    protected $fillable = ['idpenghuni','nama','foto_ktp','status_penghuni', 'no_telp','status_menikah','created_at','updated_at'];
}
