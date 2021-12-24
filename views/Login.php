<?php
if(isset($_POST['submit'])){
$user = new UsersController();
$user->login();
}
?>
<style>
    label {
        color: white;
    }
</style> 
<div class="container ">
    <div class="row mt-4 ">
        <div class="col-md-6 mx-auto" style="margin-top:70px;" >
            <div class="card ">
                <div class="card-header bg-dark"><h3 class="card-title text-center text-white">Connexion</h3></div>
                <div class="card-body bg-dark">
                    <form method="POST" class="mr-1">
                        <div class="form-group">
                            <label for="login" class="form-label">Login*</label>
                            <input type="text" class="form-control" name="login"  >
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe*</label>
                            <input type="password" class="form-control" name="password"  >
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Valider</button>
                        <a href="<?php echo BASE_URL; ?>Register" class="btn btn-link">Inscription</a>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>