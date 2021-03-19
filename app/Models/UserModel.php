<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';

    protected $allowedFields = ['user_id','login','user_name','prenom','phone','user_email','user_password','user_created_at'];
}