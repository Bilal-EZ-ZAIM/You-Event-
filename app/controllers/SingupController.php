<?php
class Singup extends Controller
{
    public function index()
    {
        $data = [];
        if (isset($_POST['sing'])) {
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'mot_de_passe' => $_POST['password'],
            );
            $user = new User;
            $result = $user->insert($data);
            $data['result'] = $result;
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
