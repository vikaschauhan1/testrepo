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
		<h2 class="pull-left"><span>&nbsp;</span>Notifications<br>
		<small>View Notifications Requests</small></h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
			<li><a href="{{ route('broadcast.view-broadcast') }}"><i class="fa fa-home"></i>&nbsp;Broadcast Management</a></li>
			<li class="active">Notifications</li>
		</ul>
      </div>
	  
	  
	  <div class="row">
		<div class="col-lg-12">
		<section class="box">
		 <div class="row">
            <div class="col-md-12 ">
			
			<div class="tabbable-panel ">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							<i class="fa fa-cubes"></i>&nbsp;&nbsp;Group Notification <span class="label " style="background:#6673FC">3</span></a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">
							<i class="fa fa-file-text-o"></i>&nbsp;&nbsp;Template Notification <span class="label " style="background:#6673FC">2</span></a>
						</li>
						<li>
							<a href="#tab_default_3" data-toggle="tab">
							<i class="fa fa-comments"></i>&nbsp;&nbsp;Broadcast Notification <span class="label " style="background:#6673FC">2</span></a>
						</li>
					</ul>
					<div class="tab-content paddingtab notificationtab">
						<div class="tab-pane active" id="tab_default_1">
							<div id="example-1_wrapper" class="dataTables_wrapper form-inline">
			
			
			<table id="example1" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
               <thead>
			   <tr>
					<th>Group Name </th>
					<th style="width:100px">No. of recipients</th>
					<th>Creation Date</th>
					<th>Created by</th>
					
					<th width="200px">Action</th>
				</tr>
				</thead>
				<tbody>
				<tr>
				<td><a href="javascript:void(0);" data-toggle="modal" data-target="#groupddetails" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Group Details">DemoGrp</a><span class="tag label label-success">New</span></td>
				<td>219876</td>
				<td>16-Aug-2017 18:34 PM</td>
				<td>ajitk</td>
				
				
				<td>
				<a href="#" class="btn-approvetxt"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a>
				
				</td>
				</tr>
				<tr><td><a href="javascript:void(0);" data-toggle="modal" data-target="#groupddetails" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Group Details">Group2</a><span class="tag label label-success">New</span></td>
				<td>14546</td>
				<td>18-Aug-2017 15:33 PM</td>
				<td>anoop</td>
				
				<td>
					<a href="#" class="btn-approvetxt"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a>
				</td></tr>
							<tr>
							<td><a href="javascript:void(0);" data-toggle="modal" data-target="#groupddetails" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Group Details">National</a><span class="tag label label-warning">Edit</span></td><td>23466454</td><td>25-Aug-2017 12:07 PM</td><td>ajitk</td>
							<td>
								<a href="#" class="btn-approvetxt"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a>
							
							</td></tr>
								</tbody>
						</table>
								
							</div>	
						</div>
						<div class="tab-pane" id="tab_default_2">
							<table id="example2" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
                <thead>
                    <tr role="row">
					<th style="width: 50px;">Template Id</th>
					<th>Template Name</th>
					<th>Message Type</th>
				
					<th>Created Date</th>
					<th>Created By</th>
					<th style="width: 200px;">Action</th>
					</tr>
                </thead>

                <tbody>
				<tr id="rows" class="sms">
								<td>1</td>
								<td><a href="javascript:void(0);" data-toggle="modal" data-target="#templatedetails" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Template Details">Credit card Offer</a><span class="tag label label-warning">Edit</span></td>
								<td>Static</td>
								
								
								<td>
									15-June-2018 10:12 AM
								</td>
								<td>
									ajitk
								</td>
								
								<td>
								<a href="#" class="btn-approvetxt"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a>
								
								</td>
								
							</tr>
							<tr class="sms">
								<td>2</td>
								
								<td><a href="javascript:void(0);" data-toggle="modal" data-target="#templatedetails" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Template Details">Credit card Payment</a><span class="tag label label-warning">Edit</span></td>
								<td>Dynamic</td>
								
								
								<td>
									15-June-2018 10:12 AM
								</td>
								<td>
									anoop
								</td>
								
								<td>
								<a href="#" class="btn-approvetxt"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-toggle="modal" data-target="#rejectreason" ><i class="fa fa-times" ></i> Reject</a>	
								</td>
								
							</tr>
							</tbody>
							</table>
						</div>
						<div class="tab-pane" id="tab_default_3">
							<table id="example3" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
               <thead>
				   <tr>
					   <th>Broadcast Name</th>
					   <th>Sender Name</th>
					   <th>Scheduled Date/Time</th>
					   <th>Message</th>
					   <th>Broadcast Type</th>
					   <th>Created by</th>
					   <th style="width: 200px;">Action</th>
				   </tr>
			   </thead>
			   <tbody>
				   <tr>
					   <td><a href="javascript:void(0);" data-toggle="modal" data-target="#broadcastdetail" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash1</a><span class="tag label label-warning">Edit</span></td>
					   <td>DEMOAW</td>
					   <td>06-Nov-2018 10:38 AM</td>
					   <td>जोक्स इन</td>
					   
					   <td>Simple</td>
					   <td>ajitk</td>
					   <td>
							<a href="#" class="btn-approvetxt"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a>
					   </td>
				 </tr>
				 <tr>
					<td><a href="javascript:void(0);" data-toggle="modal" data-target="#broadcastdetail" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash2</a><span class="tag label label-warning">Edit</span></td>
					<td>DEMOAW</td>
					<td>14-Dec-2018 09:52 AM</td>
					<td>hi, this is demo</td>
					
					<td>One-One</td>
					<td>anoop</td>
					<td>
					<a href="#" class="btn-approvetxt"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" ><i class="fa fa-times" data-toggle="modal" data-target="#rejectreason" ></i> Reject</a>
						
					</td>
				</tr>
				</tbody>
				</table>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		</section>
		
       </div>
	  
	  
	  </div><!-- end content div-->
      

