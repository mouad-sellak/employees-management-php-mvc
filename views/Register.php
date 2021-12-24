<?php
if(isset($_POST['register'])){
$user = new UsersController();
$user->register();
}
?>
<style>
    label {
        color: white;
    }
</style> 
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header bg-dark"><h3 class="card-title text-center text-white">Inscription</h3></div>
                <div class="card-body bg-dark">
                    <form method="POST" class="mr-1">
                        <div class="form-group">
                            <label for="nom" class="form-label">Nom*</label>
                            <input type="text" class="form-control" name="nom" required  >
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="form-label">Prénom*</label>
                            <input type="text" class="form-control" name="prenom" required  >
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" name="email" required  >
                        </div>
                        <div class="form-group">
                            <label for="login" class="form-label">Login*</label>
                            <input type="text" class="form-control" name="login" required  >
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe*</label>
                            <input type="password" class="form-control" name="password" required  >
                        </div>
                        <!-- <div class="form-group">
                            <label for="passwordAgain" class="form-label">Confirmer mot de passe*</label>
                            <input type="password" class="form-control" name="passwordAgain"  >
                        </div> -->
                        <button type="submit" name="register" class="btn btn-primary">Valider</button>
                        <a href="<?php echo BASE_URL; ?>Login " class="btn btn-link">Connexion</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>