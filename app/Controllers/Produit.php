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

    $data = [
        'page_title' => 'Accueil' ,

        'tableProduit' => $this->produitModel->findAll(),
        'tableAuteur' => $this->userModel,
        'tableCategorie' => $this->categorieModel->findAll(),
       'pager' => $this->produitModel->pager,
   ];
    echo view('produitAdd',$data);
}



 public function add(){

		/******** Ajout de produit si l'utilisateur est connecté */
		//include helper form
        helper(['form']);
        
        
        //set rules validation form
        $rules = [
            'nom'          => 'required',           
            'categorie'          => 'required',
            'image'          => 'required',
            'description'         => 'required',
            'prix'      => 'required'
        ];
       
        if($this->validate($rules)){
           
            $produit = new ProduitModel();
            $session = session(); 
            $catID= intval($session->get('user_id'));
            
            $dataSave = [
                'NomProduit'    	=> $this->request->getVar('nom'),
                'IDVendeur'    		=> $catID,
                'IDCategorie'    	=> $this->request->getVar('categorie'),
                'Image'     		=> $this->request->getVar('image'),
                'Description'    	=> $this->request->getVar('description'),
                'Prix' 				=> $this->request->getVar('prix')
            ];
            $produit->save($dataSave);
            return redirect()->to('index');
        }else{
            $dataSave['validation'] = $this->validator;
            echo view('produitAdd', $dataSave);
        }
       
      
	 }
     
	 public function edit($id=null){
        /****** Si connecté peut modifier le porduit */
    }
    public function delete($id=null){
        /******* connexion requis *****/

    }
}     