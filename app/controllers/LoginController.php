<?php
class Login extends Controller
{
    public function index()
    {
        $data = [];
        if (isset($_POST['sing'])) {
            $data = array(
                "email" => $_POST["email"],
                "mot_de_passe"=> $_POST["pssword"],
            );

            $user = new User;
            $result = $user->where($data);
            $data['result'] = $result;
         if(count($result)> 0){
            redirect("home");
         }

            
        } 

        
            $this->view('login', $data);
               

    }
}

?>