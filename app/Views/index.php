<?php
var_dump($tableProduit);
if(isset($tableProduit)){

    foreach($tableProduit as $produit){
        
        echo $produit['ID'];
    }
}
    ?>