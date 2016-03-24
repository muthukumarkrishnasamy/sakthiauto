<?php include "header.php" ?>
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
			<h2>Brand Details</h2>
			<ol class="breadcrumb">
				<li>
					<a href="home.php">Home</a>
				</li>
				<li>
					<a>Masters</a>
				</li>
				<li class="active">
					<strong>Brand</strong>
				</li>
			</ol>
		</div>
		<div class="col-lg-2">

		</div>
	</div>
	
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row" id="Brand_Master">
			<div class="col-md-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Brand</h5>
						<div class="ibox-tools">
							<button class="btn btn-warning btn-xs dropdown-toggle"><a href="javascript:SwapDivsWithClick('Brand_Master','Brand_list')">View Brand List</a> <span class="caret"></span></button>
						</div>
					</div>
					<div class="ibox-content">
						<form class="form-horizontal" id="form">
						
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Category Type</label>
									<div class="col-md-9">
										<select class="form-control" autocomplete="off">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Brand Name</label>
									<div class="col-md-9">
										<input type="text" placeholder="Brand Name" class="form-control" autocomplete="off"/>
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
		
		<div class="row" style="display:none;" id="Brand_list">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Brand Details</h5>
						<div class="ibox-tools">
							<button class="btn btn-warning btn-xs dropdown-toggle"><a href="javascript:SwapDivsWithClick('Brand_Master','Brand_list')">View Brand Master</a> <span class="caret"></span></button>
						</div>
					</div>
					
					<div class="ibox-content">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover dataTablescript">
							<thead>
							<tr>
								<th>Category Type</th>
								<th>Brand</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Trident</td>
								<td>Internet
									Explorer 5.0
								</td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
								<th>Category Type</th>
								<th>Brand</th>
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