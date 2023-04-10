<div id="title"> 
        <h1>thank</h1>
</div>
<?php
        print_r($_SESSION);
        if(isset($_POST["submit"]))
                {                          
                        $slaapUren = isset($_POST['slaapUren'])? $_POST['slaapUren']: 0;
                        $slaap = isset($_POST['slaap'])? $_POST['slaap']: 0;
                        $totale = ((int)$slaapUren * 1.25)<= 10? ((int)$slaapUren * 1.25): 6;
                        $_SESSION['slaap'] = $totale;
                }
        ?>
<form method="post" id="vragen_content" action="http://localhost/gezondheidsmeter/public/dashboard">

    <h2>Hoeveel uren?</h2>

    <input type="submit" name="submit">
</form>