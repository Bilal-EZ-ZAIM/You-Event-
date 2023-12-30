<?php
class Home extends Controller
{



    public function index()
    {
        $eventes = new Eve;
        $toutEventes = $eventes->findAll();
        if(count($toutEventes) > 0){
            $this->view('home', $toutEventes);
        }else{
            $this->view('home');
        }
        
    }

}
?>