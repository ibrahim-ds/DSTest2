<?php include "header.php"; ?>

<section class="booking">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="box">
					<div class="header acc-active">
						<span>Customer Information</span>  <i class="fa fa-angle-down"></i>
					</div>
					<div class="content">
						<div class="col-md-12">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="frm-bx">
											<span>First Name</span>
											<input type="text" name="" placeholder="First Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Last Name</span>
											<input type="text" name="" placeholder="Last Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Country</span>
											<select>
												<option data-display="Select Country">Nothing</option>
												<option value="1">Some option</option>
												<option value="2">Another option</option>
												<option value="3" disabled>A disabled option</option>
												<option value="4">Potato</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Phone Number</span>
											<input type="text" name="" placeholder="66">
										</div>
									</div>
									<div class="col-md-12">
										<div class="frm-bx">
											<span>Email</span>
											<input type="email" name="" placeholder="Enter Email">
										</div>
									</div>
									<div class="col-md-12">
										<div class="frm-bx">
											<span>Password</span>
											<input type="Password" name="" placeholder="Enter Password">
										</div>
									</div>
									<div class="col-md-12">
										<div class="frm-bx">
											<button>Next</button>
										</div>
									</div>
								</div>
							</form>	
						</div>					
					</div>

					<div class="header acc-active">
						<span>Traveler Information</span>  <i class="fa fa-angle-down"></i>
					</div>
					<div class="content">
						<div class="col-md-12">
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="frm-bx tlt">
											<h2>Traveler Details</h2>
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Passport Name (First)</span>
											<input type="text" name="" placeholder="First Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Passport Name (Last)</span>
											<input type="text" name="" placeholder="Last Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Gender</span>
											<select>
												<option data-display="Select">Nothing</option>
												<option value="1">Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Date of Birth</span>
											<select>
												<option data-display="Select">Nothing</option>
												<option value="1">Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Nationality</span>
											<select>
												<option data-display="Select Nationality">Nothing</option>
												<option value="1">Male</option>
												<option value="2">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Passport No</span>
											<input type="text" name="" placeholder="Please Enter Passport No">
										</div>
									</div>

									<div class="col-md-12">
										<div class="frm-bx tlt">
											<h2>Pick Up Details</h2>
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Hotel Name</span>
											<input type="text" name="" placeholder="Please write hotel name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Hotel Address</span>
											<input type="text" name="" placeholder="Please write hotel address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="frm-bx">
											<span>Contact Method & Details (Whats App/ Wechat/ Line)</span>
											<input type="text" name="" placeholder="E.g Whats app +66 123456789">
										</div>
									</div>
									<div class="col-md-12">
										<div class="frm-bx">
											<span>Note</span>
											<textarea placeholder="Enter Note..."></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="frm-bx">
											<button>Next</button>
										</div>
									</div>
								</div>
							</form>	
						</div>					
					</div>
					<div class="header acc-active">
						<span>Select Payment Method</span>  <i class="fa fa-angle-down"></i>
					</div>
					<div class="content">
						<div class="col-md-12">
							<form>
								<div class="row">
									<div class="col-md-12">
										<div class="frm-bx">
											<div class="check-bx">
												<input type="radio" id="pay1" name="optChk" value="" checked="checked">
												<label for="pay1">Ali Pay</label>
											</div>

											<div class="check-bx">
												<input type="radio" id="pay2" name="optChk" value="">
												<label for="pay2">WeChat Pay</label>
											</div>

											<div class="check-bx">
												<input type="radio" id="pay3" name="optChk" value="">
												<label for="pay3">Credit/Debit Card</label>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="frm-bx">
											<span>Card Number</span>
											<input type="text" name="" placeholder="0000 0000 0000">
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>Expiry Date</span>
											<input type="text" name="" placeholder="00/00">
										</div>
									</div>
									<div class="col-md-6">
										<div class="frm-bx">
											<span>CVV (3 digit)</span>
											<input type="text" name="" placeholder="000">
										</div>
									</div>
								</div>
							</form>	
						</div>					
					</div>
				</div>
				<div class="pay-btn">
					<p>By Clicking pay now you agree that you have ready and understood our terms & conditions and cancelation policy.</p>
					<button>Pay Now</button>
				</div>
			</div>
			<div class="col-md-5">
				<div class="total">
					<h6>Safari World Day Trip</h6>
					<table>
						<tr>
							<td>Package Type</td>
							<td>Safari World Day Trip</td>
						</tr>
						<tr>
							<td>Date</td>
							<td>18/11/2019</td>
						</tr>
						<tr>
							<td>Unit</td>
							<td>1 <i class="fas fa-times"></i> per van (Group of 10)</td>
						</tr>
						<tr>
							<td>Trip Type</td>
							<td>Round Trip</td>
						</tr>
					</table>
				</div>
				<div class="total">
					<table>
						<tr>
							<td>Total</td>
							<td style="font-size:18px;">฿ 1,603</td>
						</tr>
						<tr>
							<td>Payment Amount</td>
							<td style="font-size:18px;">฿ 1,603</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "footer.php"; ?>
