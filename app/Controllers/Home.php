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
	
	
	public function index()
	{/*********** 1- Listing produit */


	 	$data = [
             'page_title' => 'Accueil' ,
   
             'tableProduit' => $this->produitModel->findAll(),
	 		'tableAuteur' => $this->userModel,
		'tableCategorie' => $this->categorieModel,
            'pager' => $this->produitModel->pager,
        ];

		echo("test");
	 	echo view('index', $data);
	 }
	
}
