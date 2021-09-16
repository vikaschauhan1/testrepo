<!-- include header -->
@include('layouts.header')
<!-- include header -->

<!-- Body -->
<!-- sidebar include -->
@include('layouts.sidebar_msg')
<!-- end sidebar -->

    <!-- Right Content -->
    <div class="content">
     
      <div class="heading clearfix">
        <div class="pull-left mainico hide"><i class="fa fa-file-text-o"></i></div>
		<h2 class="pull-left"><span>&nbsp;</span>Edit Template<br>
				<small>Edit SMS and Email specific templates require for broadcasts.</small></h2>
		 <ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('template.view-template') }}"><i class="fa fa-home"></i>&nbsp;Template Management</a></li>
        <li class="active">Edit Template</li>
      </ul>
      </div>
      <div class="row">
		<div class="col-lg-12 col-md-12">
			<section class="box">
            <header class="panel_header marginBottom">
                <h2 class="title pull-left">Edit Template</h2>
                <div class="actions panel_actions pull-right">
                	<a href="{{ route('template.view-template') }}" class="btn btn-md btn-primary"><i class="fa fa-eye"></i>&nbsp;View Template</a>
                
				</div>
            </header>
            <div class="content-body">  
					
			<div class="row">
				<div class="col-xs-12 ">
				<form class="form-horizontal inlineform">
					<div id="smstempdiv" class="text-center">
						<div class="form-group has-feedback row">
							<label for="templatename" class="col-md-4">Template Name :</label>
							<div class="col-md-8">
							<input type="text" id="templatename" disabled name="templatename" value="template1" /><i class="fa fa-question-circle info" data-toggle="tooltip" data-placement="top" title="Enter template name."></i>
							<span class="form-control-feedback glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Template Type :</label>
							<div class="col-md-8">
							<select disabled>
								<option>Static</option>
								<option selected>Dynamic</option>
								
							</select>
							
							</div>
						</div>
						<div class="form-group row"><label class="col-md-4"> Template Text :</label>
							<div class="col-md-8">
							<textarea id="templatetexts">Dear {1} Stmt for HDFCBANK Creditcard ending {2} dispatched. Min due Rs {3}. Total Due {4}. Pymt due on {5}.</textarea><i class="fa fa-question-circle info" data-toggle="tooltip" data-placement="top" title="The dynamic value in template text should represented as <dynamic>. For e.g. Dear Customer, your Ac <dynamic> is credited with <dynamic> on <dynamic>"></i>
							</div>
						</div>
						
					
					</div><!-- end division div -->
					
					
					
						
				</div>
				</div>
			</div>
			<footer>
				<div class="form-group row text-center">
							
							<div class="col-md-12">
								<button  class="btn btn-primary" onclick="new PNotify({
                                  title: 'Template Created',
                                  text: 'Template created successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });"><i class="fa fa-floppy-o"></i>&nbsp;Create Template</button>
								
								<a class="btn btn-cancel" href="{{ route('template.view-template') }}"><i class="fa fa-times-circle" ></i>&nbsp;Cancel</a>
							</div>
						</div>
			</footer>
   </section>
   
   </div>
       
	
       
         
         
        </div>
      </div>
    </div>
  <!-- //Right Content -->
<!-- Footer -->
@include('layouts.footer')
<!-- //Footer -->

