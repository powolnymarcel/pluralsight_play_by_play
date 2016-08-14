<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $table = 'descriptions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['body'];
    /**
     * Get the product record associated with the description.
     */
    public function produit()
    {
        return $this->belongsTo('App\Produit');
    }
    /**
     * Get the description records associated with the given product id.
     */
    public function scopeDuProduit($query, $productId)
    {
        return $query->where('produit_id', $productId);
    }
    /**
     * Get the description records that match the given keyword.
     */
    public function scopeWithKeyword($query, $keyword)
    {
        return $query->where('body', 'like', '%'.$keyword.'%');
    }
}
