<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;
use App\Description;
use App\Http\Requests;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $productId
     * @param  Request  $request
     * @return Response
     */
    public function index($produitId, Request $request)
    {
        return Description::DuProduit($produitId)
            ->withKeyword($request->input('keyword'))
            ->paginate(15);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  int      $productId
     * @param  Request  $request
     * @return Response
     */
    public function store($produitId, Request $request)
    {
        $this->validate($request, [
            'body' => ['required'],
        ]);
        $produit = Produit::findOrFail($produitId);
        return $produit->description()->save(new Description([
            'body' => $request->input('body'),
        ]));
    }
}
