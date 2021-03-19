<h1> <?php    echo $page_title;?></h1>
   <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- invoice list -->
                    <section class="invoice-list-wrapper section">
                        <!-- create invoice button-->
                        <!-- Options and filter dropdown button-->
                      
                        <!-- create invoice button-->
                        <div class="invoice-create-btn">
                            <a href=<?= base_url('produit/edit/')?> class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">Ajouter un produit</span>
                            </a>
                        </div>
                 
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                <thead>
                                    <tr>
                                        <!-- data table responsive icons -->
                                        
                                        <!-- data table checkbox -->
                                        
                                        
                                        <th>Nom Produit</th>
                                        <th>Nom vendeur</th>
                                        <th>Categorie </th>                             
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Prix</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>                                 
                                <?php if(isset($tableProduit)):
                                    foreach($tableProduit as $produit):
                                        $vendeur= $tableAuteur->where('user_id',$produit["IDVendeur"])->first();  
                                        ?>
                                        <tr><a href="<?= base_url("Home/Detail/".$produit["ID"]) ?>">
                                            <td><span class="invoice-amount"><?= $produit["NomProduit"] ?></span></td>
                                            <td><span class="invoice-amount"><?= $vendeur["user_name"] ?></span></td>                                      
                                            <td><span class="invoice-amount"><?= $produit["Categorie"] ?></span></td>
                                            <td><span class="invoice-amount"><?= $produit["Image"] ?></span></td>
                                            <td><span class="invoice-customer"><?= $produit["Description"] ?></span></td>
                                            <span class="invoice-amount"><?= $produit["Prix"] ?></span>
                                          </a>  
                                        
                                          <td>
                                                <div class="invoice-action">
                                                    <a href=<?= base_url("Produit/edit/".$produit["ID"]) ?> class="invoice-action-edit">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <?php if(!empty($_GET['page'])){ ?>
                                                    <a href=<?= base_url("produit/delete/".$produit["ID"]."/".$_GET['page']) ?> class="invoice-action-view mr-4">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                    <?php }else{?>
                                                        <a href=<?= base_url("Produit/delete/".$produit["ID"]) ?> class="invoice-action-view mr-4">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                <?php } ?>
                                                </div>
                                            </td>
                                        </tr>                                                                                                         
                                    <?php endforeach;
                                    endif;?>
                                                    
                                </tbody>
                            </table>
                            <?= $pager->links() ;?>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               