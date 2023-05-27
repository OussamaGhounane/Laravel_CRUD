<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function category()
    {
        return view('pages.category');
    }

    public function liste()
    {
        $listes = Category::all();
        return view('pages.liste', compact('listes'));
    }

    public function PostCategory(Request $request)
    {
        // dd($request);
        // dd($request->category);

        $request->validate([
            'name' => 'required|min:3'
        ]);
        // insert data into categories table

        $cat = new Category();

        $cat->name = $request->name;
        $cat->save();

        flashy()->success("la Categorie bien enregistrer !");
        return redirect()->route('index');
    }




    public function edit_categorie($id)
    {
        $category = Category::find($id);
        return view('pages.edit_categorie', compact('category'));
    }

    public function update_categorie(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|min:3'
        ]);

        $category = Category::findOrFail($id);

        $category->name = $request->name;
        $category->save();

        flashy()->success("le category bien modifier !");
        return redirect()->route('liste');
    }


    public function delete_category($id)
    {
        Category::destroy($id);
        // flashy
        flashy()->success("La catégorie a été supprimée avec succès");
        return redirect()->route('liste');
    }
}
