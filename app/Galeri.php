<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable = ['gambar'];
    public $timestamps = true;

    public function Artikel()
    {
        return $this->hasMany('App\Artikel','id_galeri');
    }
}