<!-- use for broadcast details on click modal -->

<!-- Modal -->
<div id="templatedetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Template Details - Credit card Offer</h4>
      </div>
      <div class="modal-body">
	  <div class="row">
        <div class="col-md-12">
					<div class="form-group row">
							<label for="broadcatname" class="col-md-4">Template ID :</label>
							<div class="col-md-8">
							<p>1</p>
							</div>
					</div>
					<div class="form-group row">
							<label for="broadcatname" class="col-md-4">Template Name :</label>
							<div class="col-md-8">
							<p>Credit Card offer</p>
							</div>
					</div>
					<div class="form-group row">
						<label for="broadcastschd" class="col-md-4">Message Type:</label>
						<div class="col-md-8">
						<p>Static</p>
					
						</div>
					</div>
					<div class="form-group row">
							<label for="templatetext" class="col-md-4">Message Text :</label>
							<div class="col-md-8">
							<p>Dear customer flat 10% extra off on amazon.in till 5th of Dec 18.</p>
							
					         </div>
					</div>
			
					<div class="form-group row">
							<label for="templatetext" class="col-md-4" >Created Date :</label>
							<div class="col-md-8">
								<p>28-Nov-2018 10:12 AM</p>
							
							</div>
					</div>
					<div class="form-group row">
						<label for="templatename" class="col-md-4">Created By:</label>
						<div class="col-md-8">
							<p>ajitk</p>
						</div>
					</div>							
			
      </div>
	  </div>
	  </div>
      <div class="modal-footer">
       <a href="#" class="btn-approvetxt" data-dismiss="modal"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-dismiss="modal" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a> 
		
		
      </div>
    </div>

  </div>
</div>
<!-- end broadcast modal -->

