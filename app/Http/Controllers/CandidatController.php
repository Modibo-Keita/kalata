<?php

namespace App\Http\Controllers;

use App\Models\Asso;
use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assos = Asso::all();
        $candidats = Candidat::orderBy("nom", "asc")->paginate(10);
        return view('pages.candidat', compact('candidats', 'assos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.candidat');
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
            "prenom"=>"required",
            "adresse"=>"required",
            "asso_id"=>"required",
        ]);

        Candidat::create($request->all());
        return back()->with("success", "Candidat enregistré avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show(Candidat $candidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidat $candidat)
    {
        $assos = Asso::all();
        return view('pages.editions.editCandidat', compact('candidat', 'assos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidat $candidat)
    {
        $request->all();
        $candidat->update([
            'nom'=>$request['nom'],
            'prenom'=>$request['prenom'],
            'adresse'=>$request['adresse'],
            'asso_id'=>$request['asso_id'],
        ]);

        return redirect('candidat')->with("success", "Mise à jour du candidat reussie!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function delete(Candidat $candidat)
    {
        $fullname = $candidat->prenom.' '.$candidat->nom;
        $candidat->delete();

        return back()->with("successDelete", "Le candidat '$fullname' supprimé avec succes!.");
    }
}
