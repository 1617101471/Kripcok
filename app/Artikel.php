<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = ['judul','id_user','id_galeri','content'];
    public $timestamps = true;

    public function galeri(){
    	return $this->belongsTo('App\Galeri','id_galeri');
    }
    public function user(){
    	return $this->belongsTo('App\User','id_user');
    }
}
