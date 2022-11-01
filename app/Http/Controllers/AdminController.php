<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestionnaire;
use App\Models\Category;
use App\Models\Produit;

class AdminController extends Controller
{
    public function admin()
    {
        $produits = Produit::latest()->get();
        $categories = Category::latest()->get();
        $gestionnaires = Gestionnaire::latest()->get(); //selection de tous les gestionnaires
        return view('back.admin', compact("gestionnaires", "categories", "produits")); //compact est une methode utilisee pour transferer une variable a une vue
    }

    public function addGestionnaire()
    {
        return view('back.addGestionnaire');
    }

    public function storeGestionnaire(Request $request) //creation d'une methode d'enregistrement du gestionnaire
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email',
            'password' => 'required|alpha_num|min:6'
        ]);

        //creation d'un tableau avec les donnees du formulaire
        $dataArray = array(
            'name' => $request->name, //ici les name du formulaire
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => $request->password
        );

        //enregistrement des donnees dans la BD
        $user = Gestionnaire::create($dataArray);
        if (!is_null($user)) {
            return redirect()->route('admin')->with("Success", "Success, Registration completed !");
        } else {
            return redirect()->route('admin')->with("Failed", "Alert ! Registration failed");
        }
    }

    public function addProduit()
    {
        $categories = Category::all();
        return view('back.addProduit', compact('categories'));
    }

    public function addCategorie()
    {
        return view('back.addCategorie');
    }

    public function storeCategorie(Request $request) //creation d'une methode d'enregistrement des categories
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:150'
        ]);

        //creation d'un tableau avec les donnees du formulaire
        $dataArray = array(
            'name' => $request->name, //ici les name du formulaire
            'description' => $request->description,
        );

        //enregistrement des donnees dans la BD
        $categorie = Category::create($dataArray);
        if (!is_null($categorie)) {
            return redirect()->route('admin')->with("Success", "Success, Registration completed !");
        } else {
            return redirect()->route('admin')->with("Failed", "Alert ! Registration failed");
        }
    }

    public function storeProduit(Request $request) //creation d'une methode d'enregistrement des categories
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:150',
            'prix' => 'required',
            'statut' => 'required',
            'image' => 'required|image',
            'categorie' => 'required',

        ]);

        //copie de la photo selectionnee dans le dossier 'public/profiles'
        $extension = $request->file('image')->extension();
        //  $file_name = $request . get('name') . '.' . $extension;
        $file_name = $request->name . '.' . $extension;
        $request->file('image')->storeAs('public/profiles', $file_name);

        //creation d'un tableau avec les donnees du formulaire
        $dataArray = array(
            'name' => $request->name, //ici les name du formulaire
            'description' => $request->description,
            'prix' => $request->prix,
            'statut' => $request->statut,
            'categorie' => $request->categorie,
            'image' => 'public/profiles/' . $file_name,
        );

        //enregistrement des donnees dans la BD
        $produit = Produit::create($dataArray);
        if (!is_null($produit)) {
            return redirect()->route('admin')->with("Success", "Success, Registration completed !");
        } else {
            return redirect()->route('admin')->with("Failed", "Alert ! Registration failed");
        }
    }
}
