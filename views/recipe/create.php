{{ include('layouts/header.php', {title: 'Création de recettes'})}}

    <div class="hero"></div>     
        <h1 class="center">Ajoute une recette</h1>
        <form class="large" action="" method="post">
            <label for="categorie">Catégorie</label> 
                <select required name="idCategorie">
                    <option value="">Choisis la catégorie</option>
                    {% for categorie in categories %} 
                    <option value=" {{categorie.id}}" required {% if categorie.id == recipe.idCategorie %} selected {% endif %}>{{categorie.categorie}}</option>
                    {% endfor %}
                </select> 
            <label for="titre">titre</label>                
                <input type="text" id="titre" name="titre" required>
            
            {% if errors.titre is defined %}
                <span class="error">{{errors.titre}}</span>
            {% endif %}  
            <label for="ingredient">Ingrédients </label>              
                <textarea  name="ingredient" id="ingredient" required></textarea>           
            {% if errors.ingredient is defined %}
                <span class="error">{{errors.ingredient}}</span>
            {% endif %}       
            <label for="instruction">Préparation</label>                
                <textarea name="instruction" id="instruction"></textarea>            
            {% if errors.instruction is defined %}
                <span class="error">{{errors.instruction}}</span>
            {% endif %}       
                                  
            <label for="dateCreation">dateCreation</label>                
                <input type="date" id="dateCreation" name="dateCreation" required>
            
            {% if errors.dateCreation is defined %}
                <span class="error">{{errors.dateCreation}}</span>
            {% endif %} 
                            
            <label for="idMembre"></label>                
                <input type="" id="idMembre" name="idMembre" value="{{member.id}}" required>
            {% if errors.idMembre is defined %}
                <span class="error">{{errors.idMembre}}</span>
            {% endif %}                         
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
    {{ include('layouts/footer.php')}}