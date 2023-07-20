<?php
include("headerun.php")
;?>
    <title>Remède animale contact</title>



    <main class="mesure-page">
        <form class="formulaire" action="contactez.php" method="post" >
            <h1 class="titreform"> Contactez-nous </h1>
            <hr class="trait">

            <div class="corps-formulaire">
                <div class="gauche">
                    <div class="groupe">
                        <label class="label-info">Votre nom</label>
                        <input  id="input_nom_contact" name="nom" placeholder="ajouter votre nom ici"  class="input-info<?php if(isset($nomMsgErreur) && !empty($nomMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="pseudoFeedback">
                        <?php if(isset($nomMsgErreur)){ ?>
                            <?php echo $nomMsgErreur; ?>
                    <?php } ?>

                    </div>
                    <div class="groupe">
                        <label class="label-info">Votre-email</label>
                        <input  id="input_mail_contact" name="email" placeholder="ajouter votre E-mail ici" class="input-info<?php if(isset($emailMsgErreur) && !empty($emailMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="emailFeedback">
                        <?php if(isset($emailMsgErreur)){ ?>
                            <?php echo $emailMsgErreur; ?>
                    <?php } ?>

                    </div>
                    <div class="groupe">
                        <label class="label-info">Votre téléphone </label>
                        <input  id="input_tel_contact"  name="telephone" placeholder="ajouter votre numéro ici" class="input-info<?php if(isset($telephoneMsgErreur) && !empty($telephoneMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="passFeedback">
                        <?php if(isset($telephoneMsgErreur)){ ?>
                            <?php echo $telephoneMsgErreur; ?>
                    <?php } ?>   
                    </div>

                </div>
                <div class="droite">
                    <div class="groupe">
                        <label class="label-message"> Message</label>
                        <textarea   id="text_message-contact" name="message" placeholder="Saisissez ici..." class="textarea-message<?php if(isset($messageMsgErreur) && !empty($messageMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="pseudoFeedback"></textarea>
                        <?php if(isset($messageMsgErreur)){ ?>
                         <?php echo $messageMsgErreur; ?>
                         <?php } ?>

                        <button class="bouton">Envoyer le message</button>
                    </div>
                </div>
            </div>
        </form>
       </main> 
       <?php
include("footer.php")
;?>
