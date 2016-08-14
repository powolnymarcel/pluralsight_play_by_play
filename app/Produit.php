<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    /**
     * Get the description records associated with the product.
     */
    public function description()
    {
        return $this->hasOne('App\Description');
    }
    /**
     * Get the product records that match the given keyword.
     */
    public function scopeWithKeyword($query, $keyword)
    {
        return $query->where('nom', 'like', '%'.$keyword.'%');
    }
}
