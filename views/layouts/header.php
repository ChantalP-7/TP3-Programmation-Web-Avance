<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{ asset }}css/style.php">
</head>
<header>
    <h1 class="titre">Les adeptes de la Food Vegan</h1>
    
    <nav>
        <ul>
            <li><a href="{{base}}/recipes">Recettes</a></li>
            <li><a href="{{base}}/comments">Commentaires</a></li>
            {% if session.idRole == 2 %}
            <li><a href="{{base}}/members">Tous les membres Membres</a></li>
            <li><a href="{{base}}/member/create">Inscription membres</a></li>
            {% endif %}
        </ul>
        <ul>
            {% if session.idRole == 1 %}
            <li><a href="{{base}}/user/create">Inscription utilisateur</a></li>
            {% endif %}
            {% if session.idRole == 2 %}   
            <li><a href="{{base}}/users">Voir les utilisateurs à inscrire</a></li>
            {% endif %}
        </ul> 
        <ul>
            {% if guest %}
            <li><a href="{{base}}/login">Connexion</a></li>
            {% else %}
            <li><a href="{{base}}/logout">Déconnexion</a></li>
             {% endif %}
        </ul>
    </nav>      
</header>
<main>