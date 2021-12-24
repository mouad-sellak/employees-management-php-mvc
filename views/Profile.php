<?php
if (isset($_POST['submit'])) {
    $existUser = new UsersController();
    $existUser->update();
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
                <div class="card card-header bg-dark">
                    <h5><label>Modifier profil</label></h5>
                </div>
                <div class="card-body bg-dark">
                    <a href="<?php BASE_URL; ?>Home" class="btn btn-info mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                            <label for="login" class="form-label">Login*</label>
                            <input type="text" class="form-control" name="login" value="<?php echo $_SESSION['user']->login; ?>">
                            <input type="hidden" name="id" value="<?php echo  $_SESSION['user']->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe*</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $_SESSION['user']->password; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-info">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>