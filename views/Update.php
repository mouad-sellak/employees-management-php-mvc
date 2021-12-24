<?php
if (isset($_POST['id'])) {
    $existEmploye = new EmployesController();
    $employe= $existEmploye->readEmploye();
}
else{
    Redirect::to('Home');
}
if (isset($_POST['submit'])) {
    $existEmploye = new EmployesController();
    $existEmploye->updateEmploye();
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
                <div class="card card-header bg-dark"><h5><label>Modifier un employé</label></h5></div>
                <div class="card-body bg-dark">
                    <a href="<?php BASE_URL; ?>Home" class="btn btn-info mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom*</label>
                            <input type="text" class="form-control" name="nom" value="<?php echo $employe->nom; ?>">
                            <input type="hidden" name="id" value="<?php echo $employe->id; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom">Prénom*</label>
                            <input type="text" class="form-control" name="prenom" value="<?php echo $employe->prenom; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="departement">Département*</label>
                            <input type="text" class="form-control" name="departement" value="<?php echo $employe->departement; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="poste">Poste*</label>
                            <input type="text" class="form-control" name="poste" value="<?php echo $employe->poste; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dateEmbauche">Date Embauche*</label>
                            <input type="date" class="form-control" name="dateEmbauche" value="<?php echo $employe->date_emb; ?>">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="status">Statut*</label>
                            <select class="form-control" name="statut">
                                <option value="1" <?php echo $employe->statut ? "selected":""; ?>  >Active</option>
                                <option value="0" <?php echo !$employe->statut ? "selected":""; ?> >Résilié</option>
                            </select>
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