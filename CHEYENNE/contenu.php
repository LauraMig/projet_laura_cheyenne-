<?php
include("headerun.php")
;?>
<title>Remède animale contact</title>



<main class="mesure-page">
    <form class="formulaire">
        <h1 class="titreform"> Ajoutez du contenu </h1>
        <hr class="trait">

        <div class="corps-formulaire">
            <div class="gauche">
                <!-- <div class="groupe">
                        <label class="label-info">Votre nom</label>
                        <input class="input-info" id="input_nom_contact" maxlength="2" placeholder="ajouter votre nom ici">

                    </div> -->
                <!-- <div class="groupe">
                        <label class="label-info">Votre-email</label>
                        <input class="input-info" id="input_mail_contact" placeholder="ajouter votre E-mail ici">
                    </div> -->
                <!-- <div class="groupe">
                        <label class="label-info">Votre téléphone </label>
                        <input class="input-info" id="input_tel_contact" placeholder="ajouter votre numéro ici">
                    </div> -->

            </div>

            <div class="droite">
                <div class="groupe">
                    <label class="label-message"> Message</label>
                    <textarea class="textarea-message" id="text_message-contact"
                        placeholder="Saisissez ici..."></textarea>
                    <button class="bouton">Envoyer le message</button>
                </div>
            </div>
        </div>
    </form>
</main>
<?php
include("footer.php")
;?>