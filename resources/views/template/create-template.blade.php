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
		<h2 class="pull-left"><span>&nbsp;</span>Create Template<br>
				<small>Create SMS and Email specific templates require for broadcasts.</small></h2>
		 <ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('template.view-template') }}"><i class="fa fa-home"></i>&nbsp;Template Management</a></li>
        <li class="active">Create Template</li>
      </ul>
      </div>
      <div class="row">
		<div class="col-lg-12 col-md-12">
			<section class="box">
            <header class="panel_header marginBottom">
                <h2 class="title pull-left">Create Template</h2>
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
							<input type="text" id="templatename" name="templatename" /><i class="fa fa-question-circle info" data-toggle="tooltip" data-placement="top" title="Enter template name."></i>
							<span class="form-control-feedback glyphicon glyphicon-ok"></span>
							</div>
						</div>
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Template Type :</label>
							<div class="col-md-8">
							<select>
								<option>Static</option>
								<option>Dynamic</option>
								
							</select>
							
							</div>
						</div>
						<div class="form-group row"><label class="col-md-4"> Template Text :</label>
							<div class="col-md-8">
							<textarea id="templatetexts"></textarea><i class="fa fa-question-circle info" data-toggle="tooltip" data-placement="top" title="The dynamic value in template text should represented as <dynamic>. For e.g. Dear Customer, your Ac <dynamic> is credited with <dynamic> on <dynamic>"></i>
							</div>
						</div>
						
					
					</div><!-- end division div -->
					
					
					
						
				</div>
				</div>
			</div>
			<footer>
				<div class="form-group row text-center">
							
							<div class="col-md-12">
								<button class="btn btn-primary" onclick="new PNotify({
                                  title: 'Template Created',
                                  text: 'Template created successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });"><i class="fa fa-floppy-o"></i>&nbsp;Submit</button>
								
								<a class="btn btn-cancel" href="javascript:void(0);"><i class="fa fa-times-circle" ></i>&nbsp;Reset</a>
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

