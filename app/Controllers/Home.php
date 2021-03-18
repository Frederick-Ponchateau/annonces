<?php

namespace App\Controllers;
/********** Model utile *************/
use App\Models\CategorieModel;
use App\Models\ProduitModel;
use App\Models\UserModel;

class Home extends BaseController
{
	public $produitModel = null;
	public $categorieModel = null;
	public $userModel = null;

	/*********** Intance des models *************/
	public function __construct(){
		$this->produitModel = new ProduitModel();
		$this->categorieModel = new CategorieModel();
		$this->userModel = new UserModel();
	}
	
	
	public function index($typeSearch=null,$element=null)
	{/*********** 1- Listing produit */
		$listeProduit = $this->produitModel->orderBy('ID','DESC')->paginate(6);
		$listeAuteur = $this->userModel;
		$listeCategorie = $this->categorieModel;
		












	/*********************************************
         * * exemple de passage de variable a une vue
         * * Data view admin artiste 
         *********************************************/ 
	 	$data = [
             'page_title' => 'Accueil' ,
   
             'tableProduit' => $listeProduit,
	 		'tableAuteur' => $listeAuteur,
		'tableCategorie' => $listeCategorie,
            'pager' => $this->produitModel->pager,
        ];

	
	 	echo view('index', $data);
	 }
	
}
