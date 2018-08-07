
<section id="product" class="mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<img class="card-img-top mt-3" src="assets/img/<?=$this->data->image?>" alt="Card image cap">
				<h5 class="mt-4 text-left mb-3">Raspolozive Boje:</h5>
       			<a href="#"><img class="card-img-top colors mr-1" src="assets/img/53362_BL7778.jpg" alt="Card image cap"></a>
       			<a href="#"><img class="card-img-top colors" src="assets/img/53602_RD6038.jpg" alt="Card image cap"></a>
			</div>
			<div class="col-12 col-md-6 responsive">
				<h3 class="mb-3 text-left"><?=$this->data->name?></h3>
       			<h6 class="text-left border-top border-bottom pt-3 pb-3"><b><?=$this->data->price?> Din.</b></h6>
       			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, unde, voluptatem eum ipsam facilis nemo neque eveniet doloribus, adipisci velit vel. Rerum non aliquid perspiciatis, molestiae adipisci commodi tempore omnis.</p>
       			<h5 class="mt-5 text-left mb-3">Izbor Velicine:</h5>
       			<a href="#"><p class="text-left border d-inline p-2">S</p></a>
       			<a href="#"><p class="text-left border d-inline p-2">L</p></a>
       			<a href="#"><p class="text-left border d-inline p-2">XL</p></a>
       			<h5 class="mt-5 mb-3">Kolicina:</h5>
       			<div class="center mb-5">
	       			<div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                              <span class="glyphicon glyphicon-minus"></span>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
				</div>

       			<a href="#" class="btn btn-outline-dark buyButton mt-3 mr-5">Dodaj U Korpu</a>

			</div>
		</div>
	</div>
</section>

