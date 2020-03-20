<?php include "admin-header.php"; ?>

<section class="admin-addnew">
	<nav aria-label="breadcrumb" style="background:#e9ecef;">
		<div class="container">
		  	<ol class="breadcrumb m-0">
		    	<li class="breadcrumb-item"><a href="#">Home</a></li>
		    	<li class="breadcrumb-item"><a href="#">Driver Listing</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Driver Listing Add</li>
		  	</ol>
	  	</div>
	</nav>
	<div class="tlt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tlt-bx">
						<h3>Add Drivers</h3>
						<button class="sv-btn" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Back</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Driver Name</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Driver Name">
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Driver Mobile</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Driver Mobile">
				</div>
			</div>

			<div class="col-md-12"><br><br></div>

			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Vehicle Number</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Vehicle Number">
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Vehicle Type</label>
					<select class="col-md-7">
						<option>Toyota Van</option>
						<option>Mercedes Benz</option>
						<option>Honda CRV</option>
					</select>
				</div>
			</div>

			<div class="col-md-12"><br><br></div>

			<div class="col-md-6">
				<div class="img-chose">
					<label>Upload Your Profile Photo</label>
					<a class="chs-btn"><i class="fa fa-plus"></i>
						<input type="file" name="stylist_image" id="stylist_image" onchange="readURL(this)"> 
					</a>
					<img id="profile" src="images/shepard.jpg" width="120" />	
				</div>
			</div>

			<div class="col-md-12"><br><br></div>
			<div class="col-md-12 text-center">
				<button class="sv-btn"><i class="far fa-check-circle"></i> Save</button>
				<button class="bk-btn" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Back</button>
			</div>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>
