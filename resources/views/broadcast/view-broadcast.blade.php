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
		<small>View Broadcast Messages</small></h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        <li><a href="{{ route('broadcast.view-broadcast') }}"><i class="fa fa-home"></i>&nbsp;Broadcast Management</a></li>
        <li class="active">View Broadcast</li>
      </ul>
      </div>

	  <div class="row">
                        <div class="col-sm-12">
                            <div class="panel">
                                <div class="main_head">Filter your search: <span class="main_head_label"></span>
								
								 <div class="actions panel_actions pull-right">
									<button type="button" class="btn btn-xs btn-primary" name="Submit" value="Submit"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
									<button type="reset" class="btn btn-xs btn-primary" name="reset" value="Reset"><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Reset</button>
								</div>
								</div>
                                <div class="panel-body search_bar">
                                    <ul class="padbot">
                                        <li>
											<input type="text" placeholder="search broadcast.."/>
										</li>
										<li>
											<select>
												<option>Broadcast Type</option>
												<option>Simple</option>
												<option>One to One</option>
												<option>Dynamic</option>
												<option>Reminder</option>
											</select>
								
                                        </li>
										<li>
											<select>
												<option>Broadcast Status</option>
												<option>Scheduled</option>
												<option>Re-Scheduled</option>
												<option>Completed</option>
												<option>Started</option>
												<option>Cancelled</option>
												
											</select>
								
                                        </li>
                                       
                                       <li class="customDateRange1"> <input name="textfield2" id="fromdate" type="text" class="lowwid" placeholder="Scheduled From Date"></li>                
                                        <li class="customDateRange1"> <input name="textfield2" id="todate" type="text" class="lowwid" placeholder="Scheduled To Date"></li>  
                                        
                                    </ul>


                                </div>
								<footer class="panel-footer">Broadcasts are showing data for <span class="rdate">10-08-2018</span> to <span class="rdate">11-09-2018</span>
								
								</footer>
                            </div>
                        </div>
                    </div>
	  
	  <div class="row">
		<div class="col-lg-12">
		<section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">View Broadcast</h2>
                <div class="actions panel_actions pull-right">
				
                	<a href="{{ route('broadcast.create-broadcast') }}" class="btn btn-md btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Create Broadcast</a>
					
					
                </div>
            </header>
            <div class="content-body">
			<div class="row">
			<div class="col-xs-12">
            <div id="example-1_wrapper" class="dataTables_wrapper form-inline">

			<table id="example1" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
               <thead>
				   <tr>
					   <th>Broadcast Name</th>
					   <th>Sender Name</th>
					   <th>Scheduled Date/Time</th>
					   <th>Message</th>
					   <th>SMS Count</th>
					   <th>Broadcast Size</th>
					   <th>Broadcast Type</th>
					   <th>Status</th>
					   <th width="180px">Action</th>
				   </tr>
			   </thead>
			   <tbody>
				   <tr>
					   <td><a href="{{ route('broadcast.broadcast-details') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">test1</a></td>
					   <td>DEMOAW</td>
					   <td>06-Nov-2018 10:38 AM</td>
					   <td>जोक्स इन</td>
					   <td>600</td>
					   <td>600</td>
					   <td>Simple</td>
					   <td><span class="tag label label-default">Completed</span></td>
					   <td>
							<div class="btn-group">
									
									<a href="#" data-toggle="tooltip" data-toggle="modal" data-target="#copybroadcast" data-placement="top" data-original-title="Make a copy of this broadcast" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									
									
									<a href="#." class="btn btn-xs btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete this broadcast"><i class="fa fa-trash-o"></i></a>
								</div>
					   </td>
				 </tr>
				 <tr>
					<td><a href="{{ route('broadcast.broadcast-details') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash1</a></td>
					<td>DEMOAW</td>
					<td>14-Dec-2018 09:52 AM</td>
					<td>-</td>
					<td>300</td>
					<td>300</td>
					<td>One-One</td>
					<td><span class="tag label label-success">Scheduled</span></td>
					<td>
					
						<div class="btn-group">
									
									<a href="{{ route('broadcast.edit-broadcast') }}" data-toggle="tooltip" data-placement="top" data-original-title="Edit Broadcast" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
									<a href="#"  data-toggle="modal" data-target="#copybroadcast" data-toggle="tooltip" data-placement="top" data-original-title="Make a copy of this broadcast" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									
									<a href="javascript:viod(0);"  class="btn btn-xs btn-clone" data-toggle="modal" data-target="#reschedulebroad" data-toggle="tooltip" data-placement="top" data-original-title="Re-schedule this broadcast"><i class="fa fa-clock-o" ></i></a>
									
									<a href="#" class="btn btn-xs btn-clone" data-toggle="tooltip" data-placement="top" data-original-title="Cancel this Broadcast"><i class="fa fa-times"></i></a>
									
									<a href="#." class="btn btn-xs btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete this broadcast"><i class="fa fa-trash-o"></i></a>
								</div>
					</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-details') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash2</a></td>
					<td>HDFC-CC</td>
					<td>16-Dec-2018 09:53 AM</td>
					<td>Dear {1} Stmt for HDFCBANK Creditcard ending {2} dispatched. Min due Rs {3}. Total Due {4}. Pymt due on {5}.</td>
					<td>600</td>
					<td>400</td>
					<td>Dynamic</td>
					<td><span class="tag label label-success">Re-Scheduled</span></td>
					<td>
						<div class="btn-group">
									
									<a href="{{ route('broadcast.edit-broadcast') }}" data-toggle="tooltip" data-placement="top" data-original-title="Edit Broadcast" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
									<a href="#"  data-toggle="modal" data-target="#copybroadcast" data-placement="top" data-original-title="Make a copy of this broadcast" data-toggle="tooltip" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									<a href="javascript:viod(0);"  class="btn btn-xs btn-clone" data-toggle="modal" data-target="#reschedulebroad" data-toggle="tooltip" data-placement="top" data-original-title="Re-schedule this broadcast"><i class="fa fa-clock-o" ></i></a>
									
									<a href="#" class="btn btn-xs btn-clone" data-toggle="tooltip" data-placement="top" data-original-title="Cancel this Broadcast"><i class="fa fa-times"></i></a>
									
									<a href="#." class="btn btn-xs btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete this broadcast"><i class="fa fa-trash-o"></i></a>
								</div>
					</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-details') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash3</a></td>
					<td>DEMOAW</td>
					<td>23-Nov-2018 09:53 AM</td>
					<td>Dear {1} Stmt for HDFCBANK Creditcard ending {2} dispatched. Min due Rs {3}. Total Due {4}. Pymt due on {5}.</td>
					<td>500</td>
					<td>500</td>
					<td>Dynamic</td>
					<td><span class="tag label label-warning">Started</span></td>
					<td>
						<div class="btn-group">
									<a href="#"  data-toggle="modal" data-target="#copybroadcast" data-placement="top" data-original-title="Make a copy of this broadcast" data-toggle="tooltip" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									
									
									
								</div>
					</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-details') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash4</a></td>
					<td>DEMOAW</td>
					<td>22-Nov-2018 09:53 AM</td>
					<td>Dear {1} Stmt for HDFCBANK Creditcard ending {2} dispatched. Min due Rs {3}. Total Due {4}. Pymt due on {5}.</td>
					<td>500</td>
					<td>500</td>
					<td>Dynamic</td>
					<td><span class="tag label label-danger">Cancelled</span></td>
					<td>
						<div class="btn-group">
									
									<a href="{{ route('broadcast.edit-broadcast') }}" data-toggle="tooltip" data-placement="top" data-original-title="Edit Broadcast" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
									<a href="#" data-toggle="modal" data-target="#copybroadcast" data-toggle="tooltip" data-placement="top" data-original-title="Make a copy of this broadcast" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									<a href="javascript:viod(0);"  class="btn btn-xs btn-clone" data-toggle="modal" data-target="#reschedulebroad" data-toggle="tooltip" data-placement="top" data-original-title="Re-schedule this broadcast"><i class="fa fa-clock-o" ></i></a>
									
									<a href="#." class="btn btn-xs btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete this broadcast"><i class="fa fa-trash-o"></i></a>
								</div>
					</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-details') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash5</a></td>
					<td>DEMOAW</td>
					<td>14-Dec-2018 09:52 AM</td>
					<td>-</td>
					<td>600</td>
					<td>500</td>
					<td>One-One</td>
					<td><span class="tag label label-default">Completed</span></td>
					<td>
						<div class="btn-group">
									
									
									<a href="#"  data-toggle="modal" data-target="#copybroadcast" data-toggle="tooltip" data-placement="top" data-original-title="Make a copy of this broadcast" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									
									<a href="#." class="btn btn-xs btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete this broadcast"><i class="fa fa-trash-o"></i></a>
								</div>
					</td>
				</tr>
				</tbody></table>
			
			
			
			</div>
        </div>
		</div>
		</div>
		
        </section></div>
       
	
       
         
         
        </div>
	  
	  
	  </div><!-- end content div-->


@include('layouts.footer')
<!-- //Footer -->

