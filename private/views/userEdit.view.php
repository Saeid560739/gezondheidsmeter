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
                        <h1>Mijn gegevens wijzegen</h1>
                </div>
                <form method="post">
                    <div class="gegevens" >
                        Voornaam: <input type="text" class="test_input" name="firstName" style="margin-left: 40px" value="<?=$rows[0]->firstname?>">
                    </div>
                    <div class="gegevens">
                        Achternaam: <input type="text" class="test_input" name="lastName" style="margin-left: 14px" value="<?=$rows[0]->lastname?>">
                    </div>
                    <div class="gegevens">
                        E-mail: <input type="text" class="test_input" name="email" style="margin-left: 88px" value="<?=$rows[0]->email?>">
                    </div>
                    <div class="gegevens">
                        Gewicht: <input type="text" class="test_input" name="weight" style="margin-left: 68px" value="<?=$rows[0]->weight?>">
                    </div>
                    <input type="submit" class="succes_btn" name="submit" value="Opslaan" style="margin: 20px  ">
                </form>
       
        </div>
</div> 
          
<?php $this->view('inclodes/footer')?>