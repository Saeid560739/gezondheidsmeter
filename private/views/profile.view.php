    <?php $this->view('inclodes/header')?>

<div id="content">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid bg-white">
            <a class="navbar-brand fw-bold fs-1 text-success" href="#">
                Gezondheidsmeter
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fs-5" aria-current="page" href="http://localhost/gezondheidsmeter/public/dashboard">Dashboard</a>
                    <a class="nav-link fs-5 text-success fw-bold" href="http://localhost/gezondheidsmeter/public/profile">Mijn gegevens</a>
                    <a class="nav-link fs-5" href="http://localhost/gezondheidsmeter/public/rapport">Rapport</a>
                    <a class="nav-link fs-5" href="http://localhost/gezondheidsmeter/public/notifications">Meldingen</a>

                </div>
            </div>
        </div>
    </nav>
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