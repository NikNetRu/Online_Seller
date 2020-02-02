<?php
/*
 * @internal 
 */
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
    public function changePersonalData (request $request){
            $personalData = [];
            $inputs = $request->except(['_token','staticEmail']);
            $inputsKeys = array_keys($inputs);
            foreach ($inputsKeys as $input) {
                $key = $input;//inputRealName, inputrealSurname, etc
                $value = $request->input($key);
                //изменяем только те значения, которые изменил пользователь
                if ($value != null) {
                $personalData[$key] = $value;
                }
            }
        $id = Auth::user()->id;
        User::changePersonalData($id, $personalData);
        return redirect('userPage');
    }
    
    public function generateUserPage () {
        return view('layouts.userPage');
    }
    
    
    
}
