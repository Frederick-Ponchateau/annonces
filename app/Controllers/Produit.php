<?php

namespace App\Controllers;
/********** Model utile *************/
use App\Models\CategorieModel;
use App\Models\ProduitModel;
use App\Models\UserModel;

class Produit extends BaseController
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
public function index(){
    helper(['form']);
    return view('produitAdd');
}



 public function add(){
		/******** Ajout de produit si l'utilisateur est connecté */
		//include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nom'          => 'required',
            'vendeur'          => 'required',
            'categorie'          => 'required',
            'image'          => 'required',
            'description'         => 'required',
            'prix'      => 'required'
        ];
       
        if($this->validate($rules)){
            $produit = new ProduitModel();
            $data = [
                'NomProduit'    	=> $this->request->getVar('nom'),
                'IDVendeur'    		=> $this->request->getVar('vendeur'),
                'IDCategorie'    	=> $this->request->getVar('categorie'),
                'Image'     		=> $this->request->getVar('image'),
                'Description'    	=> $this->request->getVar('description'),
                'Prix' 				=> $this->request->getVar('prix')
            ];
            $produit->save($data);
            return redirect()->to('index');
        }else{
            $data['validation'] = $this->validator;
            echo view('produitAdd', $data);
        }
         
	 }
     
	 public function edit($id=null){
        /****** Si connecté peut modifier le porduit */
    }
    public function delete($id=null){
        /******* connexion requis *****/

    }
}     