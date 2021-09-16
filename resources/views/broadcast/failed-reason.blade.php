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
        <div class="pull-left mainico hide"><i class="fa fa-users"></i></div>
		<h2 class="pull-left"><span>&nbsp;</span>Broadcast Management<br>
		<small>Failed Reason</small></h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        <li><a href="{{ route('broadcast.broadcast-summary') }}"><i class="fa fa-home"></i>&nbsp;Broadcast Management</a></li>
        <li class="active">Failed Reason</li>
      </ul>
      </div>
	  
	  
	  
	  <div class="row">
		<div class="col-lg-12">
		<section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Failed Reason Broadcast - rash1</h2>
                <div class="actions panel_actions pull-right">
				<a href="{{ route('broadcast.broadcast-summary') }}" class="btn btn-md btn-primary"><i class="fa fa-angle-double-left"></i>&nbsp;Back to Broadcast Summary</a>
                </div>
            </header>
            <div class="content-body">    
			<div class="row">
			<form class="form-horizontal inlineform marginbottom10">
				<div class="text-center">
				<div class="row">
		                                <div class="col-md-12">
                                <div class="tab-content">
        <div role="tabpanel" class="tab-pane active">
			<div class="card">
			 <div class="front">
			
						
		
		<div class="col-md-12">
			
					
		
				<div class="form-group row">
					<label for="" class="col-md-4">Mobile Switched Off :</label>
					<div class="col-md-8">
						<span ><p>10</p></span>
						
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-md-4">Inbox Full  :</label>
					<div class="col-md-8">
						<span ><p>10</p></span>
						
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-md-4">Inbox Full  :</label>
					<div class="col-md-8">
						<span ><p>10</p></span>
						
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-md-4">Out of Network  :</label>
					<div class="col-md-8">
						<span ><p>10</p></span>
						
					</div>
				</div>
				<div class="form-group row">
					<label for="" class="col-md-4">Call SMS Barried  :</label>
					<div class="col-md-8">
						<span ><p>10</p></span>
						
					</div>
				</div>
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Other  :</label>
					<div class="col-md-8">
						<span ><p>00</p></span>
						
					</div>
				</div>
				</div>
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Download Failed Recipents Number :</label>
					<div class="col-md-8">
						<p><a href="#" class="">failed_recipients123.csv</a></p>
						
					</div>
				</div>
			
			
			</div>
        </div>
		</div>
		</div>
		
		<div class="back">
		<div class="col-xs-12">
				<div id="campaignslareport" style="max-width:100%; height: 500px; margin: 0 auto"></div>
			</div>
			
		</div>
		</div>
		
        </section></div>
       
	
       
         
         
        </div>
	  
	  
	  </div><!-- end content div-->
@include('layouts.footer')
<!-- //Footer -->

