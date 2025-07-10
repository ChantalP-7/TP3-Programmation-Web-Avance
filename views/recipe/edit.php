{{ include('layouts/header.php', {title: 'Modifier une recette'})}}

    <div class="hero"></div> 
    </div>
        <h1 class="center">Modifie la recette</h1>
        <form class="large" method="post">
            <label for="categorie">Catégorie</label> 
                <select required name="idCategorie">
                    <option value="">Choisis la catégorie</option>
                    {% for categorie in categories %} 
                    <option value=" {{categorie.id}}" {% if categorie.id == recipe.idCategorie %} selected {% endif %}>{{categorie.categorie}}</option>
                    {% endfor %}
                </select> 
            <label for="titre">titre</label>                
                <input type="text" id="titre" name="titre" value="{{recipe.titre}}">            
            {% if errors.titre is defined %}
                <span class="error">{{errors.titre}}</span>
            {% endif %}  
            <label for="ingredient">Ingrédients</label>                
                <textarea class="text-area" name="ingredient" id="ingredient" cols="5" rows="15" required >{{recipe.ingredient}}</textarea>
            {% if errors.ingredient is defined %}
                <span class="error">{{errors.ingredient}}</span>
            {% endif %}       
            <label for="instruction">Préparation                
                <textarea class="text-area" name="instruction" id="instruction" cols="5" rows="15" required>{{recipe.instruction}}</textarea>
            </label>
            {% if errors.instruction is defined %}
                <span class="error">{{errors.instruction}}</span>
            {% endif %}      
                                  
            <label for="dateCreation">dateCreation </label>                
                <input type="date" id="dateCreation" name="dateCreation" value="{{recipe.dateCreation}}">           
            {% if errors.dateCreation is defined %}
                <span class="error">{{errors.dateCreation}}</span>
            {% endif %}                       
            <label for="idMembre">Ton id </label>               
                <input type="number" id="idMembre" name="idMembre" value="{{recipe.idMembre}}">            
            {% if errors.idMembre is defined %}
                <span class="error">{{errors.idMembre}}</span>
            {% endif %}                         
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
    {{ include('layouts/footer.php')}}