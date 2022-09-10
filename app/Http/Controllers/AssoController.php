<?php

namespace App\Http\Controllers;

use App\Models\Asso;
use Illuminate\Http\Request;



class AssoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assos=Asso::orderBy('nom', 'asc')->paginate(10);
        return view('pages.asso', compact("assos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view("pages.asso");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"required",
            "leader"=>"required",
            "adresse"=>"required",
        ]);

        Asso::create($request->all());
        return back()->with("success", "Association creee avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asso  $asso
     * @return \Illuminate\Http\Response
     */
    public function show(Asso $asso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asso  $asso
     * @return \Illuminate\Http\Response
     */
    public function edit(Asso $asso)
    {
        return view('pages.editions.editAsso', compact('asso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asso  $asso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asso $asso)
    {
        $request->all();
        $asso->update([
            'nom'=>$request['nom'],
            'leader'=>$request['leader'],
            'adresse'=>$request['adresse'],
        ]);

        return redirect('asso')->with("success", "Modification de l'association reussie!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asso  $asso
     * @return \Illuminate\Http\Response
     */
    public function delete(Asso $asso)
    {
        $assoName = $asso->nom;
        $asso->delete();
        return back()->with("successDelete", "L'association '$assoName' supprimer avec succes!.");
    }
}
