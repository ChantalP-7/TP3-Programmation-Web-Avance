<?php
namespace App\Controllers;
use App\Models\Categorie;
use App\Models\Recipe;
use App\Providers\View;
use App\Providers\Validator;

class CategorieController{

    public function index(){
        $recipe = new Recipe;
        $recipes = $recipe->select();
        $categorie = new Categorie;
        $categories = $categorie->select();
        return View::render('recipe/index', ['recipes'=>$recipes], ['categorie'=>$categories]);
    }  
}

?>