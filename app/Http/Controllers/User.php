<?php
/*
 * @internal
 */
class User extends Controller
{
    public function __conctruct ($email, $password, $id = null, $adress = null,
            $realName = null, $phone = null, $realSurname = null) {
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
            $this->adress = $adress;
            $this->realName = $realName;
            $this->realName = $phone;
            $this->realSurname = $realSurname;
    }
    
    /*
     * @param  array $personaData вида ['свойство' => 'значение',...]
     * @param  request $request содержит get или post запрос с csrf токеном 
     * (Laravel framework) и обрабатывается с помощью модели User
     * @
     */
    public function ChangePersonalData (array $personaData = null, request $request = null){
        if ($personaData != null) {
            
        }
        if ($request != null) {
            
        }
    }
}
