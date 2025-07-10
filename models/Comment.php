<?php
namespace App\Models;
use App\Models\CRUD;

class Comment extends CRUD {
    protected $table = "commentaire";
    protected $primaryKey = "id";
    protected $fillable = ['commentaire', 'etoiles','dateCommentaire', 'idMembre', 'idRecette'];
} 