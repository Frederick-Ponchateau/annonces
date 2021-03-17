<?php

namespace App\Controllers;
/********** Model utile *************/
use App\Models\CategorieModel;
use App\Models\ProduitModel;
use App\Models\UserModel;

class Home extends BaseController
{
	/************ Instance des Models */
	/*********** 1- Listing produit */
	public function index()
	{
		return view('welcome_message');
	}
}
