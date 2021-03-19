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
		$listeProduit = $this->produitModel->orderBy('ID','DESC')->paginate(6);
		$listeAuteur = $this->userModel;
		$listeCategorie = $this->categorieModel->findAll();
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

		echo view('commun/header_site');
	 	echo view('affichage', $data);
		 echo view('commun/footer_site');
	 }
	public function detail($idProduit=null){

		$listeAuteur = $this->userModel;
		$listeCategorie = $this->categorieModel;
		/******Requete selection 1 produt pour avoir tout les details ********/
		$listeProduit = $this->produitModel->where("ID",$idProduit)->first();
		/*********************************************
         * * exemple de passage de variable a une vue
         * * Data view admin artiste 
         *********************************************/ 
		$data = [
			'page_title' => 'Categorie' ,
			'tableAuteur' => $listeAuteur,
			'tableProduit' => $listeProduit,
	   'tableCategorie' => $listeCategorie,
		   'pager' => $this->produitModel->pager,
	   ];

   
		echo view('Produit/Detail', $data);
	}
	public function categorie($idCategorie=null){
		$listeAuteur = $this->userModel;
		$listeCategorie = $this->categorieModel;
		/********** selection les produits par categorie */
		$listeProduit= $this->produitModel->where('Categorie',$idCategorie)->orderBy('ID','DESC')->paginate(6);	
		
	/*********************************************
         * * exemple de passage de variable a une vue
         * * Data view admin artiste 
         *********************************************/ 
	 	$data = [
             'page_title' => 'Categorie' ,
   
             'tableProduit' => $listeProduit,
		'tableCategorie' => $listeCategorie,
            'pager' => $this->produitModel->pager,
        ];

	
	 	echo view('index', $data);

	}
}
