{{ include('layouts/header.php', {title: 'Membres'})}}

<div class="hero"></div> 
<div>
    <h2 class="center">Mise à jour du profil 2</h2>
    <form class="medium" method="post">
        <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" value="{{member.prenom}}">        
        {% if errors.prenom is defined %}
            <span class="error">{{errors.prenom}}</span>
        {% endif %}
        <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{member.nom}}">        
        {% if errors.nom is defined %}
            <span class="error">{{errors.nom}}</span>
        {% endif %}
        <label for="pseudonyme">Pseudonyme</label>
            <input type="text" name="pseudonyme" id="pseudonyme" value="{{member.pseudonyme}}">        
        {% if errors.pseudonyme is defined %}
            <span class="error">{{errors.pseudonyme}}</span>
        {% endif %}
        <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" value="{{member.telephone}}">        
        {% if errors.telephone is defined %}
            <span class="error">{{errors.telephone}}</span>
        {% endif %}
        <label for="courriel">Courriel</label>
            <input type="email" name="courriel" value="{{member.courriel}}">        
        {% if errors.courriel is defined %}
            <span class="error">{{errors.courriel}}</span>
        {% endif %}
        <label for="password">Password</label>
            <input type="password" name="password" value="{{member.password}}">        
        {% if errors.password is defined %}
            <span class="error">{{errors.password}}</span>
        {% endif %}
        <input type="submit" class="bouton" value="Enregistrer">
    </form>
</div>
{{ include('layouts/footer.php')}}