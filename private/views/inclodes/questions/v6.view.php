<div id="title"> 
        <h1>Slaap</h1>
</div>
<?php
    if(isset($_POST["submit"]))
            {                          
                   $Joints = isset($_POST['Joints'])? $_POST['Joints']: 0;
                   $Extacy = isset($_POST['Extacy'])? $_POST['Extacy']: 0;
                   $GHB = isset($_POST['GHB'])? $_POST['GHB']: 0;
                   $totale = ((int)$Joints  + (int)$Extacy + (int)$GHB )* 3.33;
                   $_SESSION['drugs'] = $totale;
            }
?>
<form method="post" id="vragen_content" action="http://localhost/gezondheidsmeter/public/questions?v=7">

    <h2>Hoeveel uren?</h2>
    <input type="text" id="uren" name="slaapUren" > uren
    <h2>Hoe was de kwaliteit van slaap?</h2>
    <input type="radio" id="slaapGoed" name="slaap" value="1">
    <label for="slaapGoed">Goed<img src="../public/foto's/tevreden.jpeg" style="margin: 47px; width: 200px; height:200px;"></label><br>
    <input type="radio" id="slaapslecht" name="slaap" value="0">
    <label for="slaapslecht">Niet Goed<img src="../public/foto's/ontevreden.jpeg" style=" margin: 20px; width: 200px; height:200px;"></label><br>
    <input type="submit" name="submit">
</form>