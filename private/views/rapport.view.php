<?php $this->view('inclodes/header')?>
<div id="content">
        <div id="menu_container">
                
        <ul>     
                <div id="foto_container">
                        <div id="foto"></div>
                        <div id="naam"><?=$rows[0]->firstname. " " . $rows[0]->lastname?></div>
                </div>                                                                                                                                                                                                                                               
                <li><a href="http://localhost/gezondheidsmeter/public/dashboard">Home</a></li>
                <li><a href="http://localhost/gezondheidsmeter/public/profile">Mijn gegevens</a></li>
                <li><a class="active" href="http://localhost/gezondheidsmeter/public/rapport">Rapport</a></li>
                <li><a href="http://localhost/gezondheidsmeter/public/notifications">Meldingen</a></li>
                <li><a href="http://localhost/gezondheidsmeter/public/log_out">Uitloggen</a></li>
                        
        </ul>
        </div>
        <div id="content_container">
                <div id="title"> 
                        <h1>Mijn rapport</h1>
                </div>
                <div id="rapport">
                        <div id="last_report">
                                <h3>Laatste rapport</h3>
                                <div id="last_report_div">
                                <div id="imgNum"><div id="arrow" style="transform: rotate(90deg);"></div><div id="proc">Werk</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(90deg);"></div><div id="proc">Sport</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(90deg);"></div><div id="proc">Voeding</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(90deg);"></div><div id="proc">Alcohol</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(90deg);"></div><div id="proc">Drugs</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(90deg);"></div><div id="proc">Slaap</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(90deg);"></div><div id="proc">Algemeen</div><img src="../public/foto's/meter.png" width="300" height="250"></div>

                                
                        </div>
                        <div id="algemeen_report"></div>
                        
                </div>
     
        </div>
</div>        
<?php $this->view('inclodes/footer')?>