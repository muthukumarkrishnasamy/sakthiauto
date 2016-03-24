<?php include "header.php" ?>
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
			<h2>Tax Details</h2>
			<ol class="breadcrumb">
				<li>
					<a href="home.php">Home</a>
				</li>
				<li>
					<a>Masters</a>
				</li>
				<li class="active">
					<strong>Tax</strong>
				</li>
			</ol>
		</div>
		<div class="col-lg-2">

		</div>
	</div>
	
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div class="col-md-12">
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>Tax</h5>
					</div>
					<div class="ibox-content">
						<form class="form-horizontal" id="form">
						
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Tax Details</label>
									<div class="col-md-9">
										<select class="form-control" autocomplete="off">
											<option>14.5%</option>
											<option>5%</option>
											<option>NIL</option>
										</select>
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
	</div>
<?php include "footer.php" ?>