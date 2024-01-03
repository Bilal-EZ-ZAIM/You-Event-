<?php

class Ticke extends Controller
{

    public function index()
    {
        $Tickes = new Tickets;
        $use = new User;
        $res = new Reservation;
        $id = $_GET['id'];
        $result = $Tickes->where(['idEvent' => $id]);

        $eve = new Eve;
        // show($eve->findAll());
        $input = $res->getColomn();
        $currentDate = date('Y-m-d');
        // $data = ["idUser"=> 17 , ];
        if (isset($_POST["acheter"])) {
            $result1 = $Tickes->where(['id' => $_POST['idtick']]);
            if ($result1[0]->coun >= $_POST['count']) {
                $counts = $result1[0]->coun - $_POST['count'];
                $Tickes->update($_POST['idtick'], ['coun' => $counts]);
                $data = ["id" => null, "idUser" => 17, "idEvent" => $id, "idTicket" => $_POST['idtick'], "dateReservation" => $currentDate, "count" => $_POST['count']];
                $res->insert($data);
                redirect('home');
            }else{
                echo "le countete ";
            }

            // foreach ($input as $columnName) {
            //     if (isset($_POST[$columnName])) {
            //         $data[$columnName] = $_POST[$columnName];
            //     } else {
            //         show($data);
            //         die("Missing data for column: $columnName");
            //     }
            // }
            
        }
        $this->view('ticke', $result, $input);

    }
}




?>