<?php

class Rapport extends Controller
{

   public function index()
        {
            if(!Auth::logged_in())
            {
                $this->redirect("login");
            }
            
            $user = new User();
            $report = new Report();
            $data = $user->where("id", $_SESSION['userID']);
            if(count($_POST) > 0 )
            {
                $user = new User();
                if(isset($_POST['submit']))
                {
                    $report->reportReset($_SESSION['userID']);
                }
            }
            //SELECT * FROM atm_db.transfer where DATE(datum) = DATE('"+ DateTime.Now.ToString("yyyy/MM/dd") + "') AND AmountStatus = 0 AND userID = '"+ userID +"'
            //print_r(date("Y/m/d"));
            $workOfWeek = $report->getLastWeek('work',"users_id", $_SESSION['userID']);
            $sportOfWeek = $report->getLastWeek('sport',"users_id", $_SESSION['userID']);
            $nutritionOfWeek = $report->getLastWeek('nutrition',"users_id", $_SESSION['userID']);
            $alcoholOfWeek = $report->getLastWeek('alcohol',"users_id", $_SESSION['userID']);
            $drugsOfWeek = $report->getLastWeek('drugs',"users_id", $_SESSION['userID']);
            $sleepOfWeek = $report->getLastWeek('sleep',"users_id", $_SESSION['userID']);
            $generalOfWeek = $report->getLastWeek('general',"users_id", $_SESSION['userID']);
            $reportData = $report->where("users_id", $_SESSION['userID']);
            $lastReport = $reportData == NULL ? 0: count($reportData);
            $IsWeekReport = $lastReport < 7 ? $lastReport: 7;

            //print($lastReport) ;
            $this->view('rapport', [
                'rows'=>$data,
                'report'=>$reportData, 
                'lastReport'=>$lastReport, 
                'workOfWeek'=>$workOfWeek,
                'sportOfWeek'=>$sportOfWeek,
                'nutritionOfWeek'=>$nutritionOfWeek,
                'alcoholOfWeek'=>$alcoholOfWeek,
                'drugsOfWeek'=>$drugsOfWeek,
                'sleepOfWeek'=>$sleepOfWeek,
                'generalOfWeek'=>$generalOfWeek,
                'reportData'=>$reportData,
                'IsWeekReport'=>$IsWeekReport
            ]);

        }
}
