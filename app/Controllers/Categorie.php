<?php

namespace App\Controllers;
/********** Model utile *************/
use App\Models\CategorieModel;

use App\Models\UserModel;

class Categorie extends BaseController
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
}