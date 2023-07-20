<?php
include("headerdeux.php")
;?>

    <title>Remède animale home</title>

    <main>

       

        <section class="section-api">
            <div class="titreapi">
                <h1 class="#"> Les classifications scientifiques </h1>
            </div>
        </section>
        <section class="api-nom-animal" >
        

        <p class="api-large-texte" >Parmi les animaux venimeux, on trouve une diversité d'espèces, des serpents aux araignées en passant par les scorpions. Ces animaux possèdent des glandes spéciales qui produisent du venin, une substance toxique utilisée pour la défense ou la prédation. Le venin est généralement injecté dans la proie ou l'agresseur par le biais de crocs, de dards ou de piqûres.

Les serpents venimeux sont particulièrement redoutables. Ils chassent en utilisant leur venin pour paralyser leurs proies avant de les consommer. Cependant, il est essentiel de noter que la majorité des serpents ne sont pas venimeux et que beaucoup d'espèces non venimeuses contribuent à la régulation des populations de rongeurs et d'insectes nuisibles.</p>

       <p class="api-small-texte" > veuillez ecrire les noms des animaux en Anglais ou en Latin s'il vous plait.</p>
       <p><a href="videos.php" class="retour-page-video" > retour sur la page vidéo </a></p>
        <form class="weather">
      
            <input type="text" class="weather__city" class="api-recherche" autofocus required placeholder="Entrez le nom de l'animal" id="api-recherche" >
            <input type="submit" class="weather__validate" value="click" id="api-bouton" >
        <div class="weather__forecast"></div>
        </form>
        </section>


    </main>
    <?php
include("footer.php")
;?>
