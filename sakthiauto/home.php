<?php include "header.php" ?>
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
			<h2>Basic Form</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index-2.html">Home</a>
				</li>
				<li>
					<a>Forms</a>
				</li>
				<li class="active">
					<strong>Basic Form</strong>
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
						<h5>Horizontal form</h5>
					</div>
					<div class="ibox-content">
						<form class="form-horizontal" id="form">
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Doc Type</label>
									<div class="col-md-9">
										<input type="text" placeholder="Password" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Doc Type</label>
									<div class="col-md-9">
										<input type="text" placeholder="Password" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Doc Type</label>
									<div class="col-md-9">
										<input type="text" placeholder="Password" class="form-control" autocomplete="off"/>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Doc Type</label>
									<div class="col-md-9">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Doc Type</label>
									<div class="col-md-9">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-6 form-group">
									<label class="col-md-3 control-label">Doc Type</label>
									<div class="col-md-9">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-12 m-t-10">
									<div class="col-md-12">
										<button class="btn btn-primary pull-right" type="submit">Sign in</button>
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

</style>
	<script>
 $(function() {
 var availableTags = [
 "ActionScript",
 "AppleScript",
 "Asp",
 "BASIC",
 "C",
 "C++",
 "Clojure",
 "COBOL",
 "ColdFusion",
 "Erlang",
 "Fortran",
 "Groovy",
 "Haskell",
 "Java",
 "JavaScript",
 "Lisp",
 "Perl",
 "PHP",
 "Python",
 "Ruby",
 "Scala",
 "Scheme"
 ];
 $( "#tags" ).autocomplete({
 source: availableTags
 });
 });

 </script>