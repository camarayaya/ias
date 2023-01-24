<?php

namespace App\Http\Controllers;
use App\Models\Conducteur;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class ConducteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conducteurs= Conducteur::all();
        return view('conducteur.index', compact('conducteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicules= Vehicule::all();
        return view('conducteur.create',compact('vehicules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conducteur= new Conducteur();
        $conducteur->nom =$request->nom;
        $conducteur->prenoms =$request->prenoms;
        $conducteur->contact_perso =$request->contact_perso;
        $conducteur->nom_parent =$request->nom_parent;
        $conducteur->contact_parent =$request->contact_parent;
        $conducteur->permis_numero =$request->permis_numero;
        $conducteur->vehicule_id =$request->vehicule_id;
        $conducteur->save();
        return redirect()->route('conducteurs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
