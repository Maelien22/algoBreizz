<?php 
$title = 'Mes Catégories';
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
				<h1 class="page-header">Mes Catégories</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
        <?php if(isset($_GET['m'])): ?>
                    <div class="panel-heading">Modifier la Catégorie</div>
					<div class="panel-body">
                        <form role="form" method="post">
				            <div class="col-md-6"> 
								<div class="form-group">
									<label>Titre</label>
									<input type="text" class="form-control" placeholder="Titre de la catégorie" name="nom">
								</div>
                                <div class="form-group">
									<label>Catégorie parent</label>
									<select class="form-control" name="id_parent">
                                        <option value="0"></option>
                                        <?php foreach($ca as $cate): ?>
										<option value=" <?php echo $cate['id']; ?>"> <?php echo $cate['nom']; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
                            </div>
				            <div class="col-md-6">
                                <div class="form-group">
									<label>Description</label>
									<textarea class="form-control" rows="3" name="description"></textarea>
								</div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Modifier la Catégorie</button>
                                </div>
                            </div>
                        </form>
                    </div>
        <?php else:?> 
					<div class="panel-heading">Ajouter une Catégorie</div>
					<div class="panel-body">
                        <form role="form" method="post">
				            <div class="col-md-6"> 
								<div class="form-group">
									<label>Titre</label>
									<input type="text" class="form-control" placeholder="Titre de la catégorie" name="nom">
								</div>
                                <div class="form-group">
									<label>Catégorie parent</label>
									<select class="form-control" name="id_parent">
                                        <option value="0"></option>
                                        <?php foreach($ca as $cate): ?>
										<option value=" <?php echo $cate['id']; ?>"> <?php echo $cate['nom']; ?></option>
                                        <?php endforeach; ?>
									</select>
								</div>
                            </div>
				            <div class="col-md-6">
                                <div class="form-group">
									<label>Description</label>
									<textarea class="form-control" rows="3" name="description"></textarea>
								</div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Ajouter une catégorie</button>
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
					<div class="panel-heading">Mes Catégories</div>
					<div class="panel-body">
						<table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th data-field="name"  data-sortable="true">Nom</th>
						        <th data-field="price" data-sortable="true">Description </th>
						    </tr>
						    </thead>
                            <tbody>           
                            <?php foreach ($cat as $categ): ?>
                                <tr>
                                    <td><?= $cat['id'] ?></td>
                                    <td><a href=""><?= $cat['nom'] ?></a></td>
                                    <td><?= $cat['description'] ?></td>
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