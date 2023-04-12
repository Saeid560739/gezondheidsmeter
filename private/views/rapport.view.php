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
                    <a class="nav-link fs-5 " aria-current="page" href="http://localhost/gezondheidsmeter/public/dashboard">Dashboard</a>
                    <a class="nav-link fs-5" href="http://localhost/gezondheidsmeter/public/profile">Mijn gegevens</a>
                    <a class="nav-link fs-5 text-success fw-bold" href="http://localhost/gezondheidsmeter/public/rapport">Rapport</a>
                    <a class="nav-link fs-5" href="http://localhost/gezondheidsmeter/public/notifications">Meldingen</a>

                </div>
            </div>
        </div>
    </nav>
        <div id="content_container">
                <div id="title"> 
                        <h1>Mijn rapport</h1>
                </div>
                <?php //print_r($generalOfWeek[0]->value_sum) ?>
                <div id="rapport">
                        <div id="last_report">`
                                <?php $date = new DateTime($lastReport == 0 ? date("Y/m/d"): $report[$lastReport-1]->date)?>
                                <h3>Laatste rapport op <?= date_format($date,"Y/m/d");?></h3>
                                <div id="last_report_div">
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->work) ?>deg);"></div><div id="proc">Werk <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->work * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->sport)?>deg);"></div><div id="proc">Sport <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->sport * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->nutrition)?>deg);"></div><div id="proc">Voeding <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->nutrition * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->alcohol)?>deg);"></div><div id="proc">Alcohol <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->alcohol * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->drugs)?>deg);"></div><div id="proc">Drugs <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->drugs * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->sleep)?>deg);"></div><div id="proc">Slaap <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->sleep * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->general)?>deg);"></div><div id="proc">Algemeen <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->general * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>            
                                
                        </div>
                        <div id="algemeen_report"></div>
                        
                </div>
                <br>
                <br>
                <div id="rapport">
                        <div id="last_report">
                                <h3>Algemeen rapport</h3>
                                <div id="last_report_div">
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($workOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Werk <?=(int)(($workOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($sportOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Sport <?=(int)(($sportOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($nutritionOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Voeding <?=(int)(($nutritionOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($alcoholOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Alcohol <?=(int)(($alcoholOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($drugsOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Drugs <?=(int)(($drugsOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($sleepOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Slaap <?=(int)(($sleepOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($generalOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Algemeen <?=(int)(($generalOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="last_report_div">


                                
                        </div>
                        
                        
                </div>
     
        </div>
</div>        
<?php $this->view('inclodes/footer')?>