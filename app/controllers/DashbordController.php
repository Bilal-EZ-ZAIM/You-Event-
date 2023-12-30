<?php


class Dashbord extends Controller
{
    public function index()
    {
      

        // Assuming form data is submitted
        $user = new User;
        $result = $user->findAll();
        $data['result'] = $result;
        if(isset($_POST['updit'])) {
            $data = array( 
            "id" => $_POST['id'],
            "nom" => $_POST['editedName'],
            "prenom" => $_POST['editedPrenom'],
            "email" => $_POST['editedEmail'],
            "mot_de_passe" => 12345,
            "role_id" => $_POST['editedRole']
        );
            $id= $_POST['id'];
            show($data);
            $result = $user->update($data , $id  );
            $data['result'] = $result;
        } else {
        }
       
        $this->view('Dashbord', $data);
               

    }
}