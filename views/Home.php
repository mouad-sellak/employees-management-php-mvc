<?php
if(isset($_POST['find'])){
$data = new EmployesController();
$employes = $data->findEmployes();
}
else{
$data = new EmployesController();
$employes = $data->readAllEmployes();
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body bg-dark">
                    <a href="<?php BASE_URL;?>Create" title="Ajoute employé" class="btn btn-primary mb-2"><i class="fa fa-plus"></i></a>
                    <a href="<?php BASE_URL; ?>Home" title="Home" class="btn btn-primary ml-2 mb-2"><i class="fa fa-home"></i></a>
                    <a href="<?php BASE_URL; ?>Profile" title="<?php echo $_SESSION['user']->login; ?>" class="btn btn-primary ml-2 mb-2"><i class="fa fa-user"></i></a>
                    <a href="<?php BASE_URL; ?>Logout" title="Déconnexion" class="btn btn-primary ml-2 mb-2"><i class="fas fa-sign-out-alt"></i></a>
                    <form method="POST" class="float-right d-flex flex-row">
                        <input type="text" class="form-control" name="search" value="<?php echo isset($_POST['search']) ? $_POST['search']:"" ?>" placeholder="Rechercher" >
                        <button class="btn btn-primary " type="submit" name="find"  ><i class="fa fa-search"></i></button>                  
                    </form>
                    <table class="table table-dark  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nom & Prénom</th>
                                <th scope="col">Département</th>
                                <th scope="col">Poste</th>
                                <th scope="col">Date Embauche</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php foreach ($employes as $employe):?>
                            <tr>
                                <td><?php echo $employe['nom'].' '.$employe['prenom']; ?></td>
                                <td><?php echo $employe['departement']; ?></td>
                                <td><?php echo $employe['poste']; ?></td>
                                <td><?php echo $employe['date_emb']; ?></td>
                                <td><?php echo $employe['statut']==1 ?  "<span class='badge badge-success' >Active</span>" :  "<span class='badge badge-danger' >Resilié</span>"; ?></td>                                  
                                <td class="d-flex flex-row" >
                                    <form method="post" action="Update">
                                        <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
                                        <button type="submit" class="btn btn-sm btn-success "><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form class="ml-2" method="post" action="Delete">
                                        <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
                                        <button  type="submit" class="  btn  btn-sm btn-danger  "><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>