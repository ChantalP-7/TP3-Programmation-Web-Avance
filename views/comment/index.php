{{ include('layouts/header.php', {title: 'Commentaires'})}}

<div class="hero"></div> 
     <h1>Les commentaires</h1>
     <div class="grille">
        <table>
            <tr>
                <th>Recette</th>
                <th>Commentaire</th>            
                <th>Pointage</th>            
                <th>Date du commentaire</th> 
                <th>Auteur.e</th> 
                <th>Commentaire</th>               
            </tr>
            {% for comment in comments %}
            {% for recipe in recipes %} 
            {% if recipe.id == comment.idRecette %}
            {% for member in members %}
            {% if member.id  == comment.idMembre %}



                <tr>                        
                    <td><a href="{{base}}/recipe/show?id={{recipe.id}}">Voir la recette</a></td>
                    <td class="gold">{{ comment.etoiles}}</td>
                    <td>{{ comment.commentaire}} </td>                    
                    <td>{{ comment.dateCommentaire}}</td>
                    <td>{{ member.pseudonyme}}</td>
                    <td><a href="{{base}}/comment/show?id={{comment.id}}">Voir le commentaire</a></td>
                </tr>
                {% endif %}
                {% endfor %}
                {% endif %}
                {% endfor %}
            {% endfor %}
            </table>         
        <br><br>
    </div>
{{ include('layouts/footer.php')}}