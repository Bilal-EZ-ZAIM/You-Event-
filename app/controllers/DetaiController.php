<?php

class Detai extends Controller
{

    public function index()
    {
        $user = new User;
        $eve = new Eve;
        $id = $_GET['id'];
        $result = $user->where(['id' => $id]);
        echo $id;
       $this->view('detai', $result);
    }
}




?>