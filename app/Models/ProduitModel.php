<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class ProduitModel extends Model{
    protected $table = 'produit';
protected $allowedFields = ['ID','NomProduit','IDVendeur','Categorie','Image','Description','Prix','DateCreate'];
}