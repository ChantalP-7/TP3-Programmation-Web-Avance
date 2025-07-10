{{ include('layouts/header.php', {title: 'Commentaires'})}}

    <div class="hero"></div> 
    <div>
        <h2 class="center">Mise à jour du commentaire</h2>
        <form class="medium" method="post">
        <label for="commentaire">Commentaire</label>
            <textarea  name="commentaire" id="commentaire" >{{commentaire.commentaire}}</textarea>
        {% if errors.commentaire is defined %}
            <span class="error">{{errors.commentaire}}</span>
        {% endif %}
        <label for="etoiles">Pointage
            <input type="text" name="etoiles" id="etoiles" value="{{commentaire.etoiles}}">
        </label>
        {% if errors.etoiles is defined %}
            <span class="error">{{errors.etoiles}}</span>
        {% endif %}
        <label for="dateCommentaire">Date
            <input type="date" name="dateCommentaire" id="dateCommentaire" value="{{commentaire.dateCommentaire}}">
        </label>
        {% if errors.dateCommentaire is defined %}
            <span class="error">{{errors.dateCommentaire}}</span>
        {% endif %}
        <label for="idMembre">Ton id
            <input type="number" name="idMembre" id="idMembre" value="{{commentaire.idMembre}}">
        </label>
        {% if errors.idMembre is defined %}
            <span class="error">{{errors.idMembre}}</span>
        {% endif %}
        <input type="submit" class="bouton" value="Enregistrer">
    </div>
    {{ include('layouts/footer.php')}}