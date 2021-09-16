<!-- include header -->
@include('layouts.header')
<!-- include header -->

<!-- Body -->
<!-- sidebar include -->
@include('layouts.sidebar_msg')
<!-- end sidebar -->

    <!-- Right Content -->
 <div class="content preview">
      <div class="heading clearfix">
        <div class="pull-left mainico hide"><i class="glyphicon glyphicon-th"></i></div>
		<h2 class="pull-left"><span>&nbsp;</span>Broadcast Management<br>
				<small>Broadcast Management</small>
		</h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('broadcast.broadcast-summary') }}"><i class="fa fa-tachometer"></i>&nbsp;Dashboard</a></li>
        <li class="active">Broadcast Details </li>
      </ul>
      </div>
      <div class="row">
		<div class="col-lg-12 col-md-12">
			<section class="box">
            <header class="panel_header marginBottom">
                <h2 class="title pull-left">Broadcast Details</h2>
                <div class="actions panel_actions pull-right">
                	<a href="{{ route('broadcast.view-broadcast') }}" class="btn btn-md btn-primary"><i class="fa fa-angle-double-left"></i>&nbsp;Back to Broadcast Management</a>
                </div>
            </header>
            <div class="content-body"> 
						
				<div class="row">
				<div class="col-xs-12 ">
				<form class="form-horizontal inlineform marginbottom10">
					
					<div class="text-center" id="smsdivb">
						<div class="row">
		                                <div class="col-md-12">
                                <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="simple">
		
		<div class="col-md-12">
		
		
			<div class="form-group row">
							<label for="broadcatname" class="col-md-4">Broadcast Name :</label>
							<div class="col-md-8">
							<b>Broad123</b>
							</div>
					</div>
					<div class="form-group row">
						<label for="broadcastschd" class="col-md-4">Broadcast Schedule:</label>
						<div class="col-md-8">
						<b>Broad123</b>
					
						</div>
					</div>
					<div class="form-group row">
							<label for="templatetext" class="col-md-4">Broadcast Category :</label>
							<div class="col-md-8">
							<b>Dynamic</b>
							
					         </div>
					</div>
			
					<div class="form-group row">
							<label for="templatetext" class="col-md-4" >Message Category :</label>
							<div class="col-md-8">
								<b>Alert</b>
							
							</div>
					</div>
					<div class="form-group row">
						<label for="templatename" class="col-md-4">Sender Name:</label>
						<div class="col-md-8">
							<b>HDFC-BK</b>
						</div>
					</div>							
			<div class="form-group row">
							<label for="templatename" class="col-md-4">Broadcast Termination :</label>
							<div class="col-md-8">
							<b>Domestic</b>
							
						</div>
						</div>
			
				
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Message Type :</label>
				<div class="col-md-8">
						<b>Flash</b>
					
				</div>
			</div>
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Message :</label>
				<div class="col-md-8">
						Dear customer Stmt for HDFCBANK Creditcard ending #CNNN dispatched. Min due Rs #TAMOUNT. Total Due Rs #MAmount. Pymt due on #DUEDATE.
				</div>
			</div>
			<div class="form-group row">
					<label for="templatename" class="col-md-4">Total Count Records :</label>
					<div class="col-md-8">
						<span ><b>213234</b></span>
						
					</div>
				</div>	
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Download Recipents :</label>
					<div class="col-md-8">
						<span><b><a href="#" class="">recipients123.csv</a></b></span>
						
					</div>
				</div>
			
			
			
			
			
			
		</div><!-- closed leftside col-md-8-->
		
			
		</div>
      </div>
	</div>
   </div>
</div>
</div>
						
				
					
					</div>
							
				</div>
				
			
			
   </section>
   </div>
   </div>
       
	
   </div>
      </div>
    </div>
  </div>
  <!-- //Right Content -->

@include('layouts.footer')
<!-- //Footer -->

