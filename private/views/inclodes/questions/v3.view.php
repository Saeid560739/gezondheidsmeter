<div id="title"> 
        <h1>Voeding</h1>
</div>
<form method="post" id="vragen_content" action="http://localhost/gezondheidsmeter/public/questions?v=4">
    <h2>Heb je vandaag iets gegeten uit de volgende categorie(Groente, fruit)?</h2>
    <input type="radio" id="etenJa" name="eten" value="1">
    <label for="etenJa">Ja</label><br>
    <input type="radio" id="etenNee" name="eten" value="0">
    <label for="etenNee">Nee</label><br>

    <h2>heb je vandaag teveel suikerhoudende dranken gedronken?</h2>
    <input type="radio" id="drinkJa" name="suikerhoudende" value="0">
    <label for="drinkJa">Ja</label><br>
    <input type="radio" id="drinkNee" name="suikerhoudende" value="1">
    <label for="drinkNee">Nee</label><br>

    <h2>heb je vandaag teveel cafeïnehoudende dranken gedronken?</h2>
    <input type="radio" id="drinkJa" name="cafeïnehoudende" value="0">
    <label for="drinkJa">Ja</label><br>
    <input type="radio" id="drinkNee" name="cafeïnehoudende" value="1">
    <label for="drinkNee">Nee</label><br>
    <input type="submit" name="submit">
</form>