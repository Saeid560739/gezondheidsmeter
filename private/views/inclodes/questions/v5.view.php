<div id="title"> 
        <h1>Drugs</h1>
</div>
<?php
    if(isset($_POST["submit"]))
            {                          
                   $alcohol = isset($_POST['alcohol'])? $_POST['alcohol']: 0;
                   $_SESSION['alcohol'] = (int)$alcohol * 10;
            }
?>
<form method="post" id="vragen_content" action="http://localhost/gezondheidsmeter/public/questions?v=6">
    <h2>heb je vandaag (Joints, sigaretten, sigaren) genomen?</h2>
    <input class="radio" type="radio" id="JointsJa" name="Joints" value="0">
    <label for="JointsJa">Ja</label><br>
    <input class="radio" type="radio" id="JointsNee" name="Joints" value="1">
    <label for="JointsNee">Nee</label><br>

    <h2>heb je vandaag (Extacy, Coke, speed, MDMA) genomen?</h2>
    <input class="radio" type="radio" id="extacyJa" name="Extacy" value="0">
    <label for="extacyJa">Ja</label><br>
    <input class="radio" type="radio" id="extacyNee" name="Extacy" value="1">
    <label for="extacyNee">Nee</label><br>

    <h2>heb je vandaag (GHB, Lachgaspatronen, heroïne, anders) genomen?</h2>
    <input class="radio" type="radio" id="GHBJa" name="GHB" value="0">
    <label for="GHBJa">Ja</label><br>
    <input class="radio" type="radio" id="GHBNee" name="GHB" value="1">
    <label for="GHBNee">Nee</label><br>
    <input type="submit" class="succes_btn" name="submit" value="Volgende" >
</form>