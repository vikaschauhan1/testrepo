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
        <li class="active">Preview Broadcast </li>
      </ul>
      </div>
      <div class="row">
		<div class="col-lg-12 col-md-12">
			<section class="box">
            <header class="panel_header marginBottom">
                <h2 class="title pull-left">Create Broadcast</h2>
                <div class="actions panel_actions pull-right">
                	<a href="{{ route('broadcast.view-broadcast') }}" class="btn btn-md btn-primary"><i class="fa fa-eye"></i>&nbsp;View Broadcast</a>
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
		<p class="tabbline hide">Send a static message to all recipients quickly.</p>
		<div class="col-md-12">
		
		<fieldset>
			<legend>Broadcast Details</legend>
			<div class="form-group row">
							<label for="broadcatname" class="col-md-4">Broadcast Name :</label>
							<div class="col-md-8">
							<b>Broad123</b>
							</div>
					</div>
					<div class="form-group row">
						<label for="broadcastschd" class="col-md-4">Broadcast Schedule:</label>
						<div class="col-md-8">
						<b>14-Dec-2018 09:52 AM</b>
					
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
			
			
			<div class="simplebox"><!-- simple broadcast category start -->
			
				
				<div class="form-group ctemplate row">
				<label for="templatename" class="col-md-4">Select Template :</label>
				<div class="col-md-8">
						<b>HDFC-CC</b>
					
				</div>
				</div>
				<div class="form-group row">
				<label for="templatename" class="col-md-4">Message :</label>
				<div class="col-md-8">
						Dear {1} Stmt for HDFCBANK Creditcard ending {2} dispatched. Min due Rs {3}. Total Due {4}. Pymt due on {5}.
				</div>
			</div>
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Unicode Message(Optional):</label>
				<div class="col-md-8">
						<b>Allow Unicode</b>
				</div>
			</div>
			</div><!-- end simple broadcast div -->
			
			<div class="oneonebox"><!-- start oneonebroadcast div -->
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Select Delimeter :</label>
				<div class="col-md-8">
					<b>PIPE |</b>
				</div>
				</div>
				<div class="rupload1">
					<div class="form-group row">
							<label for="templatename" class="col-md-4">Upload File :</label>
							<div class="col-md-8">
								<b>Numbers.txt</b>
							</div>
					</div>
					<div class="row">
					<label for="templatename" class="col-md-4"></label>
					<div class="col-md-8">
						<b>Scrub Blacklist Numbers</b>
						
					</div>
					</div>		
						<div class="form-group row">
					<label for="templatename" class="col-md-4">Total Count Records :</label>
					<div class="col-md-8">
						<span class="lineheight24"><strong>213234</strong></span>
						
					</div>
				</div>	
				
				</div>
			
			</div><!-- end oneone broadcast div -->
			
			</fieldset>
			
			
		</div><!-- closed leftside col-md-8-->
		<div class="col-md-12">
			<fieldset>
				<legend>Uploaded File Preview</legend>
			<p class="text-left"><b>TOTAL RECORDS IN FILE : 46223</b>&nbsp;|&nbsp; <b>SHOWING TOP 10 RECORDS FROM FILE</b></p><br>
			<div class="table-responsive">
				<table class="table table-striped">
								<thead>
									<tr>
										<th>MSISDN</th>
										<th>Customer</th>
										<th>Card Number</th>
										<th>Min Due</th>
										<th>Total Due</th>
										<th>Due Date</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>9555803824</td>
										<td>Ajit</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>08-12-2018</td>
									</tr>
									<tr>
										<td>9865803824</td>
										<td>Anoop</td>
										<td>5443765876456</td>
										<td>14,000</td>
										<td>32,000</td>
										<td>07-12-2018</td>
									</tr>
									<tr>
										<td>9873803856</td>
										<td>Sandeep</td>
										<td>5244769876543</td>
										<td>15,000</td>
										<td>40,000</td>
										<td>06-12-2018</td>
									</tr>
									<tr>
										<td>9555803824</td>
										<td>Rohit</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>04-12-2018</td>
									</tr>
									<tr>
										<td>9555803824</td>
										<td>Ishu</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>09-12-2018</td>
									</tr>
									<tr>
										<td>9555803824</td>
										<td>Arjun</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>11-12-2018</td>
									</tr>
									<tr>
										<td>9555803824</td>
										<td>Rahul</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>05-12-2018</td>
									</tr>
									<tr>
										<td>9555803824</td>
										<td>Mohan</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>05-12-2018</td>
									</tr>
									<tr>
										<td>9555803824</td>
										<td>Sohan</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>05-12-2018</td>
									</tr>
									<tr>
										<td>9555803824</td>
										<td>Ranjeet</td>
										<td>5243765876543</td>
										<td>12,000</td>
										<td>30,000</td>
										<td>05-12-2018</td>
									</tr>
									</tbody>
								</table>
					</div>
			</fieldset>
			
			<p class="hide"><a href="#" class="btn btn-primary-outline btn-xs pull-left"><< Previous</a> &nbsp;&nbsp;<a href="#" class="btn btn-primary-outline btn-xs pull-right">Next >></a></p>
		</div>	
			
		</div>
      </div>
	</div>
   </div>
</div>
</div>
						
				
					
					</div>
							
				</div>
				
			
			<footer>
				<div class="form-group row text-center">
							
							<div class="col-md-12">
							
								<a class="btn btn-primary" onclick="new PNotify({
                                  title: 'Campaign created',
                                  text: 'Campaign created successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });"><i class="fa fa-floppy-o"></i>&nbsp;Submit</a>
								
								<a class="btn btn-cancel" href="{{ route('broadcast.view-broadcast') }}"><i class="fa fa-times-circle" ></i>&nbsp;Cancel</a>
							</div>
				</div>
			</footer>
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

