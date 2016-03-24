		<div class="row">
			<div class="footer fixed">
				<div class="pull-right">
					10GB of <strong>250GB</strong> Free.
				</div>
				<div>
					<strong>Copyright</strong> Example Company &copy; 2014-2015
				</div>
			</div>
		</div>
</div>        
    </div>

    <!-- Mainly scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>
    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script src="js/custom.js"></script>
	<!--Data Table-->
	<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
	<script src="js/plugins/dataTables/datatables.min.js"></script>
	<!-- Page-Level Scripts -->
    <script>
       $(document).ready(function(){
            $('.dataTablescript').DataTable({
                dom: '<"html5buttons"B>lTfgtip',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
						}
                    }
                ]
            });
		});	
    
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Tharamangalam.', 'Welcome to Sri Sakthi Automobiles');
            }, 1300);

        });
		
		
		function SwapDivsWithClick(div1,div2)
		{
		   d1 = document.getElementById(div1);
		   d2 = document.getElementById(div2);
		   if( d2.style.display == "none" )
		   {
			  d1.style.display = "none";
			  d2.style.display = "block";
		   }
		   else
		   {
			  d1.style.display = "block";
			  d2.style.display = "none";
		   }
		}
    </script>
</body>
</html>