<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elections = Election::all();
        return view('pages.election', compact('elections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.election');
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
            "libelle"=>"required",
            "poste"=>"required",
            "debut"=>"required",
            "fin"=>"required",
            "statut"=>"required",
        ]);

        Election::create($request->all());
        return back()->with("success", "Election créée avec succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function show(Election $election)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function edit(Election $election)
    {
        return view('pages.editions.editElection', compact('election'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Election $election)
    {
        $request->all();
        $election->update([
            'libelle'=>$request['libelle'],
            'poste'=>$request['poste'],
            'debut'=>$request['debut'],
            'fin'=>$request['fin'],
            'statut'=>$request['statut'],
        ]);

        return redirect('election')->with("success", "edition de l'election reussie!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function delete(Election $election)
    {
        $electionName = $election->nom;
        $election->delete();
        return back()->with("successDelete", "'$electionName' supprimée avec succes!.");
    }
}