<!-- use for Group details on click modal -->
<div id="groupddetails" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Group Details - DemoGrp</h4>
      </div>
      <div class="modal-body">
	  <div class="row">
        <div class="col-md-12">
					<div class="form-group row">
							<label for="templatename" class="col-md-4">Group Name :</label>
							<div class="col-md-8">
							<p>DemoGrp	</p>
							</div>
						</div>
					
						<div class="form-group row rsms">
							<label for="templatename" class="col-md-4">Creation Date:</label>
							<div class="col-md-8">
								<p>25-Aug-2017 15:41 PM</p>
							</div>
						</div>
						<div class="form-group row rsms">
							<label for="templatename" class="col-md-4">Last Modified Date:</label>
							<div class="col-md-8">
								<p class="">25-Aug-2017 15:41 PM</p>
							</div>
						</div>
						<div class="form-group row rsms">
							<label for="templatename" class="col-md-4">Last Action Performed Date:</label>
							<div class="col-md-8">
								<p>25-Aug-2017 15:41 PM</p>
							</div>
						</div>
						
						<div class="form-group row rsms">
							<label for="templatename" class="col-md-4">Recipient Type :</label>
							<div class="col-md-8">
								<p class="">Domestic</p>
							</div>
						</div>
						<div class="form-group row rsms">
							<label for="templatename" class="col-md-4">Country :</label>
							<div class="col-md-8">
								<p>India</p>
							</div>
						</div>						
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Number of Recipient:</label>
							<div class="col-md-8">
								<p>887654	</p>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Download Group File :</label>
							<div class="col-md-8">
								<p ><a href="#">Group_file1.csv</a></p>
							</div>
						</div>
      </div>
	  </div>
	  </div>
      <div class="modal-footer">
       <a href="#" class="btn-approvetxt" data-dismiss="modal"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-dismiss="modal" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a> 
		
		
      </div>
    </div>

  </div>
</div>
<!-- end group modal -->

<!-- Template Modal -->
<div id="broadcastdetail" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Broadcast Details - rash1</h4>
      </div>
      <div class="modal-body">
	  <div class="row">
        <div class="col-md-12">
					<div class="form-group row">
							<label for="broadcatname" class="col-md-4">Broadcast Name :</label>
							<div class="col-md-8">
							<p>rash1</p>
							</div>
					</div>
					<div class="form-group row">
						<label for="broadcastschd" class="col-md-4">Broadcast Schedule:</label>
						<div class="col-md-8">
						<p>18-Nov-2018 10:38 AM</p>
					
						</div>
					</div>
					<div class="form-group row">
							<label for="templatetext" class="col-md-4">Broadcast Category :</label>
							<div class="col-md-8">
							<p>Dynamic</p>
							
					         </div>
					</div>
			
					<div class="form-group row">
							<label for="templatetext" class="col-md-4" >Message Category :</label>
							<div class="col-md-8">
								<p>Alert</p>
							
							</div>
					</div>
					<div class="form-group row">
						<label for="templatename" class="col-md-4">Sender Name:</label>
						<div class="col-md-8">
							<p>HDFC-BK</p>
						</div>
					</div>							
			<div class="form-group row">
							<label for="templatename" class="col-md-4">Broadcast Termination :</label>
							<div class="col-md-8">
							<p>Domestic</p>
							
						</div>
						</div>
			
				
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Message Type :</label>
				<div class="col-md-8">
						<p>Flash</p>
					
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
						<span ><p>213234</p></span>
						
					</div>
				</div>	
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Download Recipents :</label>
					<div class="col-md-8">
						<span><p><a href="#" class="">recipients123.csv</a></p></span>
						
					</div>
				</div>
      </div>
	  </div>
	  </div>
      <div class="modal-footer">
       <a href="#" class="btn-approvetxt" data-dismiss="modal"><i class="fa fa-check" ></i> Approve</a> &nbsp;&nbsp; <a href="#" class="btn-rejecttxt" data-dismiss="modal" data-toggle="modal" data-target="#rejectreason"><i class="fa fa-times" ></i> Reject</a> 
		
		
      </div>
    </div>

  </div>
</div>
<!-- end Template modal -->

@include('layouts.footer')
<!-- //Footer -->

