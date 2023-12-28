<?php
class Home extends Controller
{
    public function index()
    {
        $user = new User;
        $eve = new Eve;
        $eve->getColomn();
        $eve->test();
        $result = $user->findAll();
         $user->test();
        $data['result'] = $result;
        
        $this->view('home', $data);
    }
    
}
?>
