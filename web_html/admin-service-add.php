<?php include "admin-header.php"; ?>

<section class="admin-addnew">
	<nav aria-label="breadcrumb" style="background:#e9ecef;">
		<div class="container">
		  	<ol class="breadcrumb m-0">
		    	<li class="breadcrumb-item"><a href="#">Home</a></li>
		    	<li class="breadcrumb-item"><a href="#">Service</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Service Add</li>
		  	</ol>
	  	</div>
	</nav>
	<div class="tlt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tlt-bx">
						<h3>Add Service</h3>
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
					<label class="col-md-5">Service Code</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Service Code">
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Service Name</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Service Name">
				</div>
			</div>

			<div class="col-md-12"><br><br></div>

			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Order Index</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Order Index">
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Status</label>
					<select class="col-md-7">
						<option>Active</option>
						<option>Inactive</option>
					</select>
				</div>
			</div>

			<div class="col-md-12"><br></div>

			<div class="col-md-6">
				<div class="img-chose">
					<label>Upload Your Banner Images</label>
					<a class="chs-btn"><i class="fa fa-plus"></i>
						<input type="file" name="stylist_image" id="stylist_image" onchange="readURL(this)"> 
					</a>
					<img id="profile" src="images/slider/slider1.jpg" style="width:150px;" />	
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
