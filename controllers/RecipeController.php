<?php

namespace App\Controllers;
use App\Models\Recipe;
use App\Models\Categorie;
use App\Models\Member;
use App\Models\Comment;
use App\Models\User;
use App\Models\Role;
use App\Providers\Auth;
use App\Providers\View;
use App\Providers\Validator;

class RecipeController {
    public function __construct(){
        Auth::session();
        //Auth::role(3);
    }

    public function index(){
        $recipe = new Recipe;
        $recipes = $recipe->select();
        $member = new Member;
        $members = $member->select();
        $categorie = new Categorie;
        $categories = $categorie->select();
        return View::render('recipe/index', ['recipes'=>$recipes], ['members'=>$members], ['categorie'=>$categories]);
    }

    public function show($data){
        if(isset($data['id']) && $data['id']!=null){
            $recipe = new Recipe;
            $selectId = $recipe->selectId($data['id']);
            if($selectId){
            /* Sélection pour les commentaires */
                $comment = new Comment;
                $comments = $comment->select();
                $recipe = new Recipe;
                $recipes = $recipe->select();
                $member = new Member;
                $members = $member->select();

            /* Sélection pour la recette */
                $idCategorie = $selectId['idCategorie'];
                $categorie = new Categorie;
                $selectedCategorie = $categorie->selectId($idCategorie);
                $categorie =  $selectedCategorie['categorie'];
                $idMembre = $selectId['idMembre'];
                $member = new Member;
                $selectedMember = $member->selectId($idMembre);
                $prenom =  $selectedMember['prenom'];
                $nom =  $selectedMember['nom'];

                return View::render('recipe/show', ['recipe'=>$selectId, 'categorie' => $categorie, 'prenom' => $prenom,  'nom' => $nom,'comments'=>$comments, 'recipes' => $recipes, 'members' => $members ]);
            }else{
                return View::render('error', ['message'=>'Recette introuvable!']);
            }
        }else{
            return View::render('error', ['message'=>'404 introuvable!']);
        }
    }

    public function create(){
        Auth::session();
       
        $member = new Member;
        $members = $member->select();
        $categorie = new Categorie;
        $categories = $categorie->select(); 
        return View::render('recipe/create', ['members' => $members,'categories' => $categories]);
    }

    public function store($data){
        Auth::session();
        $validator = new Validator; 
        $member = new Member;
        $validator->field('titre',$data['titre'])->min(2)->max(45)->required();
        $validator->field('ingredient',$data['ingredient'])->max(1000)->required();
        $validator->field('instruction',$data['instruction'])->max(1000);
        $validator->field('idCategorie',$data['idCategorie'], 'categorie')->required();
        $validator->field('idMembre',$data['idMembre'], 'idMembre')->required();
        $validator->field('dateCreation',$data['dateCreation'])->max(20)->required();

        if($validator->isSuccess()){

            $recipe = new Recipe;
            $insertRecipe = $recipe->insert($data);
            
            if( $insertRecipe){
                return View::redirect('recipe/show?id='.$insertRecipe);
            }else{
                return View::render('error', ['message'=>'404 introuvable']);
            }
        }else{
            //Le retour des erreurs
            $errors = $validator->getErrors();
            $categorie = new Categorie;
            $categories = $categorie->select();
            $member = new Member;
            $members = $member->select();
            return View::render('recipe/create', ['errors'=>$errors, 'recipe'=>$data, 'categories' => $categories/*,  'members' => $members*/]);
        }   
    }

    public function edit($data){
        Auth::session();
        if(isset($data['id']) && $data['id']!=null){
            $recipe = new Recipe;
            $selectId = $recipe->selectId($data['id']);
            $categorie = new Categorie;
            $categories = $categorie->select();
            if($selectId){
                return View::render('recipe/edit', ['recipe'=>$selectId, 'categories' => $categories ]);
            }else{
                return View::render('error', ['message'=>'Recette introuvable!']);
            }
        }else{
            return View::render('error', ['message'=>'404 Introuvable!']);
        }
    }

    public function update($data, $get){
        Auth::session();
        if(isset($get['id']) && $get['id']!=null){
            $validator = new Validator;
            $validator->field('titre',$data['titre'])->min(5)->max(45);
            $validator->field('instruction',$data['instruction'])->max(1000);
            $validator->field('ingredient',$data['ingredient'])->max(1000);
            $validator->field('categorie',$data['categorie'], 'categorie');
            $validator->field('dateCreation',$data['dateCreation'])->max(20)->required();
            $validator->field('idMembre',$data['idMembre'])->required();

            if($validator->isSuccess()){
                $recipe = new Recipe;
                $update = $recipe->update($data, $get['id']);
                if($update){
                    return View::redirect('recipes');
                }else{
                    return View::render('error', ['message'=>'Mise à jour indisponible !']);
                }
            }else{
                $errors = $validator->getErrors();
                $categorie = new Categorie;
                $categories = $categorie->select();

                return View::render('recipe/edit', ['errors'=>$errors, 'recipe'=>$data, 'categories' => $categories]);
                }
        }else{
            return View::render('error', ['message'=>'404 introuvable !']);
        }
    }
    
    public function delete($data){
        Auth::session();
        $recipe = new Recipe;
        $delete = $recipe->delete($data['id']);
        if($delete){
            return View::redirect('recipes');
        }else{
            return View::render('error', ['message'=>'404 page introuvable !']);
        }
    }
}

?>