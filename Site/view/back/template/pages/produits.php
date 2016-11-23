<?php 
$title = 'Mes Produits';
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
				<h1 class="page-header">Mes Produits</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
        <?php if(isset($_GET['m'])): ?>
                    <div class="panel-heading">Modifier le Produit</div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label>Titre</label>
                                           <?php foreach($vueprod as $modif): ?> 
                                            <input type="hidden" value="<?= $modif['num'] ?>" name="num">
                                            <input type="text" class="form-control" value="<?= $modif['nom'] ?>" name="nom">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Catégorie</label>
                                            <select class="form-control" name="cat_id">
                                                <?php foreach($c as $mcat): ?>
                                                <option value=" <?= $mcat['id']; ?>"> <?= $mcat['nom']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Prix HT</label>
                                            <input type="text" class="form-control" value="<?= $modif['prix_ht'] ?>" name="prixht">
                                        </div>
                                        <div class="form-group">
                                            <label>TVA</label>
                                            <input type="text" class="form-control" value="<?= $modif['tva'] ?>" name="tva">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description Courte</label>
                                            <textarea class="form-control" rows="3" name="descrip_courte"><?= $modif['descrip_courte'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="descrip"><?= $modif['descrip'] ?></textarea>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <button type="submit" name="modifier" class="btn btn-primary">Modifier le produit</button>
                                            <button type="submit" name="supprimer" class="btn btn-primary">Supprimer le produit</button>
                                        </div>
                                    </div>
                                </form>
                               
                            </div>
        <?php else:?> 
					<div class="panel-heading">Ajouter un Produit</div>
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
					<div class="panel-heading">Mes Produits</div>
					<div class="panel-body">
						<table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id"  data-sortable="true">ID</th>
						        <th data-field="name"  data-sortable="true">Nom</th>
						        <th data-field="desc_c" data-sortable="true">Description Courte </th>
						        <th data-field="desc" data-sortable="true">Description </th>
						        <th data-field="cat" data-sortable="true">Catégorie </th>
						        <th data-field="tva" data-sortable="true">TVA </th>
						        <th data-field="prixht" data-sortable="true">Prix HT </th>
						        <th data-field="prixttc" data-sortable="true">Prix TTC </th>
						    </tr>
						    </thead>
                            <tbody>           
                            <?php foreach ($p as $prod): ?>
                                <tr>
                                    <td><?= $prod['id'] ?></td>
                                    <td><a href="admin-produit?m=<?= $prod['num'] ?>"><?= $prod['nom'] ?></a></td>
                                    <td><?= $prod['descrip_courte'] ?></td>
                                    <td><?= $prod['descrip'] ?></td>
                                    <td><?= $prod['cat'] ?></td>
                                    <td><?= $prod['tva'] ?>%</td>
                                    <td><?= $prod['prix_ht'] ?></td>
                                    <td><?= $prod['prix_ttc'] ?></td>
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