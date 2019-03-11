<?php

class getgimnasioController extends BaseController {

    public function postData()
    {
       $paciente_id = Input::get('paciente_id');
       $paciente = Pacientes::find($paciente_id);
       $gim_id = Input::get('gim_id');
       $gim = Gimnasio::find($gim_id);
       $dici = Diciplinas::find($gim->idDiciplina);

       
     
        
        $data = array(
            'success' => true,
            'id' => $paciente_id,
            'gim' => $gim_id,
            'name' => $paciente->nombre,
            'apaterno' => $paciente->apellidop,
            'amaterno' => $paciente->apellidom,
            'edad' => $paciente->edad,
            'tel' => $paciente->tel,
            'cel'=> $paciente->cel,
            'mail' => $paciente->mail,
            'date' => $gim->inscripcion,
            'enddate' => $gim->finsub,
            'pago' => $gim->pago,
            'diciid' =>$dici->id,
            'diciname' => $dici->nombre

        );
        
        return Response::json($data);
        
    }

}


?>