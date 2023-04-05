<div id="title"> 
        <h1>Sport en bewegen</h1>
</div>
<form method="post" id="vragen_content" action="http://localhost/gezondheidsmeter/public/questions?v=3">
    <h2>Heb je vandaag gesport?</h2>
    <input type="radio" id="sportJa" name="sport" value="1">
    <label for="sportJa">Ja</label><br>
    <input type="radio" id="sportNee" name="sport" value="0">
    <label for="sportNee">Nee</label><br>


    <div id="sportVragen" style="display: none">
    <h2>Hoeveel uren?</h2>
    <input type="text" id="uren" name="sport" value="1"> uren

    <h2>Welke sport?</h2>
    <input type="checkbox" id="veotbal" name="vehicle1" value="Bike">
    <label for="voetbal"> Voetbal</label><br>
    <input type="checkbox" id="tennis" name="vehicle2" value="Car">
    <label for="tennis"> Tennis</label><br>
    <input type="checkbox" id="zwemmen" name="vehicle3" value="Boat">
    <label for="zwemmen"> Zwemmen</label><br>
    <input type="checkbox" id="anders" name="vehicle4" value="Boat">
    <label for="anders"> Anders</label><br>
    </div>


    <input type="submit" name="submit">
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