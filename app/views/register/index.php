<?php
	
?>

<section id="register">
	<div class="container">
		<h1 class="border-bottom pb-4">Registruj se</h1>
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<form method='post' action=<?=Configuration::BASE_URL?>registration>
				    <div class="form-group">
				    <label for="exampleFormControlInput1">Ime i Prezime</label>
				    <input type="text" name='name' class="form-control" id="exampleFormControlInput1" placeholder="" required pattern="^[A-Za-z\'\- ]*$">
				 	</div>
				 	<div class="form-group">
				    <label for="exampleFormControlInput1">Email addresa</label>
				    <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="ime@primer.com" required pattern="[a-z0-9.@\-]*">
				 	</div>
				 	<div class="form-group">
				 		<label for="exampleFormControlInput1">Adresa</label>
				 		<input type="text" name='address' class="form-control" id="exampleFormControlInput1" placeholder="ime@primer.com" required pattern="^[A-z0-9 \-\/.\']*$">
				 	</div>
				 	<div class="form-group">
				 		<label for="exampleFormControlInput1">Broj Telefona</label>
				 		<input type="text" name='br_tel' class="form-control" id="exampleFormControlInput1" placeholder="06..." required pattern='^[0-9+? \/?\-?]{6,14}$'>
				 	</div>
				 	<div class="form-group">
				 		<label for="exampleFormControlInput1">Username</label>
				 		<input type="text" name='username' class="form-control" id="exampleFormControlInput1" placeholder="ime@primer.com" required pattern='^[a-z0-9]{4,}$'>
				 	</div>
				 	<div class="form-group">
				 		<label for="exampleFormControlInput1">Password</label>
				 		<input type="password" name='password' class="form-control" id="exampleFormControlInput1" placeholder="ime@primer.com" required pattern='^.{6,}$'>
				 	</div>
				 	<button type="submit" name='but' class="btn btn-success mt-3" id="custombutton">Registruj se</button>
				</form>
			</div>
			<div class="col-md-2">
			</div>
		</div>		
	</div>
</section>


