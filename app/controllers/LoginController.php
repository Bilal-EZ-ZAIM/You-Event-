<?php
class Login extends Controller
{
    public function index()
    {
        $data = [];
        if (isset($_POST['signIn'])) {
            $data["email"] = $_POST['email'];
            $data["mot_de_passe"] = $_POST['password'];
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