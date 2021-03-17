<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Register</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1>Sign Up</h1>
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/home/add" method="post">
                <div class="mb-3">
                        <label for="InputForLogin" class="form-label">nom</label>
                        <input type="text" name="nom" class="form-control" id="InputForLogin" value="<?= set_value('nom') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForvendeur" class="form-label">vendeur</label>
                        <input type="text" name="vendeur" class="form-control" id="InputForvendeur" value="<?= set_value('vendeur') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForcategorie" class="form-label">categorie</label>
                        <input type="text" name="categorie" class="form-control" id="InputForcategorie" value="<?= set_value('categorie') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForimage" class="form-label">image</label>
                        <input type="text" name="image" class="form-control" id="InputForimage" value="<?= set_value('image') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Edescription</label>
                        <input type="text" name="description" class="form-control" id="InputFordescription" value="<?= set_value('description') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForprix" class="form-label">prix</label>
                        <input type="number" name="prix" class="form-control" id="InputForprix" value="<?= set_value('prix') ?>">
                    </div>
                   <?php $session = session();
        dd($session);
        echo "Welcome back, ".$session->get('user_name');?>
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