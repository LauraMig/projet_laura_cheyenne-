<?php
include("headerun.php");
?>

<title>Remède animale inscription</title>

<main>
<form action="trait.php" method="post" class="formulaire-in">
                <h1 class="titreform-in" >Inscription</h1>
                <hr class="trait-in" >
                <div class="corps-formulaire-in" >
                <div class="gauche-in">
                <div class="groupe-in">
                    <label for="pseudo" class="label">Pseudo</label>
                    <input type="text" id="input_nom_inscription" name="pseudo" pattern="[A-Za-z0-9\u00c0-\u00ff]{5,20}" class="input-info-in <?php if(isset($pseudoMsgErreur) && !empty($pseudoMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="pseudoFeedback">
                    <?php if(isset($pseudoMsgErreur)){ ?>
                    <div class="invalid-feedback" id="pseudoFeedback">
                        <?php echo $pseudoMsgErreur; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="groupe-in">
                    <label for="email" class="label-info-in">Email</label>
                    <input type="email" id="input_mail_inscription" name="email" pattern="[_a-zA-Z0-9!#$%&'*+-/=?^_`{|}~;]+(\.[_a-zA-Z0-9!#$%&'*+-/=?^_`{|}~;]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,})" class="input-info-in <?php if(isset($emailMsgErreur) && !empty($emailMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="emailFeedback">
                    <?php if(isset($emailMsgErreur)){ ?>
                    <div class="invalid-feedback" id="emailFeedback">
                        <?php echo $emailMsgErreur; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="groupe-in">
                    <label for="pass1" class="label-info-in">Mot de Passe</label>
                    <input type="password" id="input_password_inscription" name="pass" class="input-info-in <?php if(isset($passMsgErreur) && !empty($passMsgErreur)) echo 'is-invalid'; ?>" aria-describedby="passFeedback">
                    <?php if(isset($passMsgErreur)){ ?>
                    <div class="invalid-feedback" id="passFeedback">
                        <?php echo $passMsgErreur; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="groupe-in">
                    <label for="pass2" class="label-info-in">Confirmer le mot de passe</label>
                    <input type="password" class="input-info-in" id="input_conf_password_inscription" pattern="[A-Za-z0-9_$]{8,}">
                </div>
                <div class="groupe-in">
                    <input type="submit" class="bouton-in" value="Inscription" id="register">
                </div>
                </div>
                </div>
            </form>
    </main>


    <?php
include("footer.php")
;?>

