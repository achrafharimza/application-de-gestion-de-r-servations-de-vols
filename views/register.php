<?php 
	if(isset($_POST['submit'])){
		$createUser = new UsersController();
		$createUser->register();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-6 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-header">
					<h3 class="text-center">Inscription</h3>
				</div>
				<div class="card-body bg-light">
			      	<form method="post" class="mr-1">
			      		<div class="form-group">
				      		<input type="text" name="fullname" placeholder="Nom & Prénom" class="form-control">
				      	</div>
			      		<div class="form-group">
				      		<input type="email" name="email" placeholder="email" class="form-control">
				      	</div>
				      	<div class="form-group">
				      		<input type="phone" name="phone" placeholder="phone nuber" class="form-control">
				      	</div>
						  <div class="form-group">
				      		<input type="password" name="psd" placeholder="Mot de passe" class="form-control">
				      	</div>
			      		<button name="submit" class="btn btn-sm btn-primary">Inscription</button>
			      	</form>
				</div>
				<div class="card-footer">
					<a href="login" class="btn btn-link">Connexion</a>
				</div>
			</div>
		</div>
	</div>
</div>