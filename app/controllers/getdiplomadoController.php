<?php

class getdiplomadoController extends BaseController {

    public function postData()
    {
       $paciente_id = Input::get('paciente_id');
       $paciente = Pacientes::find($paciente_id);
       $diplo_id = Input::get('diplo_id');
       $diplo = Diplomado::find($diplo_id);
       $dici = Diciplinas::find($diplo->idDiciplina);

       
     
        
        $data = array(
            'success' => true,
            'id' => $paciente_id,
            'diplo' => $diplo_id,
        'name' => $paciente->nombre,
        'apaterno' => $paciente->apellidop,
        'amaterno' => $paciente->apellidom,
        'edad' => $paciente->edad,
        'tel' => $paciente->tel,
        'cel'=> $paciente->cel,
        'mail' => $paciente->mail,
        'date' => $diplo->inscripcion,
        'enddate' =>$diplo->finsub,
        'pago' => $diplo->pago,
        'diploid' =>$dici->id,
        'diploname' => $dici->nombre

        );
        
        return Response::json($data);
        
    }

}


?>