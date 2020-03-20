<?php include "admin-header.php"; ?>

<section class="admin-addnew">
	<nav aria-label="breadcrumb" style="background:#e9ecef;">
		<div class="container">
		  	<ol class="breadcrumb m-0">
		    	<li class="breadcrumb-item"><a href="#">Home</a></li>
		    	<li class="breadcrumb-item"><a href="#">Packages</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Packages Add</li>
		  	</ol>
	  	</div>
	</nav>
	<div class="tlt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tlt-bx">
						<h3>Add Packages</h3>
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
					<label class="col-md-5">Package Code</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Package Code">
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Package Name</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Package Name">
				</div>
			</div>
			<div class="col-md-12"><br><br></div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Description</label>
					<textarea rows="1" class="col-md-7" placeholder="Enter Package Description"></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">Package Amount</label>
					<input type="text" name="" class="col-md-7" placeholder="Enter Package Amount">
				</div>
			</div>
			<div class="col-md-12"><br><br></div>
			<div class="col-md-6">
				<div class="row">
					<label class="col-md-5">What To Expect</label>
					<textarea rows="1" class="col-md-7" placeholder="What To Expect"></textarea>
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

			<div class="col-md-12"><br><br></div>

			<div class="col-md-12">
				<div class="pack-add-tlt">
					<h4 class="tlt-cnct">Package Type</h4>
					<div class="d-flex">
					<button data-toggle="modal" data-target="#exampleModal">Add Package Option</button>	
					<label><input type="checkbox" name="" checked="checked"> Show on website</label>
					</div>
				</div>
			</div>

			<div class="col-md-12"><br></div>

			<div class="admin-table" style="width:100%;">
				<table class="table table-striped">
				  	<thead>
					    <tr>
					      <th>S.no</th>
					      <th>Package Type</th>
					      <th>Order Index</th>
					      <th style="text-align:center;">Action</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>
					      	<td>1</td>
					      	<td><input type="text" name=""></td>
					      	<td><input type="text" name=""></td>
					      	<td class="text-center">
					      		<a href="#" class="action-btn" title="Edit" style="background:#4caf50;"><i class="fas fa-plus"></i></a>
					      		<a href="#" class="action-btn" title="Delete" style="background:#ef5350;"><i class="far fa-trash-alt"></i></a>
					      	</td>
					    </tr>
				  	</tbody>
				</table>
			</div>

			<div class="col-md-12"><br><br></div>

			<div class="col-md-12">
				<div class="pack-add-tlt">
					<h4 class="tlt-cnct">Package Option</h4>
					<label><input type="checkbox" name="" checked="checked"> Show on website</label>
				</div>
			</div>

			<div class="col-md-12"><br></div>

			<div class="admin-table">
				<table class="table table-striped">
				  	<thead>
					    <tr>
					      <th>S.no</th>
					      <th>Package Name</th>
					      <th>Package Price</th>
					      <th>Discount Price</th>
					      <th>Order Index</th>
					      <th>Status</th>
					      <th style="min-width:140px;text-align:center;">Action</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>
					      	<td>1</td>
					      	<td><input type="text" name=""></td>
					      	<td><input type="text" name=""></td>
					      	<td><input type="text" name=""></td>
					      	<td><input type="text" name=""></td>
					      	<td>
					      		<select>
					      			<option>Active</option>
					      			<option>In Active</option>
					      		</select>
					      	</td>
					      	<td class="text-center">
					      		<a href="#" class="action-btn" title="Edit" style="background:#4caf50;"><i class="fas fa-plus"></i></a>
					      		<a href="#" class="action-btn" title="Delete" style="background:#ef5350;"><i class="far fa-trash-alt"></i></a>
					      	</td>
					    </tr>
				  	</tbody>
				</table>
			</div>

			<div class="col-md-12"><br><br></div>

			<div class="col-md-12">
				<div class="pack-add-tlt">
					<h4 class="tlt-cnct">Package Quantity</h4>
					<label><input type="checkbox" name="" checked="checked"> Show on website</label>
				</div>				
			</div>

			<div class="col-md-12"><br></div>

			<div class="admin-table">
				<table class="table table-striped">
				  	<thead>
					    <tr>
					      <th>S.no</th>
					      <th>Package Name</th>
					      <th style="min-width:200px;">Package Description</th>
					      <th>Package Price</th>
					      <th>Discount Price</th>
					      <th>Order Index</th>
					      <th>Status</th>
					      <th style="min-width:140px;text-align:center;">Action</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>
					      	<td>1</td>
					      	<td><input type="text" name=""></td>
					      	<td><textarea rows="1"></textarea></td>
					      	<td><input type="text" name=""></td>
					      	<td><input type="text" name=""></td>
					      	<td><input type="text" name=""></td>
					      	<td>
					      		<select>
					      			<option>Active</option>
					      			<option>In Active</option>
					      		</select>
					      	</td>
					      	<td class="text-center">
					      		<a href="#" class="action-btn" title="Edit" style="background:#4caf50;"><i class="fas fa-plus"></i></a>
					      		<a href="#" class="action-btn" title="Delete" style="background:#ef5350;"><i class="far fa-trash-alt"></i></a>
					      	</td>
					    </tr>
				  	</tbody>
				</table>
			</div>

			<div class="col-md-12"><br><br></div>

			<div class="col-md-12">
				<div class="pack-add-tlt">
					<h4 class="tlt-cnct">Itinerary</h4>
					<label><input type="checkbox" name="" checked="checked"> Show on website</label>
				</div>
			</div>

			<div class="col-md-12"><br></div>

			<div class="admin-table" style="width:100%;">
				<table class="table table-striped">
				  	<thead>
					    <tr>
					      <th>S.no</th>
					      <th>Title</th>
					      <th>Image</th>
					      <th>Order Index</th>
					      <th style="text-align:center;">Action</th>
					    </tr>
				  	</thead>
				  	<tbody>
					    <tr>
					      	<td>1</td>
					      	<td><input type="text" name=""></td>
					      	<td>
					      		<div class="img-chose p-0">
									<a class="chs-btn m-0" style="height:43px;
									width:100px;border-radius:5px;padding:5px;"><i class="fa fa-plus"></i>
										<input type="file" name="stylist_image" id="stylist_image" onchange="readURL(this)"> 
									</a>
								</div>
					      	</td>
					      	<td><input type="text" name=""></td>
					      	<td class="text-center">
					      		<a href="#" class="action-btn" title="Edit" style="background:#4caf50;"><i class="fas fa-plus"></i></a>
					      		<a href="#" class="action-btn" title="Delete" style="background:#ef5350;"><i class="far fa-trash-alt"></i></a>
					      	</td>
					    </tr>
				  	</tbody>
				</table>
			</div>

			<div class="col-md-12"><br><br></div>
			<div class="col-md-12 text-center">
				<button class="sv-btn"><i class="far fa-check-circle"></i> Save</button>
				<button class="bk-btn" onclick="window.history.back()"><i class="fas fa-arrow-left"></i> Back</button>
			</div>

		</div>
	</div>
</section>

<!-- Modal 1 -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<!-- <img src="images/logo.jpg"> -->
			<h5 class="modal-title" id="exampleModalLabel">Add Package Option</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form class="fst-frm">
				<div class="frm-box">
					<input type="text" name="name" required>
					<label>Package Type</label>
				</div>
				<div class="frm-box">
					<input type="text" name="name" required>
					<label>Order Id</label>
				</div>
				<div class="frm-box">
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select>
				</div>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary">Submit</button>
		  </div>
		</div>
	</div>
</div>
<!-- Modal 1 -->

<?php include "footer.php"; ?>
