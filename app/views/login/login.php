


<section id="register">
	<div class="container">
		<h1 class="border-bottom pb-4">Registruj se</h1>
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
			<?php 
					if(Session::exists('user_id')){
						echo "Ulogovan si";
					}else{
			?>

				<form method='post' action="<?= Configuration::BASE_URL?>login">
				    <div class="form-group">
				    <label for="exampleFormControlInput1">Username</label>
				    <input type="text" name='username' class="form-control" id="exampleFormControlInput1" placeholder="" required pattern='^[a-z0-9]{4,}$'>
				 	</div>
				 	
				 	
				 	<div class="form-group">
				 		<label for="exampleFormControlInput1">Password</label>
				 		<input type="password" name='password' class="form-control" id="exampleFormControlInput1" placeholder="ime@primer.com" required pattern='^.{6,}$'>
				 	</div>
				 	
				 	<button type="submit" class="btn btn-success mt-3" id="custombutton">Loguj se</button>
				</form>
			<?php
					}
			?>

			</div>
			<div class="col-md-2">
			</div>
		</div>		
	</div>
</section>


