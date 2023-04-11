<div id="title"> 
        <h1>Alcohol</h1>
</div>
<?php
    if(isset($_POST["submit"]))
            {                          
                   $eten = isset($_POST['eten'])? $_POST['eten']: 0;
                   $suikerhoudende = isset($_POST['suikerhoudende'])? $_POST['suikerhoudende']: 0;
                   $cafeïnehoudende = isset($_POST['cafeïnehoudende'])? $_POST['cafeïnehoudende']: 0;
                   $totale = ((int)$eten  + (int)$suikerhoudende + (int)$cafeïnehoudende )* 3;
                   $_SESSION['voeding'] = $totale;
            }
?>
<form method="post" id="vragen_content" action="http://localhost/gezondheidsmeter/public/questions?v=5">
    <h2>heb je vandaag Alcohol gedronken?</h2>
    <input type="radio" id="alcoholJa" name="alcohol" value="0">
    <label for="alcoholJa">Ja</label><br>
    <input type="radio" id="alcoholNee" name="alcohol" value="1">
    <label for="alcoholNee">Nee</label><br>
    <input type="submit" class="succes_btn" name="submit" value="Volgende" >
</form>