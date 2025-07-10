

{{ include('layouts/header.php', {title: 'Recettes'})}}
    <div class="hero"></div> 
    <div class="bienvenue">
<span>
            {% if guest is empty %}            
                Bonjour {{ session.prenom }} !
            {% endif %}
        </span>
</div>  
    <nav class="secondaire">
        <ul>
            <li><a href="breakfast.php">Déjeuners</a></li>                    
            <li><a href="main.php">Repas principaux</a></li>
            <li><a href="starter.php">Entrées</a></li>
            <li><a href="dessert.php">Desserts</a></li>
        </ul>
    </nav>  
    <h1>Recettes vedettes</h1>
    <div class="div-centre">
        <div class="grille-3-col">        
            {% for recipe in recipes %}  
                {% set nomCategorie = recipe.categorie %} 
                <article class="carte">
                    {% if nomCategorie == recipe.categorie %}
                    <img src="{{ asset }}image/categories/{{ nomCategorie }}.jpg" alt="{{nomCategorie}}">
                    {% endif %}
                    <div class="info-carte">              
                        <h2> {{recipe.titre}} </h2>
                        <p>Catégorie : {{nomCategorie}}</p>                
                        <em><p>Date de création : {{recipe.dateCreation}}</p></em>
                        <p><a href="{{base}}/recipe/show?id={{recipe.id}}">Voir la recette</a></p>                
                    </div> 
                </article>
            {% endfor %}
        </div> 
    </div>   
    {% if session.idRole == 3%}
    <a href="{{ base }}/recipe/create" class="bouton">Ajoute une recette</a>
    {% endif %}
    {{ include('layouts/footer.php')}}