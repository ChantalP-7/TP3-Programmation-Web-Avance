{{ include('layouts/header.php', {title: 'Recette'})}}

    {% set nomCategorie = recipe.categorie %}
    {% set pseudonyme = member.pseudonyme %}
           
    <div class="hero"></div>     
    <h1>{{recipe.titre}}</h1> 
    {% if nomCategorie == recipe.categorie %}      
     <picture>       
        <img src="{{ asset }}image/categories/{{ nomCategorie }}.jpg" alt="{{ nomCategorie}}">       
    </picture>
    {% endif %} 
    <div class="div-un-article">         
        <p><strong>Ingrédients : </strong>{{recipe.ingredient}}</p>
        <p><strong>Instructions : </strong>{{recipe.instruction}}</p>
        <p><strong>Catégorie : </strong>{{categorie}}</p>
        <p><strong>Date de création : </strong><em>{{recipe.dateCreation}}</em></p>
        <p><strong>Nom auteur.e : </strong> {{prenom}} {{nom}}</p>
    <div class="separation"><p></p></div>     
            
{% for comment in comments %}
    {% if recipe.id == comment.idRecette %}   
        {% for member in members %}
            {% if comment.idMembre  == member.id %}
            <div class="div-un-article">
                <p><strong>Recette : </strong>{{recipe.titre}}</p>
                <p><strong>Commentaire : </strong>{{comment.commentaire}}</p>
                <p><strong>Étoiles : </strong><span class="gold">{{comment.etoiles}}</span></p>
                <p><strong><em>Date : </strong>{{comment.dateCommentaire}}</em></p>
                <p><strong>Commentateur : </strong>{{member.pseudonyme}}</p>
                <hr>       
            </div>
            {% endif %}
        {% endfor %}
    {% endif %} 
{% endfor %}
    </div>                
        <div class="trois-boutons">
            <a href="{{base}}/recipe/edit?id={{ recipe.id }}" class="bouton">Modifier la recette</a>           
            <a href="{{base}}/comment/create?idRecette={{recipe.id}}" class="bouton">Commenter la recette</a>
            <form class="no-border" action="{{ base }}/recipe/delete" method="post">
                <input type="hidden" name="id" value="{{recipe.id}}">
                <input type="submit" class="bouton tomato" value="Supprimer la recette"></input>
            </form>
        </div>
        {{ include('layouts/footer.php')}}