<?php

class getdiciplinasController extends BaseController {

    public function postData()
    {
       $iddiciplina = Input::get('iddiciplina');
  
      $data2 = DB::select('select * from diciplinas where id=?',array($iddiciplina));
      foreach ($data2 as $key => $data) {
      	
         
      }

        return Response::json($data);
        
    }

}


?>