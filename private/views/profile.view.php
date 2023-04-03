    <?php $this->view('inclodes/header')?>

<div id="content">
        <div id="menu_container">
                
                <ul>
                        <div id="foto_container">
                                <div id="foto"></div>
                                <div id="naam"><?=$rows[0]->firstname. " " . $rows[0]->lastname?></div>
                        </div>
                        <li><a href="http://localhost/gezondheidsmeter/public/dashboard">Home</a></li>
                        <li><a class="active" href="http://localhost/gezondheidsmeter/public/profile">Mijn gegevens</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/rapport">Rapport</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/notifications">Meldingen</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/log_out">Uitloggen</a></li>

                </ul>
        </div>
        <div id="content_container">
                <div id="title"> 
                        <h1>Mijn gegevens</h1>
                </div>
                <div id="gegevens">
                        <div class="gegevens">Usern ID: <?=$rows[0]->id?></div>
                        <div class="gegevens">Voornaam: <?=$rows[0]->firstname?></div>
                        <div class="gegevens">Achternaam: <?=$rows[0]->lastname?></div>
                        <div class="gegevens">E-mail: <?=$rows[0]->email?></div>
                        <div class="gegevens">Geboortedatum: <?=$rows[0]->birth?></div>
                        <div class="gegevens">Gewicht: <?=$rows[0]->weight?></div>

                </div>
                <div id="profile_btn">
                        <a class="succes_btn" href="http://localhost/gezondheidsmeter/public/userEdit"> Gegevens wijzegen</a>
                </div>
       
        </div>
</div> 
          
<?php $this->view('inclodes/footer')?>