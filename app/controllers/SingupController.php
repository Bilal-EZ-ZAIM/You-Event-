<?php
class Singup extends Controller
{
    public function index()
    {
        $user = new User;
        $col = $user->getColomn();
        $data = [];
        if (isset($_POST['signUp'])){
            foreach($col as $row){
                if(isset($_POST[$row])){
                    $data[$row] = $_POST[$row];
                }else{
                    die("Missing data for column : $row" );
                }
            }
            $user->insert($data);
            redirect("login");
        }
        $this->view('singup', $data , $col);
    }
}
