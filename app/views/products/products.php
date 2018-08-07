

<section id="shop">
	<div class="container-fluid">
		<div class="row sidebar" style="min-height:700px;">
			<div class="col-md-2 sidebarShop">
				<div class="row">
					<div class="col-12 pt-5">
						<h1>MAJICE</h1>
							<ul class="list-group">
						  <?php
								require_once "app/models/CategoriesModel.php";
								$categories = CategoriesModel::getAll();
								
								foreach($categories as $cat){ 
						?>
							<a href="<?= Configuration::BASE_URL?>product/<?php echo $cat->category_id?>"><li class="list-group-item"><?=$cat->name?></li></a>
							
						<?php
							}
						?>
						</ul>
							<div class="btn-group d-lg-none mb-4 mr-2">
							  <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Velicina
							  </button>
							  <div class="dropdown-menu pl-2">
								<label class="sidebarLabel"><input type="checkbox" name="" class="mr-2">XS</label><br>
								<label class="sidebarLabel"><input type="checkbox" name="" class="mr-2">S</label><br>
								<label class="sidebarLabel"><input type="checkbox" name="" class="mr-2">L</label><br>
								<label class="sidebarLabel"><input type="checkbox" name="" class="mr-2">XL</label><br>
								<label class="sidebarLabel"><input type="checkbox" name="" class="mr-2">XXL</label><br>
							  </div>
							</div>
					</div>
				</div>
			</div>
			<div class="col-md-10 products pt-5">
				<div class="selectByButton clearfix border-bottom mb-5">
					<div class="btn-group dropleft mb-4 float-right">
					  <button class="btn btn-outline-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Sortiraj po:
					  </button>
					  <div class="dropdown-menu">
					      	<a class="dropdown-item" href="#">Ceni Rastuce</a>
						    <a class="dropdown-item" href="#">Ceni Opadajuce</a>
						    <a class="dropdown-item" href="#">Nazivu A-Z</a>  
								
					  </div>
					</div>
					<form method='post' action="<?= Configuration::BASE_URL?>product/<?php echo $cat->category_id?>"> 
							<input type='text' name='search' >
							<button class='btn btn-primary'>Search</button>
				</form>
				</div>
				<div class="row text-center">
				<?php
					if(empty($this->data)){
						echo "Trenutno nemamo trazeni proizvod na raspolaganju";
					}else{
						foreach($this->data as $product){
					?>
					<div class="col-md-2 col-sm-3 col-6 mb-3">
						<div class="card ml-auto mr-auto">
							<div class="item">
						  		<a href="<?=Configuration::BASE_URL?>details/<?=$product->product_id?>"><img class="card-img-top" src="assets/img/<?=$product->image?>" alt="Card image cap"></a>
						  	</div>
						  	<div class="card-body p-0">
						    <a href="product.php" class="card_title"><h6 class="card-title text-left ml-2"><?=$product->name?></h6></a>
						    <p class="card-text text-left ml-2 mb-0"><b><?=$product->price?> Din.</b></p>
						    <a href="#" class="btn btn-outline-dark  mb-2">Dodaj u korpu</a>
						  </div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<div class="pagination">
			<nav aria-label="Page navigation example" class="ml-auto mr-auto mt-5 mb-3">
			  <ul class="pagination ">
			    <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
			    <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
			    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
			    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
			    <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
			  </ul>
			</nav>
		</div>
	</div>
</section>

