<?php

<?php
namespace App\Models;
use App\Models\CRUD;

require'database.php';
class  UploadFiles extends CRUD {

    protected $table = "images";
    protected $primaryKey = "id";
    protected $fillable = ['name'];


    public function Upload(array $infoFiles){
         
        $infoFiles = current($infoFiles);
        $types = array("image/jpeg","image/jpg","image/png","image/gif");
           
        if(!in_array($infoFiles['type'], $types))
        {
            $error ="fichiers non autorisés !!!";
        }
 
        if($infoFiles['size'] > 1006143)
        {
            $error = "La taille de l'image est supperieur à la norme !!!!";        
        }
        if(!isset($error)){
             
        $uploadFile= true;
        $succes = "";
        move_uploaded_file($infoFiles["tmp_name"], 'upload/'.date("g-i-s"). $infoFiles["name"]);
            if($uploadFile == true){
                $db = Database::connect();
                $statement = $db->prepare("INSERT INTO images(name) VALUES(?)");
                $statement->execute(array($_FILES['upload']['name']));
                 
                //$statement->execute(array($infoFiles['name']));
                Database::disconnect();
        $succes =  "l\'image a ete inserer dans la base de donnees avec succes";
        echo $succes;  
            }
            else
            {
 
                echo $succes;
            }  
        }
        else
        {
            echo $error;
        }
 
    }
}
 
?>