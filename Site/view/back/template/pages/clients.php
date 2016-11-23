<?php 
$title = 'Mes Clients';
require_once('header.php');
session_start();
require_once('navbar.php');

echo $_SESSION['id'];
if (empty($_SESSION['id']) AND empty($_SESSION['username'])):
    
    header('Location: admin-login');

else:
?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"><?= $title ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Mes Clients</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
         <?php if(isset($_GET['m'])): ?>
                    <div class="panel-heading">Modifier le Clients</div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                    <div class="col-md-6"> 
                                        <?php foreach($vuecli as $modif): ?> 
                                        <div class="form-group">
                                            <input type="hidden" value="<?= $modif['id'] ?>" name="id">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" value="<?= $modif['nom'] ?>" name="nom">
                                        </div>
                                        <div class="form-group">
                                            <label>Prenom</label>
                                            <input type="text" class="form-control" value="<?= $modif['prenom'] ?>" name="prenom">
                                        </div>
                                        <div class="form-group">  
                                            <label>Email</label>   
                                            <input type="text" class="form-control" value="<?= $modif['email'] ?>" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <textarea class="form-control" rows="3" name="adresse"><?= $modif['adresse'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" class="form-control" value="<?= $modif['telephone'] ?>" name="telephone">
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <button type="submit" name="modifier" class="btn btn-primary">Modifier le client</button>
                                            <button type="submit" name="supprimer" class="btn btn-primary">Supprimer le client</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
        <?php else:?> 
					<!-- <div class="panel-heading">Ajouter un Produit</div>
					<div class="panel-body">
                        <form role="form" method="post">
				            <div class="col-md-6"> 
								<div class="form-group">
									<label>Titre</label>
									<input type="text" class="form-control" placeholder="Titre de la catégorie" name="nom">
								</div>
                                <div class="form-group">
									<label>Catégorie</label>
									<select class="form-control" name="cat_id">
                                        <?php foreach($c as $cat): ?>
										<option value=" <?= $cat['id']; ?>"> <?= $cat['nom']; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
                                <div class="form-group">
									<label>Prix HT</label>
									<input type="text" class="form-control" placeholder="Prix HT" name="prixht">
								</div>
                                <div class="form-group">
									<label>TVA</label>
									<input type="text" class="form-control" placeholder="TVA" name="tva">
								</div>
                            </div>
				            <div class="col-md-6">
                                <div class="form-group">
									<label>Description Courte</label>
									<textarea class="form-control" rows="3" name="descrip_courte"></textarea>
								</div>
                                <div class="form-group">
									<label>Description</label>
									<textarea class="form-control" rows="3" name="descrip"></textarea>
								</div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Ajouter un produit</button>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row --> 

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Nouveaux Clients à Valider</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <thead>
                            <tr>
                                <th data-field="id"  data-sortable="true">ID</th>
                                <th data-field="nom"  data-sortable="true">Nom</th>
                                <th data-field="prenom" data-sortable="true">Prénom</th>
                                <th data-field="email" data-sortable="true">Email</th>
                                <th data-field="adresse" data-sortable="true">Adresse</th>
                                <th data-field="telephone" data-sortable="true">Téléphone</th>
                                <th data-field="Valider" data-sortable="true">Valider</th>
                            </tr>
                            </thead>
                            <tbody>           
                            <?php foreach ($nclients as $ncli): ?>
                                <tr>
                                    <td><?= $ncli['id'] ?></td>
                                    <td><?= $ncli['nom'] ?></td>
                                    <td><?= $ncli['prenom'] ?></td>
                                    <td><?= $ncli['email'] ?></td>
                                    <td><?= $ncli['adresse'] ?></td>
                                    <td><?= $ncli['telephone'] ?></td>
                                    <td><center><a href="admin-clients?v=<?= $ncli['id'] ?>"><img src="view/back/template/style/admin/assets/valider.png" name="valider" style="width:27px; height:27px;" /></a>        <a href="admin-clients?s=<?= $ncli['id'] ?>"><img src="view/back/template/style/admin/assets/refuser.png" name="refuser" style="width:29px; height:29px;" /></a></center></td>
                                 </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Clients</div>
					<div class="panel-body">
						<table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id"  data-sortable="true">ID</th>
						        <th data-field="nom"  data-sortable="true">Nom</th>
						        <th data-field="prenom" data-sortable="true">Prénom</th>
						        <th data-field="email" data-sortable="true">Email</th>
						        <th data-field="adresse" data-sortable="true">Adresse</th>
						        <th data-field="telephone" data-sortable="true">Téléphone </th>
						    </tr>
						    </thead>
                            <tbody>           
                            <?php foreach ($clients as $cli): ?>
                                <tr>
                                    <td><?= $cli['id'] ?></td>
                                    <td><a href="admin-clients?m=<?= $cli['id'] ?>"><?= $cli['nom'] ?></a></td>
                                    <td><?= $cli['prenom'] ?></td>
                                    <td><?= $cli['email'] ?></td>
                                    <td><?= $cli['adresse'] ?></td>
                                    <td><?= $cli['telephone'] ?></td>
                                 </tr>

                            <?php endforeach; ?>
                            </tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
        <?php endif; ?>
    </div>
<?php         
endif;
require_once('footer.php');
?>