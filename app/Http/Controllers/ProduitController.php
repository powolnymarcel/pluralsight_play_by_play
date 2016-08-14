<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Http\Requests;

class ProduitController extends Controller
{
    /**
     * Affiche une liste
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return Produit::withKeyword($request->input('keyword'))
            ->paginate(15);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|unique:produits|validateurCustom',
        ]);
        return Produit::create([
            'nom' => $request->input('nom')
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required|unique:produits|validateurCustom',
        ]);
        $product = Product::findOrFail($id);
        $product->update([
            'nom' => $request->input('nom')
        ]);
        return $product;
    }
}
