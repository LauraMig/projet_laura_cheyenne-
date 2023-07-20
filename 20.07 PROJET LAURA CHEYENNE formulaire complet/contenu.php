 <?php
include("headerun.php")
;?>
 <title>Remède animale contenu</title>


    <main class="mesure-page-co">
        <form class="formulaireco" action="" method="">
            <h1 class="titreformco"> Ajoutez votre contenu </h1>
            <hr class="traitco">

            <div class="corps-formulaireco">
                <div class="gaucheco">


                    <div class="groupeco">
                        <label class="label-infoco"> titre du contenu</label>
                        <input class="input_contenu" id="input_connection" type="email" name="email" placeholder="Inserez-email" required>
                    </div>

                    <!-- <td><label for="">Pays</label></td> -->
                    <td>
                        <select name="" id="" class="contenu">
                            <option value=""> Les serpents</option>
                            <option value=""> Les animaux</option>
                        </select>
                    </td>

                    <div class="groupeco">
                        <label class="label-infoco">Votre contenu</label>
                        <textarea  cols="30" rows="10" class="input_contenu" id="input_connect" name="pass" placeholder="Inserez votre texte ici" required="required"></textarea> 

                        <div class="groupeco">

                            <button class="boutonco">Envoyer votre contenu</button>
                        </div>
                    </div>
                </div>
            </div>




        </form>
    </main>
<?php
include("footer.php")
;?> 