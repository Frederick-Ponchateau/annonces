<?php 

    
    $vendeur= $tableAuteur->where('user_id',$tableProduit['IDVendeur'])->first(); 
    $categorie= $tableCategorie->where('ID',$tableProduit["Categorie"])->first();  
 
    echo $tableProduit["NomProduit"]."\n";
 echo $tableProduit["Image"];
    echo $vendeur["login"]."\n";
    echo $vendeur["user_name"]."\n";
    echo $categorie["Categorie"]."\n";
    echo $tableProduit["Description"]."\n";
    $session = session(); 

    $userID= $session->get('user_id');
if($tableProduit["IDVendeur"] == $userID){?>

    <div class="invoice-action">
    <a href=<?= base_url("Produit/edit/".$tableProduit["ID"]) ?> class="invoice-action-edit">
        <i class="material-icons">edit</i>
   
  
        <a href=<?= base_url("Produit/delete/".$tableProduit["ID"].$tableProduit["IDVendeur"]) ?> class="invoice-action-view mr-4">
        <i class="material-icons">delete</i>
    </a>

</div>
<?php } ?>



?>