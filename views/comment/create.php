{{ include('layouts/header.php', {title: 'Création de recettes'})}}

    <!--image héro dans la div -->
    <div class="hero"></div>
        <h1 class="center">Je commente</h1>
        <form class="medium" method="post">           
            <label for="commentaire">Commentaire </label>              
                <textarea  name="commentaire" id="commentaire"></textarea>           
            {% if errors.commentaire is defined %}
                <span class="error">{{errors.commentaire}}</span>
            {% endif %}       
            <label for="pointage">Pointage</label>
            <div class="les-etoiles">
                <label for="etoile1">
                    <input type="checkbox" id="etoile1" name="etoiles" value="★">
                    <span class="etoile etoile-icon">★</span>
                </label>
                <label for="etoile2">
                    <input type="checkbox" id="etoile2" name="etoiles" value="★★">
                    <span class="etoile etoile-icon">★</span>
                </label>
                <label for="etoile3">
                <input type="checkbox" id="etoile3" name="etoiles" value="★★★">
                <span class="etoile etoile-icon">★</span>
                </label>
                <label for="etoile4">
                    <input type="checkbox" id="etoile4" name="etoiles" value="★★★★">
                    <span class="etoile etoile-icon" >★</span>
                </label>
                <label for="etoile5">
                    <input type="checkbox" id="etoile5" name="etoiles" value="★★★★★">
                    <span class="etoile etoile-icon">★</span>
                </label>
            </div>           
            <label for="dateCommentaire">Date</label>                
                <input type="date" id="dateCommentaire" name="dateCommentaire">            
            {% if errors.dateCommentaire is defined %}
                <span class="error">{{errors.dateCommentaire}}</span>
            {% endif %}                       
            <label for="idMembre">Ton id</label> 
                <input type="number" id="idMembre" name="idMembre" value="{{member.id}}">  
                         
            {% if errors.idMembre is defined %}
                <span class="error">{{errors.idMembre}}</span>
            {% endif %}  
            
            <label for="idRecette">Le id de la recette</label> 
            
                <input type="number" id="idRecette" name="idRecette" value="{{recipe.id}}">  
                     
            {% if errors.idRecette is defined %}
                <span class="error">{{errors.idRecette}}</span>
            {% endif %}                         
            <input type="submit" class="bouton" value="Enregistrer">
        </form>
    </div>
    
    {{ include('layouts/footer.php')}}