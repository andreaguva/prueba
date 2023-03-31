<?php

class User extends paneles{

    private $nombre;
    private $username;

    public function userExists($user, $pass){
       // $md5pass =md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email =:user AND password =:pass');
        $query->execute(['user'=> $user, 'pass'=> $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }

     }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email =:user');
        $query->execute(['user'=>$user]);

        foreach($query as $currentUser){
            $this->nombre = $currentUser['nombre'];
            $this->email = $currentUser['email'];
            

        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}
?>