<?php

class getuserController extends BaseController {

    public function postData()
    {
       $user_id = Input::get('user_id');
  
       $user = User::find($user_id);
       
     
        
        $data = array(
            'success' => true,
            'id' => $user_id,
            'name' => $user->nombre,
            'username' => $user->username,
            'nivel' => $user->nivel
            
        );
        
        return Response::json($data);
        
    }

}


?>