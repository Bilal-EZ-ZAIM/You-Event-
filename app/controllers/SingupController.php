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
            redirect("login");
        } else {
        }
        
        $this->view('singup', $data);
               

    }
}
