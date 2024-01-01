<?php
class Home extends Controller
{



    public function index()
    {
        $user = new User;
        $eventes = new Eve;
        $table = $user->getTable();
        $toutEventes = $eventes->findAll();
        // $join = $eventes->dynamicJoin($table ,'idU','id');
        
        
        if(count($toutEventes) > 0){
            $this->view('home', $toutEventes);
        }else{
            $this->view('home');
        }
        
    }

}
?>