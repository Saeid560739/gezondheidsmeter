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
                <li><a href="http://localhost/gezondheidsmeter/public/rapport">Rapport</a></li>
                <li><a href="http://localhost/gezondheidsmeter/public/notifications">Meldingen</a></li>
                <li><a href="http://localhost/gezondheidsmeter/public/log_out">Uitloggen</a></li>
                        
        </ul>
        </div>
        <div id="content_container">
                
                <?php
                //echo 3*2.5;
                print_r($_SESSION);
                
                    if(isset($_GET['v']))
                    {
                        //$_SESSION['werk'] = '';
                        if(isset($_POST["submit_finish"]))
                        {
                            
                            $this->redirect("dashboard");
                        }
                        
                      elseif(isset($_POST["submit"])){
                        
                        $_GET['v'] +1;
                        $this->view('inclodes/questions/v'. $_GET['v']);

                      }else{
                        $this->redirect("dashboard");
                      }
                    }

                ?>

        </div>
</div>     
<?php $this->view('inclodes/footer')?>