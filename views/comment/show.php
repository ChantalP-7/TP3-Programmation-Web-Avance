{{ include('layouts/header.php', {title: 'Membres'})}}

<div class="hero"></div> 
<h1>Bienvenue {{ pseudonyme}} !</h1>
<div class="div-un-article">
    <h2>Voici ton commentaire</h2>
    <p><strong>Recette : </strong >{{titre}}</p>
    <p><strong>Commentaire : </strong>{{ comment.commentaire }}</p>
    <p><strong>Pointage: </strong><span class="gold">{{ comment.etoiles }}</span></p>
    <p><strong>Date: </strong>{{ comment.dateCommentaire }}</p>
    <p><strong>Pseudo: </strong>{{ pseudonyme }}</p>
    <h3>Change ou supprime ton commentaire</h3>
    <div class="deux-boutons">
        <a href="{{base}}/comment/edit?id={{ comment.id }}" class="bouton">Éditer</a>
        <form class="no-border" action="{{ base }}/comment/delete" method="post">
            <input type="hidden" name="id" value="{{ comment.id }}">
            <button type="submit" class="bouton tomato">Supprimer</button>
        </form>
    </div>
    
</div>
{{ include('layouts/footer.php')}}