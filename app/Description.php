<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table = 'descriptions';

    public function produit() {
        return $this->belongsTo('App\Produit');
    }
}
