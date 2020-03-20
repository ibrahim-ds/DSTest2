<?php include "admin-header.php"; ?>

<!--slider section-->
<section class="top-search driver p-0">
	<nav aria-label="breadcrumb" style="background:#e9ecef;">
		<div class="container">
		  	<ol class="breadcrumb m-0">
		    	<li class="breadcrumb-item"><a href="#">Home</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Customer Listing</li>
		  	</ol>
	  	</div>
	</nav>
	<div class="tlt m-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tlt-bx">
						<h3>Customers Listing</h3>
						<!-- <a href="admin-service-add.php" class="sv-btn"><i class="fas fa-plus"></i> Add New Services</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="top-search1">
					<form>
						<div class="tp-search-bx">
						    <input type="text" class="form-control" placeholder="Search">
						    <button><i class="fa fa-search"></i></button>
						 </div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="top-search2">
					 <select>
						<option>Show All Drivers</option>
						<option>1</option>
					</select>
					<a href="admin-service-add.php" class="sv-btn"><i class="fas fa-plus"></i> Add New Services</a>
				</div>
			</div>
		</div>
	</div>-->
</section>
<!-- section-->

<section id="admin-table">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="admin-table">
					<table class="table table-striped">
					  	<thead>
						    <tr>
						      <th>S.no</th>
						      <th>Customer Name</th>
						      <th>Email ID</th>
						      <th style="min-width:200px;">Mobile No</th>
						      <th class="text-center">Status</th>
						      <th class="text-center">Action</th>
						    </tr>
					  	</thead>
					  	<tbody>
						    <tr>
						      	<td>1</td>
						      	<td>Mr Chan Chung Man</td>
						      	<td>rickeysingh@gmail.com</td>
						      	<td>+919732003010</td>
						      	<td>
						      		<select>
						      			<option>Active</option>
						      			<option>Inactive</option>
						      		</select>
						      	</td>
						      	<td class="text-center">
						      		<a href="#" class="action-btn" style="background:#4caf50;"><i class="fas fa-eye"></i></a>
						      		<a href="#" class="action-btn" style="background:#ef5350;"><i class="far fa-trash-alt"></i></a>
						      	</td>
						    </tr>
						    <tr>
						      	<td>2</td>
						      	<td>Mr Chan Chung Man</td>
						      	<td>rickeysingh@gmail.com</td>
						      	<td>+919732003010</td>
						      	<td>
						      		<select>
						      			<option>Active</option>
						      			<option>Inactive</option>
						      		</select>
						      	</td>
						      	<td class="text-center">
						      		<a href="#" class="action-btn" style="background:#4caf50;"><i class="fas fa-eye"></i></a>
						      		<a href="#" class="action-btn" style="background:#ef5350;"><i class="far fa-trash-alt"></i></a>
						      	</td>
						    </tr>
						    <tr>
						      	<td>3</td>
						      	<td>Mr Chan Chung Man</td>
						      	<td>rickeysingh@gmail.com</td>
						      	<td>+919732003010</td>
						      	<td>
						      		<select>
						      			<option>Active</option>
						      			<option>Inactive</option>
						      		</select>
						      	</td>
						      	<td class="text-center">
						      		<a href="#" class="action-btn" style="background:#4caf50;"><i class="fas fa-eye"></i></a>
						      		<a href="#" class="action-btn" style="background:#ef5350;"><i class="far fa-trash-alt"></i></a>
						      	</td>
						    </tr>
					  	</tbody>
					</table>
					<nav aria-label="Page navigation example">
					  <ul class="pagination">
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					        <span class="sr-only">Previous</span>
					      </a>
					    </li>
					    <li class="page-item active"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					        <span class="sr-only">Next</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>
