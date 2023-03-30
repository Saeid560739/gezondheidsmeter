<?php $this->view('inclodes/header')?>
<div id="content">
        <div id="menu_container">
                <ul>
                        <li><a class="active" href="http://localhost/gezondheidsmeter/public/dashboard">Home</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/profile">Mijn gegevens</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/rapport">Rapport</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/notifications">Meldingen</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/log_out">Uitloggen</a></li>

                </ul>
        </div>
        <div id="content_container">
        <h1>this is dashboard</h1>
                <?php
                        echo "<pre>";
                        print_r ($rows);
                ?>
        </div>
</div>        
<?php $this->view('inclodes/footer')?>