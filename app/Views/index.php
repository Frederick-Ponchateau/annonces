<?php
var_dump($tableProduit);


if(isset($tableProduit)){

    foreach($tableProduit as $produit){
        
        echo $produit['ID'];
    }
}
    ?>


    
    
        <?php  if(isset($tableCategorie)):  
            foreach($tableCategorie as $categorie):
            echo $categorie["ID"];?>
            <div>
        <a class="" href="<?= base_url("/home/categorie/".$categorie["ID"]) ?>"><?= $categorie["Categorie"]  ?></a></li>
    </div>  <?php  endforeach;
            endif; ?>
    </ul>
</div>