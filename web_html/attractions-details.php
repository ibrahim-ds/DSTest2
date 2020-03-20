<?php include "header.php"; ?>

<section class="banner">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="images/slider/slider1.jpg" alt="First slide">

			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/slider/slider2.jpg" alt="Second slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>

<section class="detail">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="detail-bx1">
					<h1>Safari World Day Trip</h1>
					<div class="rate">
						<span><i class="fas fa-star"></i> 5.5 Stars (3205)</span>
						<span>100K Booked</span>
						<span>Whislist</span>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="detail-bx2">
					<h1>Package Options</h1>
					<div class="detail-bx2-inr">
						<h4 class="tlt" style="padding:0px 0px 30px 0px;">Select date & Package Options</h4>
						<h4 class="tlt">Package Type</h4>
						<div class="flavor">
							<input type="radio" id="radio1" name="flavor" value="1" checked="checked" />
							<label for="radio1" class="option11">Safari World Day Trip</label>
							<input type="radio" id="radio2" name="flavor" value="2" />
							<label for="radio2" class="option11">Safari World Half Day Trip</label>
						</div>
						<h4 class="tlt">Please select date</h4>
						<select>
							<option data-display="Select Date">Nothing</option>
							<option value="1">Some option</option>
							<option value="2">Another option</option>
							<option value="3" disabled>A disabled option</option>
							<option value="4">Potato</option>
						</select>

						<h4 class="tlt">Trip Type (One Way / Round Trip)</h4>
						<select>
							<option data-display="Select Trip Type">Nothing</option>
							<option value="1">Some option</option>
							<option value="2">Another option</option>
							<option value="3" disabled>A disabled option</option>
							<option value="4">Potato</option>
						</select>

						<h4 class="tlt">Package Options</h4>
						<div class="cards">
							<h4>Safari park only</h4>
							<div class="price">
								<strike>฿ 1,713</strike>
								<span>฿ 1,603</span>
							</div>
							<div class="quty-slct">
								<button type="button" id="sub" class="sub">-</button>
								    <input type="text" id="1" value="1" />
								<button type="button" id="add" class="add">+</button>
							</div>
						</div>
						<div class="cards">
							<h4>Safari park & Marine Park</h4>
							<div class="price">
								<strike>฿ 1,713</strike>
								<span>฿ 1,603</span>
							</div>
							<div class="quty-slct">
								<button type="button" id="sub" class="sub">-</button>
								    <input type="text" id="1" value="1" />
								<button type="button" id="add" class="add">+</button>
							</div>
						</div>
						<div class="cards">
							<h4>Safari park only</h4>
							<div class="price">
								<strike>฿ 1,713</strike>
								<span>฿ 1,603</span>
							</div>
							<div class="quty-slct">
								<button type="button" id="sub" class="sub">-</button>
								    <input type="text" id="1" value="1" />
								<button type="button" id="add" class="add">+</button>
							</div>
						</div>

						<h4 class="tlt">Quantity</h4>
						<div class="cards">
							<h4>Safari park only</h4>
							<div class="price">
								<strike>฿ 1,713</strike>
								<span>฿ 1,603</span>
							</div>
							<div class="quty-slct">
								<button type="button" id="sub" class="sub">-</button>
								    <input type="text" id="1" value="1" />
								<button type="button" id="add" class="add">+</button>
							</div>
							<div class="dtls">
								<h6>Capacity: 3 travelers and 2 pieces of 24" - 28" luggage</h6>
							</div>
						</div>

						<div class="total">
							<h6>Amount Details</h6>
							<h4>฿ 1,713</h4>
							<div class="total-bx">
								<button>Add To Cart</button>
								<button><a href="attractions-booking.php" style="color:#fff">Book Now</a></button>
							</div>
						</div>
					</div>
				</div>
				<div class="detail-bx3">
					<h1>Most Recent Review</h1>
					<div class="profile">
						<img src="images/client1.jpg">
						<div class="profile-bx">
							<div class="name">
								<h6>Marilyn <span><i class="fas fa-star"></i> 5.5 Stars</span></h6>
								<span>02 sep 2019</span>
							</div>
							<p>The tour was really amazing especially that our tour guides(bo and em) helped us and explained very well the history. I will recommend this attractions to my friends who plan to go to thailand</p>
							<a href="#">Read all 3,309 reviews</a>
						</div>
					</div>	
				</div>
				<div class="detail-bx4">
					<h1>What To Expect</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				</div>
				<div class="detail-bx5">
					<div class="progress-meter-bx">
						<div class="progress-meter">
							<div class="track">
						    	<span class="progress"></span>
						    </div>
						    <ul class="progress-points">
						     	<li class="progress-point progress-point1">
						      	</li>
						      	<li class="progress-point progress-poin2">
						      	</li>
						      	<li class="progress-point progress-point3">
						      	</li>
						    </ul>
						</div>
					</div>

					<h1>Itinerary</h1>

					<h6>8:30am meet up at century mall (BTS Victory Monument station)</h6>
					<img src="images/details-img.jpg">
					<h6>8:30am meet up at century mall (BTS Victory Monument station)</h6>
					<img src="images/details-img.jpg">
					<h6>8:00pm approx. Drop off at original meeting point</h6>
				</div>
				<div class="detail-bx4">
					<h1>Booking Information</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				</div>
				<div class="detail-bx4">
					<h1>How to Use</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				</div>
				<div class="detail-bx4">
					<h1>Cancellation Policy</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				</div>
				<div class="detail-bx3">
					<h1>Most Recent Review</h1>
					<div class="profile">
						<img src="images/client1.jpg">
						<div class="profile-bx">
							<div class="name">
								<h6>Marilyn <span><i class="fas fa-star"></i> 5.5 Stars</span></h6>
								<span>02 sep 2019</span>
							</div>
							<p>The tour was really amazing especially that our tour guides(bo and em) helped us and explained very well the history. I will recommend this attractions to my friends who plan to go to thailand</p>
							<a href="#">Read all 3,309 reviews</a>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-5">
				<div class="detail-bx6">
					<div class="detail-bx6-inr">
						<h2>888 Travel Thailand Price Guarantee</h2>
						<div class="price">
							<h6>From</h6>
							<span>฿ 1,603</span>
							<strike>฿ 1,713</strike>
						</div>
						<button><a href="attractions-booking.php" style="color:#fff">Book Now</a></button>
						<div class="rate">
							<span><i class="fas fa-star"></i> 5.5 Stars (3205)</span>
							<label>100K Booked</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="slider">
	<div class="container">
		<h1>While You're here, check these out too!</h1>
		<div class="row">
			<div class="col-md-12">
				<div class="owl-one owl-carousel owl-theme">
					<div class="item">
						<div class="owl-box">
							<div class="attraction-bx3-inr">
								<img src="images/ser-img.jpg">
								<h4>Autthaya City Tour form Bangkok with traditional Th...</h4>
								<div class="rate">
									<span><i class="fas fa-star"></i> 4.6</span>
									<label>(2,401 Reviews) | 20k+ Booked</label>
								</div>
								<div class="price">
									<strike>฿ 1,713</strike>
									<span>฿ 1,603</span>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="owl-box">
							<div class="attraction-bx3-inr">
								<img src="images/ser-img.jpg">
								<h4>Autthaya City Tour form Bangkok with traditional Th...</h4>
								<div class="rate">
									<span><i class="fas fa-star"></i> 4.6</span>
									<label>(2,401 Reviews) | 20k+ Booked</label>
								</div>
								<div class="price">
									<strike>฿ 1,713</strike>
									<span>฿ 1,603</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>
