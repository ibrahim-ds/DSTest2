<?php include "admin-header.php"; ?>

<section class="top-search driver p-0">
	<nav aria-label="breadcrumb" style="background:#e9ecef;">
		<div class="container">
		  	<ol class="breadcrumb m-0">
		    	<li class="breadcrumb-item"><a href="#">Home</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
		  	</ol>
	  	</div>
	</nav>
</section>
<!--slider section-->
<section class="top-search m-0">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="top-search1">
					<form>
						<div class="tp-search-bx">
						    <input type="text" class="form-control" placeholder="Search">
						    <button><i class="fa fa-search"></i></button>
						 </div>
						 <div class="tp-filter">
						 	<span><i class="fas fa-filter"></i></span>
						 	<div class="tp-filter-bx">
						 		<div class="row">
						 			<div class="col-md-6">
						 				<label>From Date:</label>
						 				<input type="text" name="">
						 			</div>
						 			<div class="col-md-6">
						 				<label>To Date:</label>
						 				<input type="text" name="">
						 			</div>
						 		</div>
						 		<div class="row">
						 			<div class="col-md-6">
						 				<label>From Time:</label>
						 				<input type="text" name="">
						 			</div>
						 			<div class="col-md-6">
						 				<label>To Time:</label>
						 				<input type="text" name="">
						 			</div>
						 		</div>
						 		<div class="row">
						 			<div class="col-md-6">
						 				<label>PAX</label>
						 				<input type="text" name="">
						 			</div>
						 		</div>
						 		<div class="row">
						 			<div class="col-md-12 text-center">
						 				<button>Search</button>
						 			</div>
						 		</div>
						 	</div>
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
					<button class="download"><i class="fas fa-download"></i></button>
					<!-- <a href="#" class="add"><i class="fas fa-plus"></i></a> -->
				</div>
			</div>
		</div>
	</div>
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
						      <th>Pickup Date & Time</th>
						      <th>Itinerary Description</th>
						      <th style="min-width:200px;">Customer Name</th>
						      <th class="text-center">PAX</th>
						      <th class="text-center" style="min-width:100px;">Booking #</th>
						      <th class="text-center">Driver</th>
						      <th class="text-center">Status</th>
						    </tr>
					  	</thead>
					  	<tbody>
						    <tr>
						      	<td>1</td>
						      	<td>12-09-19 | CX755 | 5:00 PM </td>
						      	<td>DMK Airport – Villa Tuscany Country Resort สวนผึ้ง  (10hrs)</td>
						      	<td>
						      		<span>Mr Chan Chung Man</span><br>
						      		<span>+919732003010</span><br>
						      		<span>WeChat:rickeysingh</span>
						      	</td>
						      	<td>4</td>
						      	<td>#121994</td>
						      	<td>Sin</td>
						      	<td>
						      		<a href="#" style="font-size: 15px;font-weight: 600;color: #de9426;display: block;text-align: center;padding: 0px 0px 5px 0px;" data-toggle="modal" data-target="#assigndriver">Assign Driver</a>
						      		<a href="#" style="font-size: 15px;font-weight: 600;color: green;display: block;text-align: center;padding: 0px 0px 5px 0px;" data-toggle="modal" data-target="#assigndriver">Edit Driver</a>	
						      		<select name="">
										<option value="In Progress">In Progress</option>
										<option value="confirmed">Confirmed</option>
										<option value="New Booking">New Booking</option>
									</select>
						      	</td>
						    </tr>
						    <tr>
						      	<td>2</td>
						      	<td>12-09-19 | CX755 | 5:00 PM </td>
						      	<td>DMK Airport – Villa Tuscany Country Resort สวนผึ้ง  (10hrs)</td>
						      	<td>
						      		<span>Mr Chan Chung Man</span><br>
						      		<span>+919732003010</span><br>
						      		<span>WeChat:rickeysingh</span>
						      	</td>
						      	<td>4</td>
						      	<td>#121994</td>
						      	<td>Sin</td>
						      	<td>
						      		<a href="#" style="font-size: 15px;font-weight: 600;color: #de9426;display: block;text-align: center;padding: 0px 0px 5px 0px;" data-toggle="modal" data-target="#assigndriver">Assign Driver</a>
						      		<a href="#" style="font-size: 15px;font-weight: 600;color: green;display: block;text-align: center;padding: 0px 0px 5px 0px;" data-toggle="modal" data-target="#assigndriver">Edit Driver</a>
						      		<select>
										<option>In Progress</option>
										<option>Confirmed</option>
										<option>New Booking</option>
									</select>
						      	</td>
						    </tr>
						    <tr>
						      	<td>3</td>
						      	<td>12-09-19 | CX755 | 5:00 PM </td>
						      	<td>DMK Airport – Villa Tuscany Country Resort สวนผึ้ง  (10hrs)</td>
						      	<td>
						      		<span>Mr Chan Chung Man</span><br>
						      		<span>+919732003010</span><br>
						      		<span>WeChat:rickeysingh</span>
						      	</td>
						      	<td>4</td>
						      	<td>#121994</td>
						      	<td>Sin</td>
						      	<td>
						      		<a href="#" style="font-size: 15px;font-weight: 600;color: #de9426;display: block;text-align: center;padding: 0px 0px 5px 0px;" data-toggle="modal" data-target="#assigndriver">Assign Driver</a>	
						      		<a href="#" style="font-size: 15px;font-weight: 600;color: green;display: block;text-align: center;padding: 0px 0px 5px 0px;" data-toggle="modal" data-target="#assigndriver">Edit Driver</a>
						      		<select>
										<option>In Progress</option>
										<option>Confirmed</option>
										<option>New Booking</option>
									</select>
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

<!-- Modal -->
<div class="modal fade modal1" id="assigndriver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	    <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
	    <div class="modal-body">
	      	<section id="admin-table">
				<div class="admin-table">
					<table class="table table-striped">
					  	<thead>
						    <tr>
						      <th>S.no</th>
						      <th>Driver Name</th>
						    </tr>
					  	</thead>
					  	<tbody>
						    <tr>
						      	<td><input type="checkbox" name=""></td>
						      	<td>
						      		<div class="profile">
						      			<img src="images/shepard.jpg">
						      			<div style="padding-left:5px;">
						      				<span><b>Rang</b></span><br>
						      				<span>+91 97320 03010</span><br>
						      				<span>Bangkok</span>
						      			</div>
						      		</div>
						      	</td>
						    </tr>
						    <tr>
						      	<td><input type="checkbox" name=""></td>
						      	<td>
						      		<div class="profile">
						      			<img src="images/shepard.jpg">
						      			<div style="padding-left:5px;">
						      				<span><b>Rang</b></span><br>
						      				<span>+91 97320 03010</span><br>
						      				<span>Bangkok</span>
						      			</div>
						      		</div>
						      	</td>
						    </tr>
						    <tr>
						      	<td><input type="checkbox" name=""></td>
						      	<td>
						      		<div class="profile">
						      			<img src="images/shepard.jpg">
						      			<div style="padding-left:5px;">
						      				<span><b>Rang</b></span><br>
						      				<span>+91 97320 03010</span><br>
						      				<span>Bangkok</span>
						      			</div>
						      		</div>
						      	</td>
						    </tr>
					  	</tbody>
					</table>
				</div>
			</section>
	    </div>
	    <div class="modal-footer">
	    	<label><input type="checkbox" name="" style="margin:0px;"> Send SMS Notification</label>
	        <button type="button" class="sv-btn">Assign</button>
	    </div>
    </div>
  </div>
</div>

<?php include "footer.php"; ?>
