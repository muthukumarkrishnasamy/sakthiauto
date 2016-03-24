<?php include "header.php" ?>
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
			<h2>Product Details</h2>
			<ol class="breadcrumb">
				<li>
					<a href="home.php">Home</a>
				</li>
				<li>
					<a>Masters</a>
				</li>
				<li class="active">
					<strong>Product</strong>
				</li>
			</ol>
		</div>
		<div class="col-lg-2">

		</div>
	</div>
	
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row" id="Product_Master">
			<div class="col-md-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Product</h5>
						<div class="ibox-tools">
							<button class="btn btn-warning btn-xs dropdown-toggle"><a href="javascript:SwapDivsWithClick('Product_Master','Product_list')">View Product List</a> <span class="caret"></span></button>
						</div>
					</div>
					<div class="ibox-content">
						<form class="form-horizontal" id="form">
						
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Product Name</label>
									<div class="col-md-9">
										<input type="text" placeholder="Product Name" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Product Code</label>
									<div class="col-md-9">
										<input type="text" placeholder="Product Code" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Product MRP</label>
									<div class="col-md-9">
										<input type="text" placeholder="Product MRP" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Actual Rate</label>
									<div class="col-md-9">
										<input type="text" placeholder="Actual Rate" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Discount Rate</label>
									<div class="col-md-9">
										<input type="text" placeholder="Discount Rate" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Brand</label>
									<div class="col-md-9">
										<input type="text" placeholder="Brand" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Category</label>
									<div class="col-md-9">
										<input type="text" placeholder="Category" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Tax</label>
									<div class="col-md-9">
										<input type="text" placeholder="Tax" class="form-control" autocomplete="off"/>
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
		
		<div class="row" id="Product_list" style="display:none">
			<div class="col-lg-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Product Details</h5>
						<div class="ibox-tools">
							<button class="btn btn-warning btn-xs dropdown-toggle"><a href="javascript:SwapDivsWithClick('Product_Master','Product_list')">View Product Masters</a> <span class="caret"></span></button>
						</div>
					</div>
					
					<div class="ibox-content">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover dataTablescript">
							<thead>
							<tr>
								<th>Product Name</th>
								<th>Product Code</th>
								<th>Product MRP</th>
								<th>Actual Rate</th>
								<th>Discount Rate</th>
								<th>Brand</th>
								<th>Category</th>
								<th>Tax</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Trident</td>
								<td>Internet
									Explorer 5.0
								</td>
								<td>Win 95+</td>
								<td >5</td>
								<td>Trident</td>
								<td>Internet
									Explorer 5.0
								</td>
								<td>Win 95+</td>
								<td >5</td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
								<th>Product Name</th>
								<th>Product Code</th>
								<th>Product MRP</th>
								<th>Actual Rate</th>
								<th>Discount Rate</th>
								<th>Brand</th>
								<th>Category</th>
								<th>Tax</th>
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