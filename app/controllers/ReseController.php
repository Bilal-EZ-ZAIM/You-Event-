<?php

class Rese extends Controller
{

    public function index()
    {
        $Reser = new Reservation;
        $user = new User;
        $ticke = new Tickets;
        // $use->insert([ null,"biall","bilalza@gmil.com","12345678","user"]);
        $eve = new Eve;
        
        $table = $user->getTable();
        // $result = $Reser->dynamicJoin($table, 'idU', 'id');
        // $joins = [
        //     ['table' => $user->getTable(), 'idUser' => $_SESSION['id']]
        // ];
        $joins = [
            [
                'table' => $user->getTable(),
                'currentTableColumn' => 'idUser',
                'joinColumn' => 'id',
            ],
            [
                'table' => $eve->getTable(),
                'currentTableColumn' => 'idEvent',
                'joinColumn' => 'id',
            ],
            [
                'table' => $ticke->getTable(),
                'currentTableColumn' => 'idTicket',
                'joinColumn' => 'id',
            ]
        ];



        // $joins = [
        //     ['table' => $user->getTable(), 'idUser' => $_SESSION['id'], 'joinColumn' => 'column2'],
        //     ['table' => 'table3', 'currentTableColumn' => 'column3', 'joinColumn' => 'column4'],
        // ];


        $result = $Reser->dynamicMultiJoin($joins);

        $this->view('rese',$result);

    }
}




?>