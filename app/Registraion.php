<?php

namespace App;
//https://github.com/blizzerand/Laravel5.5_And_React_demo
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;  
class Registraion extends Model
{
	protected $fillable = ['username', 'email', 'phone_number', 'type'];
    
   /* public function create($data)
    {

       	$Registraion =  new Registraion();
    	$Registraion ->username  = $data['username'];
    	$Registraion ->email = $data['email'];
    	$Registraion ->phone_number =$data['phone_number'];
    	$Registraion ->type = $data['type'];
    	$Registraion -> save();
    }

   
public function update_record($data , $id)
    {
       // $Registraion =  new Registraion();
        $Registraion = Registraion::find($id);
        $Registraion ->username  = $data['username'];
        $Registraion ->email = 'f';
        $Registraion ->phone_number =1;
        $Registraion ->type = 'buyer';
        $Registraion -> save();

       // $data1->update($data);
        
    }
    public function list($id='')
    {
        if($id != '')
        {
          $r =   Registraion :: find($id);
        }
        else
        {
        $Registraion =  new Registraion();
        $r = $Registraion->all();
        }
        dd($r);
    }*/
}
