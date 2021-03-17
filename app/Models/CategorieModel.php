<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ContactsModel extends Model{
    protected $table = 'categorie';
    protected $allowedFields = ['ID','Categorie','DateCategorie'];
}