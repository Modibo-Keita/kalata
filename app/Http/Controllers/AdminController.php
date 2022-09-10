<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Asso;
use App\Models\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        $assos = Asso::all();
        return view('pages.admin', compact('admins', 'assos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nagnana = $request->validate([
            'nom'=>['required','string','max:225'],
            'prenom'=>['required','string','max:225'],
            'adresse'=>['required','string','max:225'],
            'email'=>['required','string','email','max:50','unique:users'],
            'password'=>['required','string','min:5','confirmed'],
            'photo'=>['nullable', 'mimes:jpeg,jpg,png,gif', 'max:2048'],
        ]);

        // $filename = time().'.'.$request->file('photo')->extension();
        // $path = $request->file('photo')->storeAs('images', $filename, 'public');
        // $nagnana['photo'] = '/storage/'.$path;

            if($nagnana)
            {

                $user =  User::create(
                    [

                        'nom' => $request['nom'],
                        'prenom' => $request['prenom'],
                        'photo' => $request['photo'],
                        'email' =>$request['email'],
                        'password' => bcrypt($request['password']),
                        'asso_id' => $request['asso_id'],
                        'status' => 'admin',
                    ]

                    );

                    if($user)
                    {
                        $commissaire = Admin::create(
                            [
                                'user_id' => $user->id,
                                'asso_id' => $request['asso_id'],
                                'nom'=>$request['nom'],
                                'prenom'=>$request['prenom'],
                                'photo' => $request['photo'],
                                'adresse'=>$request['adresse'],
                                'email'=>$request['email'],
                                'password' => bcrypt($request['password']),

                            ]
                            );
                            // return redirect('dashboard');
                            return back()->with("success", "Administrateur créé avec succes");


                    }
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $assos = Asso::all();
        return view('pages.editions.editAdmin', compact('admin', 'assos'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $nagnana = $request->validate([

                'nom'=>['required','string','max:225'],
                'prenom'=>['required','string','max:225'],
                'adresse'=>['required','string','max:225'],
                'email'=>['required','string','email','max:50','unique:users'],
                'password'=>['required','string','min:5','confirmed']

            ]);

            $admin->update([
                    'asso_id' => $request['asso_id'],
                    'nom'=>$request['nom'],
                    'prenom'=>$request['prenom'],
                    'adresse'=>$request['adresse'],
                    'email'=>$request['email'],
                    'password' => bcrypt($request['password']),
                ]
                );
                // return redirect('dashboard');
                return redirect('admin')->with("success", "Modification de l'administrateur reussie!");




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function delete(Admin $admin)
    {
        $fullname = $admin->prenom." ".$admin->nom;
        $admin->delete();

        return back()->with("successDelete", "L'administrateur '$fullname' supprimer avec succes!.");
    }
}
