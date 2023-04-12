<div id="title"> 
        <h1>Sport en bewegen</h1>
</div>
<?php
    if(isset($_POST["submit"]))
            {                          
                   $werkplek = isset($_POST['werkplek'])? $_POST['werkplek']: 0;
                   $werklocatie = isset($_POST['werklocatie'])? $_POST['werklocatie']: 0;
                   $werktijd = isset($_POST['werktijd'])? $_POST['werktijd']: 0;
                   $werkdruk = isset($_POST['werkdruk'])? $_POST['werkdruk']: 0;
                   $totale = ((int)$werkplek + (int)$werklocatie + (int)$werktijd + (int)$werkdruk) * 2.5 ;
                   $_SESSION['werk'] = $totale;
            }
?>
<form method="post" id="vragen_content" action="http://localhost/gezondheidsmeter/public/questions?v=3">
    <h2>Heb je vandaag gesport?</h2>
    <input class="radio" type="radio" id="sportJa" name="sport" value="1">
    <label for="sportJa">Ja</label><br>
    <input class="radio" type="radio" id="sportNee" name="sport" value="0">
    <label for="sportNee">Nee</label><br>


    <div id="sportVragen" style="display: none">
        <h2>Hoeveel uren?</h2>
        <input type="text" id="uren" name="uren" > uren

        <h2>Welke sport?</h2>
        <input class="radio" type="checkbox" id="veotbal" name="voetbal" value="1">
        <label for="voetbal"> Voetbal</label><br>
        <input class="radio" type="checkbox" id="tennis" name="tennis" value="1">
        <label for="tennis"> Tennis</label><br>
        <input class="radio" type="checkbox" id="zwemmen" name="zwemmen" value="1">
        <label for="zwemmen"> Zwemmen</label><br>
        <input class="radio" type="checkbox" id="anders" name="anders" value="1">
        <label for="anders"> Anders</label><br>
    </div>


    <input type="submit" class="succes_btn" name="submit" value="Volgende" >

</form>
<script>
    document.getElementById("sportJa").addEventListener("click", view);
    function view() 
    {
        document.getElementById("sportVragen").style.display = "block";
    }
    document.getElementById("sportNee").addEventListener("click", hidden);
    function hidden() 
    {
        document.getElementById("sportVragen").style.display = "none";
    }


</script>