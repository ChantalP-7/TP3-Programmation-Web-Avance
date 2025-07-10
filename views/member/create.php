{{ include('layouts/header.php', {title: 'Membres'})}}

    <div class="hero"></div> 
    {% if errors is defined %}
    <div class="error">
        <ul>
            {% for error in errors %}
                <li>{{ error }}</li>
            {% endfor %}
        </ul>
    </div>
    {% endif %}
    <form class="formulaire" action="" method="post">
        <h2>Inscription de membre</h2>
        <label>Prénom</label>
        <input type="text" name="prenom" value="{{ member.prenom }}">            
        {% if errors.prenom is defined %}
            <span class="error">{{errors.prenom}}</span>
        {% endif %}
        <label>Nom</label>                
            <input type="text" name="nom" value="{{ membr.nom }}">            
        {% if errors.nom is defined %}
            <span class="error">{{errors.nom}}</span>
        {% endif %}
        <label>Pseudo</label>
            <input type="text" name="pseudonyme" value="{{ member.pseudonyme }}">            
        {% if errors.pseudonyme is defined %}
            <span class="error">{{errors.pseudonyme}}</span>
        {% endif %}
        <label>Téléphone</label>
            <input type="text" name="telephone" value="{{ member.telephone }}">
            {% if errors.telephone is defined %}
            <span class="error">{{errors.telephone}}</span>
        {% endif %}
                             
        <input type="submit" class="bouton" value="Soumettre">
    </form>
    </div>
    {{ include('layouts/footer.php')}}
