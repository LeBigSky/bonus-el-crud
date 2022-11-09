<?php

namespace App\Http\Controllers;

use App\Models\Boisson;
use Illuminate\Http\Request;

class BoissonController extends Controller
{
    public function store (Request $request) {
        $store= new Boisson();
        $store->nom = $request->nom;
        $store->prix = $request->prix;
        $store->save();
        return redirect("show/".$store['id']);
    }
    public function home (){
        $Boissons= Boisson::all();
        return view('home', compact('Boissons'));
    }
    public function show ($id){
        $Boisson= Boisson::find($id);
        return view ('pages.show', compact('Boisson'));
    }
    public function delete ($id){
        $item= Boisson::find($id);
        $item->delete();
        return redirect('/');
    }
    public function create (){
        return view ('pages.create');
    }
    public function edit ($id){
        $edit= Boisson::find($id);
        return view('pages.edit', compact('edit'));
    }
    public function update (Request $request, $id){
        $update= Boisson::find($id);
        $update->nom= $request->nom;
        $update->prix= $request->prix;
        $update->save();
        return redirect('/');

    }
}
