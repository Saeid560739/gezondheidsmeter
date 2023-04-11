
<?php $this->view('inclodes/header')?>
<div id="content">
        <div id="menu_container">
                
                <ul>
                        <div id="foto_container">
                                <div id="foto"></div>
                                <div id="naam"><?=$rows[0]->firstname. " " . $rows[0]->lastname?></div>
                        </div>
                        <li><a class="active" href="http://localhost/gezondheidsmeter/public/dashboard">Home</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/profile">Mijn gegevens</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/rapport">Rapport</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/notifications">Meldingen</a></li>
                        <li><a href="http://localhost/gezondheidsmeter/public/log_out">Uitloggen</a></li>

                </ul>
        </div>
        <div id="content_container">
                <div id="title"> 
                        <h1>Dashboard</h1>
                </div>
            <?php
            //print_r($_SESSION);
            
                ?>
            <?php //print_r($generalOfWeek[0]->value_sum) ?>
        <form action="http://localhost/gezondheidsmeter/public/questions?v=1" method="post">
            
            <input type="submit" class="fixed_btn" name="submit" value="Vragen" >
        </form>
                <div id="rapport">
                        <div id="last_report">`
                                <?php $date = new DateTime($lastReport == 0 ? date("Y/m/d"): $report[$lastReport-1]->date)?>
                                <h3>Laatste rapport op <?= date_format($date,"Y/m/d");?></h3>
                                <div id="last_report_div">
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->work) ?>deg);"></div><div id="proc">Werk <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->work * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->sport)?>deg);"></div><div id="proc">Sport <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->sport * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($lastReport == 0 ? '0': $report[$lastReport-1]->nutrition)?>deg);"></div><div id="proc">Voeding <?=  (int)($lastReport == 0 ? '0': $report[$lastReport-1]->nutrition * 10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>
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
                                <div id="imgNum"><div id="arrow" style="transform: rotate(<?=get_proc($generalOfWeek[0]->value_sum/$IsWeekReport)?>deg);"></div><div id="proc">Algemeen <?=(int)(($generalOfWeek[0]->value_sum/$IsWeekReport)*10)?>%</div><img src="../public/foto's/meter.png" width="300" height="250"></div>

                                
                        </div>
                        
                        
                </div>    

        </div>

        <?php
        //echo "<pre>";
        //print_r ($lastReport);
        ?>

</div>        
<?php $this->view('inclodes/footer')?>