<?php include "header.php" ?>
	<div class="row wrapper border-bottom white-bg page-heading">
		<div class="col-lg-10">
			<h2>Advanced Form Elements</h2>
			<ol class="breadcrumb">
				<li>
					<a href="index-2.html">Home</a>
				</li>
				<li>
					<a>Forms</a>
				</li>
				<li class="active">
					<strong>Advanced Form Elements</strong>
				</li>
			</ol>
		</div>
		<div class="col-lg-2">

		</div>
	</div>
	
	<div class="wrapper wrapper-content animated fadeInRight">
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Select2 <small>https://select2.github.io/</small></h5>
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="select2_demo_1 form-control">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <select class="select2_demo_3 form-control">
                                        <option></option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <select class="select2_demo_2 form-control" multiple="multiple">
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-5">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Data Picker <small>https://github.com/eternicode/bootstrap-datepicker</small></h5>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                Data picker
                            </h3>

                            <div class="form-group" id="data_1">
                                <label class="font-noraml">Simple data input format</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_2">
                                <label class="font-noraml">One Year view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="08/09/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_3">
                                <label class="font-noraml">Decade view</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013">
                                </div>
                            </div>

                            <div class="form-group" id="data_4">
                                <label class="font-noraml">Month select</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                </div>
                            </div>

                            <div class="form-group" id="data_5">
                                <label class="font-noraml">Range select</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
                                </div>
                            </div>
                        </div>
                    </div>
					
					
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>ClockPicker <small>http://weareoutman.github.io/clockpicker/</small></h5>
                        </div>
                        <div class="ibox-content">
                            <h3>
                                ClockPicker
                            </h3>
                            
                            <div class="input-group clockpicker" data-autoclose="true">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">
                                    <span class="fa fa-clock-o"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    

                   

                </div>
                <div class="col-lg-7">
                    
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Custom switch </h5>
                        </div>
                        <div class="ibox-content">
                            <h4>
                                Custom switch
                            </h4>
                            <p>
                                Pure CSS3 On/Off flipswitches with animated transitions.
                            </p>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" checked class="onoffswitch-checkbox" id="example1">
                                    <label class="onoffswitch-label" for="example1">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" class="onoffswitch-checkbox" id="example2">
                                    <label class="onoffswitch-label" for="example2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
                    </div>
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title  back-change">
                            <h5>Awesome bootstrap checkbox</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Basic
                                        </h3>
                                        <p>
                                            Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                        </p>
                                        <div class="checkbox">
                                            <input id="checkbox1" type="checkbox">
                                            <label for="checkbox1">
                                                Default
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox" checked="">
                                            <label for="checkbox2">
                                                Primary
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox3" type="checkbox">
                                            <label for="checkbox3">
                                                Success
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info">
                                            <input id="checkbox4" type="checkbox">
                                            <label for="checkbox4">
                                                Info
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-warning">
                                            <input id="checkbox5" type="checkbox" checked="">
                                            <label for="checkbox5">
                                                Warning
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-danger">
                                            <input id="checkbox6" type="checkbox" checked="">
                                            <label for="checkbox6">
                                                Check me out
                                            </label>
                                        </div>
                                        <p>Checkboxes without label text</p>
                                        <div class="checkbox">
                                            <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                            <label></label>
                                        </div>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" id="singleCheckbox2" value="option2" checked="" aria-label="Single checkbox Two">
                                            <label></label>
                                        </div>
                                        <p>Inline checkboxes</p>
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label for="inlineCheckbox1"> Inline One </label>
                                        </div>
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                            <label for="inlineCheckbox2"> Inline Two </label>
                                        </div>
                                        <div class="checkbox checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                            <label for="inlineCheckbox3"> Inline Three </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Circled
                                        </h3>
                                        <p>
                                            <code>.checkbox-circle</code> for roundness.
                                        </p>
                                        <div class="checkbox checkbox-circle">
                                            <input id="checkbox7" type="checkbox">
                                            <label for="checkbox7">
                                                Simply Rounded
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-info checkbox-circle">
                                            <input id="checkbox8" type="checkbox" checked="">
                                            <label for="checkbox8">
                                                Me too
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset>
                                        <h3>
                                            Radio
                                        </h3>
                                        <p>
                                            Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                        </p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                    <label for="radio1">
                                                        Small
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="radio1" id="radio2" value="option2">
                                                    <label for="radio2">
                                                        Big
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio3" value="option1">
                                                    <label for="radio3">
                                                        Next
                                                    </label>
                                                </div>
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                                    <label for="radio4">
                                                        One
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Radios without label text</p>
                                        <div class="radio">
                                            <input type="radio" id="singleRadio1" value="option1" name="radioSingle1" aria-label="Single radio One">
                                            <label></label>
                                        </div>
                                        <div class="radio radio-success">
                                            <input type="radio" id="singleRadio2" value="option2" name="radioSingle1" checked="" aria-label="Single radio Two">
                                            <label></label>
                                        </div>
                                        <p>Inline radios</p>
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                            <label for="inlineRadio1"> Inline One </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                            <label for="inlineRadio2"> Inline Two </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include "footer.php" ?>

 
 
 
<!-- Checkbox -->
<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<!-- Data picker -->
<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- Clock picker -->
<link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
<script src="js/plugins/clockpicker/clockpicker.js"></script>
<!-- Select2 -->
<link href="css/plugins/select2/select2.min.css" rel="stylesheet">
<script src="js/plugins/select2/select2.full.min.js"></script>
	
	<script>
	$('.clockpicker').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
	});	
	

	 $(".select2_demo_1").select2();
		$(".select2_demo_2").select2();
		$(".select2_demo_3").select2({
			placeholder: "Select a state",
			allowClear: true
	});
			
	$('#data_1 .input-group.date').datepicker({
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		calendarWeeks: true,
		autoclose: true
	});

	$('#data_2 .input-group.date').datepicker({
		startView: 1,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		format: "dd/mm/yyyy"
	});

	$('#data_3 .input-group.date').datepicker({
		startView: 2,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true
	});

	$('#data_4 .input-group.date').datepicker({
		minViewMode: 1,
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		todayHighlight: true
	});

	$('#data_5 .input-daterange').datepicker({
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true
	});
	</script>