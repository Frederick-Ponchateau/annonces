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
                        <div class="responsive-table">
                            <!-- Form with validation -->

                                <div class="col-12 s12 m6 l6">
                                    <div id="validation" class="card card card-default scrollspy">
                                        <div class="card-content">
                                            <h4 class="card-title">Form with validation</h4>
                                            <form action="<?= base_url('produit/edit/'.$tableProduit["ID"])  ?>" method= "Post" enctype="multipart/form-data">
                                                
                                                <!-- Je cache mon champ(hidden) pour dire que je suis dans le mode modifier -->
                                                <!-- je modifie -->
                                                <?php if(isset($tableProduit["ID"])){  ?>
                                                <input type="hidden" value="update" name='save'>
                                                <?php }else{ ?>
                                                <!-- Je cr un nouvelle enregistrement -->
                                                <input type="hidden" value="create" name='save'>
                                                <?php } ?>



                                                <!-- // Basic Select2  -->
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                       
                                                        <input id="nom" type="text" name="nom" value="<?= $tableProduit['NomProduit']?>" class="validate">
                                                        <label for="nom">Nom Produit</label>
                                                    </div>
                                                </div>

                                                <div class="mb-3"> 
                                                    <select class="form-control form-control-sm" name="categorie">
                                                    <option value="square">Selectionnez une categorie</option>
                                                        <?php foreach($tableCategorie as $categorie){
                                                              $select= "";
                                                              /****************** Je test si mes id sont identique puis j'insère le seclected afin de recupere */
                                                              if($tableProduit['Categorie'] == $categorie["ID"]){
                                                                  $select = 'selected' ;
                                                              }
                                                           ?>
                                                            
                                                        
                                                        <option value= "<?=$categorie["ID"]?>"<?=$select?>><?= $categorie["Categorie"]?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                
                                               
                                                                                            
                                                <!--Default version-->
                                                <div class="row section">
                                                    <div class="col s12 m4 l3">
                                                        <p>Ajouter une image</p>
                                                    </div>
                                                    <div class="col s12 m8 l9">
                                                        <input type="file" id="input-file-now" name='image' class="dropify" data-default-file="" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="material-icons prefix">account_circle</i>
                                                        <input id="description" type="text" name="description" value="<?= $tableProduit['Description']?>" class="validate">
                                                        <label for="description">Description</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="material-icons prefix">account_circle</i>
                                                        <input id="prix" type="number" name="prix" value="<?= $tableProduit['Prix']?>" class="validate">
                                                        <label for="prix">Prix</label>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        </div>        
                    </section>
                        
                </div>
            </div>
        </div>
    </div>
