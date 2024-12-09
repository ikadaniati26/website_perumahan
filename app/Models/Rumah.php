<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $table= 'penghuni';
    protected $fillable = ['idrumah','no_rumah','status','created_at','updated_at'];
}
