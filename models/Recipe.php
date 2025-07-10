<?php
namespace App\Models;
use App\Models\CRUD;

class Recipe extends CRUD {
    protected $table = "recette";
    protected $primaryKey = "id";
    protected $fillable = ['titre', 'ingredient','instruction', 'idCategorie', 'idMembre', 'dateCreation'];
} 