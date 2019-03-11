<?php

class getpacienteController extends BaseController {

    public function postData()
    {
       $paciente_id = Input::get('paciente_id');
  
      $data2 = DB::select('select * from pesaje where idPaciente = ?', array($paciente_id));
      foreach ($data2 as $key => $value) {
          $data = $value;
      }
       

        return Response::json($data);
        
    }

}


?>