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
    $user=false;
    $listeProduit = $this->produitModel->orderBy("NomProduit",'ASC')->paginate(10);
    $session = session(); 
    $userID= $session->get('user_id');
    // if($idVendeur == $userID){   
    //     $user = true;     
    //     $listeProduit = $this->produitModel->where("IDVendeur",$idVendeur)->orderBy('ID','DESC')->paginate(6);
    //     }
    helper(['form']);

    $data = [
        'page_title' => 'Accueil' ,
        'tableProduit' =>$listeProduit,
        'tableAuteur' => $this->userModel,
        'tableCategorie' => $this->categorieModel->findAll(),
       'pager' => $this->produitModel->pager,
   ];
    echo view('Produit/list',$data);
}



 public function add(){

		/******** Ajout de produit si l'utilisateur est connecté */
		//include helper form
        // helper(['form']);
        // $session = session(); 
        
        //set rules validation form
        // $rules = [
        //     'nom'          => 'required',           
        //     'categorie'          => 'required',
        //     'image'          => 'required',
        //     'description'         => 'required',
        //     'prix'      => 'required'
        // ];
       
        // if($this->validate($rules)){                      
            
        //     $userID= intval($session->get('user_id'));
        //     $dataSave = [
        //         'NomProduit'    	=> $this->request->getVar('nom'),
        //         'IDVendeur'    		=> $userID,
        //         'Categorie'    	=> $this->request->getVar('categorie'),
        //         'Description'    	=> $this->request->getVar('description'),
        //         'Prix' 				=> $this->request->getVar('prix')
        //     ];
           
            // $file = $this->request->getFile('image');
           
            // $newName = $file->getRandomName();
            
            // $file->move(ROOTPATH."public/app-assets/images",$newName);
            // if($file){
            //     $data_save["Image"]= $newName;
            //     /****************** Réalisation de la miniature ************/
            //     $image = \Config\Services::image()
            //     ->withFile(ROOTPATH."public/app-assets/images/".$newName)
            //     ->fit(100, 100, 'center')
            //     ->save(ROOTPATH."public/app-assets/images/min/".$newName);
            // }
        //     $this->produitModel->save($dataSave);
        //     return redirect()->to('index');
        // }else{
        //     $dataSave['tableCategorie'] = $this->categorieModel->findAll();
        //     $dataSave['validation'] = $this->validator;
        //     echo view('produit/add',$dataSave);
        // }
       
      
}
     
	 public function edit($id=null){
        /****** Si connecté peut modifier le porduit */
        $session = session(); 
        $userID= $session->get('user_id');
        $user=false;
        $listeProduit = $this->produitModel->where("ID",$id)->first();
        //dd($listeProduit);
        $listeUser = $this->userModel;
        $listeCategorie = $this->categorieModel->findAll();
          /*********Je controle si je viens du formulaire ******/
        if(!empty($this->request->getVar('save'))){

            $save = $this->request->getVar('save');
           
            $rules = [
                'nom'          => 'required',           
                'categorie'          => 'required',
                
                'description'         => 'required',
                'prix'      => 'required'
            ];
               //dd($this->request->getVar('image'));
            if($this->validate($rules)){
                
                $dataSave = [
                    'NomProduit'    	=> $this->request->getVar('nom'),
                    'IDVendeur'    		=> $userID,
                    'Categorie'    	=> $this->request->getVar('categorie'),
                    'Description'    	=> $this->request->getVar('description'),
                    'Prix' 				=> $this->request->getVar('prix')
                ];
                $file = $this->request->getFile('image');
                $newName = $file->getRandomName();
                $file->move(ROOTPATH."public/app-assets/images",$newName);
                    if($file){
                        
                        $dataSave["Image"]= $newName;
                        //dd($dataSave);
                    }
                if($save == 'update'){
                    $test=  $this->produitModel->where("ID",$id)
                    ->set($dataSave)
                    ->update();

                }else{
                    
                    $this->produitModel->save($dataSave);
                    dd($dataSave);
                    return redirect()->to('/Produit');
                }
            }  
            return redirect()->to('/Produit');
        }

        $ajout= [
            'ID'     => intval($id),
            
        ];   
        $data = [
            'page_title' => 'Accueil' ,
            'user' => $user,
            'tableProduit' =>$listeProduit,
            'tableAuteur' => $listeUser,
            'tableCategorie' => $listeCategorie,
           'pager' => $this->produitModel->pager,
       ];
     // dd($data);
        echo view('produit/Edit', $data);
    }
    public function delete($id=null,$idVendeur=null,$page=null){
        /******* connexion requis *****/
        // $session = session(); 
        // $userID= $session->get('user_id');
        // if($idVendeur == $userID){        
            $this->produitModel->where('ID', $id)->delete();
            if(!empty($page)){
                return redirect()->to('/produit/index/'.$idVendeur.'/?page='.$page);
            }
        //}
        return redirect()->to('/Produit');

    }
}     