<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Projet Web</title>
		<?php include("inc/meta.php"); ?>
	</head>
	<body>
		<h1>Projet Web</h1>
		<form class="form-horizontal">
		<fieldset>
		<legend>Interface d'authentification</legend>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="login">Identifiant</label>  
		  <div class="col-md-4">
		  <input name="login" class="form-control input-md" id="login" required="" type="text" placeholder="Votre identifiant de session">
		  <span class="help-block">Votre e-mail</span>  
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="password">Mot de passe</label>
		  <div class="col-md-4">
			<input name="password" class="form-control input-md" id="password" required="" type="password" placeholder="Votre mot de passe">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-4 control-label" for="valid"></label>
		  <div class="col-md-4">
			<button name="valid" class="btn btn-primary" id="valid">S'authentifier</button>
		  </div>
		</div>
		</fieldset>
		</form>
		<?php include("inc/script.php"); ?>
	</body>
</html>