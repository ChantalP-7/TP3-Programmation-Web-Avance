<?php
namespace App\Controllers;
use App\Models\Comment;
use App\Models\Member;
use App\Models\Recipe;
use App\Providers\View;
use App\Providers\Validator;
use App\Providers\Auth;

class CommentController{

    public function index(){
        $comment = new Comment;
        $comments = $comment->select();
        $recipe = new Recipe;
        $recipes = $recipe->select();
        $member = new Member;
        $members = $member->select();
        return View::render('comment/index', ['comments'=>$comments, 'recipes' => $recipes, 'members' => $members]);    
    }

    public function show($data){
        if(isset($data['id']) && $data['id']!=null){
            $comment = new Comment;
            $selectId = $comment->selectId($data['id']);
            if($selectId){
                $idMember = $selectId['idMembre'];
                $member = new Member;
                $selectedMember = $member->selectId($idMember);
                $pseudo =  $selectedMember['pseudonyme'];

                $idRecipe = $selectId['idRecette'];
                $recipe = new Recipe;
                $selectedRecipe = $recipe->selectId($idRecipe);
                $titre =  $selectedRecipe['titre'];
                return View::render('comment/show', ['comment'=>$selectId, 'pseudonyme' => $pseudo, 'titre' => $titre]);
            }else{
                return View::render('error', ['message'=>'Commentaire pas trouvé!']);
            }

        }else{
            return View::render('error', ['message'=>'404 not found!']);
        }
    }
    
    public function create() {         
            $member = new Member;
            $members = $member->select();
            $recipe = new Recipe;
            $recipes = $recipe->select();
            return View::render('comment/create', ['members' => $members], ['recipes' => $recipes]);
    }

    public function store($data) {
        $validator = new Validator;
        $validator->field('commentaire', $data['commentaire'])->max(500)->required();
        $validator->field('etoiles', $data['etoiles']);
        $validator->field('dateCommentaire', $data['dateCommentaire'])->required();
        $validator->field('idMembre', $data['idMembre'])->required();
        if($validator->isSuccess()) {
            $comment = new Comment;
            $insertComment = $comment->insert($data);
            if($insertComment) {
                return View::redirect('comment/show?id='.$insertComment);
            } else {
                return View::render('error', ['message'=>'404 page pas trouvée!']);
            }
        }else {

            $errors = $validator->getErrors();
            print_r($errors);
        }        
        $comment = new Comment;
        $insertComment = $comment -> insert($data['commentaire'], $data['etoiles'], $data['dateCommentaire'], $data['idMembre'], $data['idRecette']);

        if($insertComment) {
            return View::redirect('comment/show?id='.$insertComment);
        } else {
            return View::render('error', ['message'=>'404 not found!']);
        }
    }    

    public function edit($data){
        Auth::session();
        if(isset($data['id']) && $data['id']!=null){
            $comment = new Comment;
            $selectId = $comment->selectId($data['id']);
            $member = new member;
            $members = $member->select();           
            $recipe = new recipe;
            $recipes = $recipe->select();           
            if($selectId){
                return View::render('comment/edit', ['comment'=>$selectId, 'members'=>$members, 'recipes'=>$recipes]);
            }else{
                return View::render('error', ['message'=>'Commentaire introuvable!']);
            }
        }else{
            return View::render('error', ['message'=>'404 Introuvable!']);
        }
    }

    public function update($data, $get){
        if(isset($get['id']) && $get['id']!=null){
            $validator = new Validator;
            $validator->field('commentaire', $data['commentaire'])->max(500)->required();
            $validator->field('etoiles', $data['etoiles']);
            $validator->field('dateCommentaire', $data['dateCommentaire'])->required();
            $validator->field('idMembre', $data['idMembre'])->required();
            if($validator->isSuccess()){
                $comment = new Recipe;
                $update = $comment->update($data, $get['id']);
                if($update){
                    return View::redirect('comments');
                }else{
                    return View::render('error', ['message'=>'Mise à jour indisponible !']);
                }
            }else{
                $errors = $validator->getErrors();
                return View::render('recipe/edit', ['errors'=>$errors, 'comment'=>$data]);
                }
        }else{
            return View::render('error', ['message'=>'404 introuvable !']);
        }
    }

    public function delete($data){
        $recipe = new Recipe;
        $delete = $recipe->delete($data['id']);
        if($delete){
            return View::redirect('comments');
        }else{
            return View::render('error', ['message'=>'404 page introuvable !']);
        }
    }
}

?>