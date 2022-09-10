<?php

namespace App\Http\Controllers;

use App\Models\Asso;
use App\Models\Utilisateur;
use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assos = Asso::all();
        $utilisateurs = Utilisateur::all();
        return view('pages.electeur', compact('utilisateurs', 'assos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.electeur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  ajouter comme admin
    public function store(Request $request)
    {
        $nagnana = $request->validate(
            [

                'nom'=>['required','string','max:225'],
                'prenom'=>['required','string','max:225'],
                'adresse'=>['required','string','max:225'],
                'email'=>['required','string','email','max:50','unique:users'],
                'password'=>['required','string','min:5','confirmed']

            ]
            );

            if($nagnana)
            {
                $user =  User::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'email' =>$request['email'],
                        'password' => bcrypt($request['password']),
                        'status' => 'admin',
                    ]

                    );

                    if($user)
                    {
                        $commissaire = Utilisateur::create(
                            [
                                'user_id' => $user->id,
                                'nom'=>$request['nom'],
                                'prenom'=>$request['prenom'],                                'adresse'=>$request['adresse'],
                                'email'=>$request['email'],
                                'password' => bcrypt($request['password']),

                            ]
                            );
                            // return redirect('dashboard');
                            return back()->with("success", "Electeur enregistré avec succes");


                    }
                }
     }


    //  ajouter electeur

    public function storelecteur(Request $request)
    {
        $nagnana = $request->validate(
            [

                'nom'=>['required','string','max:225'],
                'prenom'=>['required','string','max:225'],
                'adresse'=>['required','string','max:225'],
                'email'=>['required','string','email','max:50','unique:users'],
                'password'=>['required','string','min:5','confirmed'],

            ]
            );

            if($nagnana)
            {
                $user =  User::create(
                    [
                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'asso_id' => $request['asso_id'],
                        'adresse' => $request['adresse'],
                        'email' =>$request['email'],
                        'password' => bcrypt($request['password']),
                        'status' => 'electeur',
                    ]

                    );

                    if($user)
                    {
                        $commissaire = Utilisateur::create(
                            [
                                'user_id' => $user->id,
                                'nom'=>$request['nom'],
                                'prenom'=>$request['prenom'],                                'adresse'=>$request['adresse'],
                                'asso_id'=>$request['asso_id'],
                                'email'=>$request['email'],
                                'password' => bcrypt($request['password']),

                            ]
                            );
                            // return redirect('dashboard');
                            return back()->with("success", "electeur créé avec succes");


                    }
                }
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        $assos = Asso::all();
        return view('pages.editions.editElecteur', compact('utilisateur', 'assos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {

        $request->all();
        $utilisateur->update([
            'nom'=>$request['nom'],
            'prenom'=>$request['prenom'],
            'adresse'=>$request['adresse'],
            'email'=>$request['email'],
            // 'user_id'=>$request['user_id'],
            'asso_id'=>$request['asso_id'],
        ]);

        return redirect('electeur')->with("success", "Mis à jour de l'electeur reussie!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function delete(Utilisateur $utilisateur)
    {
        $fullname = $utilisateur->prenom.' '.$utilisateur->nom;
        $utilisateur->delete();
        return back()->with("successDelete", "L'electeur '$fullname' supprimé avec succes!.");
    }
}
