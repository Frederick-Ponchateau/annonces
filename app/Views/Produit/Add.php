<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Article</title>
  </head>
  <body>

    <?php if($user){?>
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
                        <tr>
                            <td><span class="invoice-amount"><?= $produit["NomProduit"] ?></span></td>
                            <td><span class="invoice-amount"><?= $vendeur["user_name"] ?></span></td>                                      
                            <td><span class="invoice-amount"><?= $produit["Categorie"] ?></span></td>
                            <td><span class="invoice-amount"><?= $produit["Image"] ?></span></td>
                            <td><span class="invoice-customer"><?= $produit["Description"] ?></span></td>
                            <span class="invoice-amount"><?= $produit["Prix"] ?></span>
                            <td>
                                <div class="invoice-action">
                                    <a href=<?= base_url("produit/edit/".$produit["ID"]."/".$produit["IDVendeur"]) ?> class="invoice-action-edit">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <?php if(!empty($_GET['page'])){ ?>
                                    <a href=<?= base_url("produit/delete/".$produit["ID"]."/".$produit["IDVendeur"]."/".$_GET['page']) ?> class="invoice-action-view mr-4">
                                        <i class="material-icons">delete</i>
                                    </a>
                                    <?php }else{?>
                                        <a href=<?= base_url("Produit/delete/".$produit["ID"]."/".$produit["IDVendeur"]) ?> class="invoice-action-view mr-4">
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
    <?php }?>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1>Ajouter votre article</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action=<?= base_url('produit/add')?> method="post" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="InputForLogin" class="form-label">nom</label>
                        <input type="text" name="nom" class="form-control" id="InputForLogin" value="<?= set_value('nom') ?>">
                    </div>
                    <div class="mb-3"> 
                    <select class="form-control form-control-sm" name="categorie">
                    <option value="square">Selectionnez une categorie</option>
                        <?php foreach($tableCategorie as $categorie){
                           ?>
                               
                        
                        <option value= "<?=$categorie["ID"]?>"><?= $categorie["Categorie"]?></option>
                        <?php } ?>
                    </select>
                    </div>
                    <div class="row section">
                        <div class="col s12 m4 l3">
                            <p>Ajouter une image</p>
                        </div>
                        <div class="col s12 m8 l9">
                            <input type="file" id="input-file-now" name='image' class="dropify" data-default-file="" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="InputFordescription" value="<?= set_value('description') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForprix" class="form-label">prix</label>
                        <input type="number" name="prix" class="form-control" id="InputForprix" value="<?= set_value('prix') ?>">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
             
        </div>
    </div>
     
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>