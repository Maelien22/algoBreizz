<?php
echo $_SESSION['id'];
if (empty($_SESSION['id']) AND empty($_SESSION['username'])):
    
    header('Location: admin-login');

else:
?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></a></li>
				<li class="active">Profil</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
                <?php foreach($info as $infos){ ?>
				<h1 class="page-header">Profil de <?php echo $infos['username']; ?><img  style="margin-left:20px; border-radius:50%;" src="view/back/template/style/admin/assets/alain.jpg" alt="Smiley face" height="100" width="100"></h1>
			</div>
		</div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Informations utilisateur
					</div>
					<div class="panel-body">
						<form role="form" method="post">
                            <div>
                                <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                            </div>
                            <div>
                                <input type="hidden" name="usernamedefault" value="<?php echo $infos['username']; ?>">
                            </div>
                            <div>
                                <input type="hidden" name="emaildef" value="<?php echo $infos['email']; ?>">
                            </div>
				            <div class="form-group">
                                <label>Nom utilisateur</label>
                                <input class="form-control" name="username" type="text" value="<?php echo $infos['username']; ?>">
				            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" type="email" value="<?php echo $infos['email']; ?>">
				            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input class="form-control" name="password1" type="password" placeholder="Nouveau mot de passe">
                                <input class="form-control" style="margin-top:5px;" name="password2" type="password" placeholder="Re-saisir nouveau mot de passe">
				            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </div>
                        </form>
                        <?php } ?>
					</div>
				</div>
			</div>
        </div>
    </div>
        
        




<?php 
endif;
require_once('footer.php');
?>