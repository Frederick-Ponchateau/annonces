<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ContactsModel extends Model{
    protected $table = 'user';

    protected $allowedFields = ["ID","Nom","Prenom","Email","Phone","DateCreate"];
}