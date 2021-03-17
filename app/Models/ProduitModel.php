<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ContactsModel extends Model{
    protected $table = 'produit';
    protected $allowedFields = ['ID','NomProduit','IDVendeur','IDCategorie','Description','Prix','DateCreate'];
}