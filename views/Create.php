<?php
if (isset($_POST['submit'])) {
    $newEmploye = new EmployesController();
    $newEmploye->createEmploye();
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
                <div class="card card-header bg-dark"><h5><label>Ajouter un employé</label></h5></div>
                <div class="card-body bg-dark">
                    <a href="<?php BASE_URL; ?>Home" class="btn btn-info mb-2"><i class="fa fa-home"></i></a>
                    <form method="post">
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom*</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom">Prénom*</label>
                            <input type="text" class="form-control" name="prenom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="departement">Département*</label>
                            <input type="text" class="form-control" name="departement">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="poste">Poste*</label>
                            <input type="text" class="form-control" name="poste">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dateEmbauche">Date Embauche*</label>
                            <input type="date" class="form-control" name="dateEmbauche">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="status">Statut*</label>
                            <select class="form-control" name="statut">
                                <option value="1">Active</option>
                                <option value="0">Résilié</option>
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