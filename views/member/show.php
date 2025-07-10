
{{ include('layouts/header.php', {title: 'Membres'})}}

        <div class="hero"></div>   
        {% if session.idRole == 3%}      
        <h1>Bienvenue {{ member.prenom}} !</h1>
        <div class="div-un-article">
            <h3>Mon Profil</h3>
            <p><strong>Prenom: </strong >{{ member.prenom}}</p>
            <p><strong>Nom: </strong>{{ member.nom }}</p>
            <p><strong>Pseudonyme: </strong>{{ member.pseudonyme }}</p>
            <p><strong>Courriel: </strong>{{ member.courriel }}</p>
            <div class="deux-boutons">
                <a href="{{base}}/member/edit?id={{ member.id }}" class="bouton">Éditer mon profil</a>                
                <form class="no-border" action="{{ base }}/member/delete" method="post">                    
                    <input type="hidden" name="id" value="{{ member.id }}">
                    <button type="submit" class="bouton tomato">Supprimer</button>
                </form>
                {% endif %}
            </div>
        </div>
{{ include('layouts/footer.php')}}
