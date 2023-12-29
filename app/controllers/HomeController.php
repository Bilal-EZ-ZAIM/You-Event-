<?php
class Home extends Controller
{




    public function index()
    {
        $user = new User;
        $eve = new Eve;
        $input = $user->getColomn();
        $result = $user->findAll();


        if (isset($_POST["insert"])) {
            $data = [];
            foreach ($input as $columnName) {
                if (isset($_POST[$columnName])) {
                    $data[$columnName] = $_POST[$columnName];
                } else {
                    die("Missing data for column: $columnName");
                }
            }
            $user->insert($data);
            show($data);
        }
        if (isset($_POST["update"])) {
            $userIDToUpdate = 17;
            foreach ($input as $columnName) {
                if (isset($_POST[$columnName])) {
                    $data[$columnName] = $_POST[$columnName];
                } else {
                    die("Missing data for column: $columnName");
                }
            }
            $user->update($userIDToUpdate, $data);
            echo "Update successful!";
        } else {
        }
        
        $this->view('home', $result, $input);
    }

}
?>