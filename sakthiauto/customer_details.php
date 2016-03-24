<?php include "header.php" ?>
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
			<h2>Customer Details</h2>
			<ol class="breadcrumb">
				<li>
					<a href="home.php">Home</a>
				</li>
				<li>
					<a>Masters</a>
				</li>
				<li class="active">
					<strong>Customer Details</strong>
				</li>
			</ol>
		</div>
		<div class="col-lg-2">

		</div>
	</div>
	
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row" id="Customer_Master">
			<div class="col-md-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Customer Details</h5>
						<div class="ibox-tools">
							<button class="btn btn-warning btn-xs dropdown-toggle"><a href="javascript:SwapDivsWithClick('Customer_Master','Customer_list')">View Customer Details</a> <span class="caret"></span></button>
						</div>
					</div>
					<div class="ibox-content">
						<form class="form-horizontal" id="form">
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Name</label>
									<div class="col-md-9">
										<input type="text" placeholder="Name" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Ph Number</label>
									<div class="col-md-9">
										<input type="text" placeholder="Phone Number" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
										<input type="email" placeholder="Email" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Reg Number</label>
									<div class="col-md-9">
										<input type="text" placeholder="Registration Number" class="form-control" autocomplete="off"/>
									</div>
								</div>

								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Veh Number</label>
									<div class="col-md-9">
										<input type="text" placeholder="Vehicle Number" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Address</label>
									<div class="col-md-9">
										<textarea class="form-control" rows="5" placeholder="Address"></textarea>
									</div>
								</div>
								
								<div class="col-md-12 m-t-10">
									<div class="col-md-12">
										<input type="submit" class="btn btn-primary pull-right" value="Submit" />
									</div>
								</div>
							
							<div class="form-group"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" id="Customer_list" style="display:none;">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Customer Details</h5>
						<div class="ibox-tools">
							<button class="btn btn-warning btn-xs dropdown-toggle"><a href="javascript:SwapDivsWithClick('Customer_Master','Customer_list')">View Customer Masters</a> <span class="caret"></span></button>
						</div>
					</div>
					
					<div class="ibox-content">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover dataTablescript">
							<thead>
							<tr>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Registration Number</th>
								<th>Vehicle Number</th>
								<th>Address</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Trident</td>
								<td>Internet
									Explorer 5.0
								</td>
								<td>Win 95+</td>
								<td>5</td>
								<td>Win 95+</td>
								<td>5</td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
								<th>Name</th>
								<th>Phone Number</th>
								<th>Email</th>
								<th>Registration Number</th>
								<th>Vehicle Number</th>
								<th>Address</th>
							</tr>
							</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
<?php include "footer.php" ?>