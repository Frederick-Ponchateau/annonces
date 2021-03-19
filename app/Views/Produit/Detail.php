<?php 

    
    $vendeur= $tableAuteur->where('user_id',$tableProduit['IDVendeur'])->first(); 
    $categorie= $tableCategorie->where('ID',$tableProduit["Categorie"])->first();  
 
    echo $tableProduit["NomProduit"]."\n";
 echo $tableProduit["Image"];
    echo $vendeur["login"]."\n";
    echo $vendeur["user_name"]."\n";
    echo $categorie["Categorie"]."\n";
    echo $tableProduit["Description"]."\n";




?>