<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';

    public function description(){
        return $this->hasOne('App\Description');
    }


}
