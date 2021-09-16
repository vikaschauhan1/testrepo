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
		<h2 class="pull-left"><span>&nbsp;</span>Template Management<br>
				<small>Detail list of all the configured SMS/Email templates</small>
		</h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('template.view-template') }}"><i class="fa fa-home"></i>&nbsp;Template Management</a></li>
        <li class="active">View Management</li>
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
											<input type="text" placeholder="search template.."/>
										</li>
										<li>
											<select>
												<option>Template Type</option>
												<option>Static</option>
												<option>Dynamic</option>
												
											</select>
								
                                        </li>
										<li>
                                         
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle dateDropDown">Select Date <span class="caret"></span></button>
                                        <ul class="dropdown-menu dateDropDown-List">
                                            <li><a href="#" class="customDate">Creation Date</a></li>
                                            <li><a href="#" class="customDate">Modified Date</a></li>
                                          
                                           
                                            
                                        </ul>
                                    </div>
                                 
								
                                        </li>
                                    
                                       <li class="customDateRange"> <input name="textfield2" id="fromdate" type="text" class="lowwid" placeholder="From Date"></li>                
                                        <li class="customDateRange"> <input name="textfield2" id="todate" type="text" class="lowwid" placeholder="To Date"></li>  
                                        
                                    </ul>


                                </div>
								<footer class="panel-footer">Templates are showing data for <span class="rdate">10-08-2018</span> to <span class="rdate">11-09-2018</span>
								
								</footer>
                            </div>
                        </div>
                    </div>
	  
      <div class="row">
		<div class="col-lg-12">
		<section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">View Template</h2>
                <div class="actions panel_actions pull-right">
				 <a href="{{ route('template.create-template') }}" class="btn btn-md btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Create Template</a>
					
					
                </div>
            </header>
            <div class="content-body">    
			<div class="row">
			<div class="col-xs-12">

            <div id="example-1_wrapper" class="dataTables_wrapper form-inline">
			<div id="smstemplate">
			<table id="example1" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
                <thead>
                    <tr role="row">
					<th style="width: 50px;">Template Name</th>
					<th style="width: 130px;">Template Type</th>
					<th style="width: 25%;">Template Text</th>
					<th style="width: 15%">Created Date</th>
					<th class="sorting" style="width: 15%">Modified Date</th>
					<th class="sorting" style="width: 80px;">Status</th>
					<th class="sorting" style="width: 200px;">Action</th>
					</tr>
                </thead>

                <tbody>
				<tr id="rows" class="sms">
								<td>CC_payment</td>
								<td>Static</td>
								<td>Dear Customer, Apply for home loan or transfer your existing home loan in very low RIO 8.35%/PA</td>
								
								<td>
									15-June-2018 10:12 AM
								</td>
								<td>
									17-June-2018 12:30 PM
								</td>
								<td>
									<div class="onoffswitch">
						<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" onclick="new PNotify({
                                  title: 'Activated',
                                  text: 'Activated successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });" >
						<label class="onoffswitch-label" for="myonoffswitch">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
					
								</td>
								<td>
								<div class="btn-group">
									<a href="{{ route('template.edit-template') }}" title="Edit/Update row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
									<a href="#" title="make a copy of this template" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									<a href="#" title="Delete row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-delete"><i class="fa fa-trash-o"></i></a>
								</td>
								
							</tr>
							<tr class="sms">
								<td>CC_hindi</td>
								<td>Dynamic</td>
								<td>प्रिय {1} एचडीएफसीबीएएनके क्रेडिटकार्ड समाप्त होने के लिए {2} प्रेषित। न्यूनतम देय {3}। कुल देय {4}। {5} पर पिमेट।</td>
								
								<td>
									15-June-2018 10:12 AM
								</td>
								<td>
									17-June-2018 12:30 PM
								</td>
								<td>
									<div class="onoffswitch">
						<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" onclick="new PNotify({
                                  title: 'Activated',
                                  text: 'Activated successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });" >
						<label class="onoffswitch-label" for="myonoffswitch1">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
					
								</td>
								<td>
								<div class="btn-group">
									<a href="{{ route('template.edit-template') }}" title="Edit/Update row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
									<a href="#" title="make a copy of this template" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									<a href="#" title="Delete row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-delete"><i class="fa fa-trash-o"></i></a>
								</div>	
								</td>
								
							</tr>
							<tr>
								<td>CC_DUE</td>
								<td>Dynamic</td>
								<td>Dear {1} Stmt for HDFCBANK Creditcard ending {2} dispatched. Min due Rs {3}. Total Due {4}. Pymt due on {5}.</td>
								
								<td>
									15-June-2018 10:12 AM
								</td>
								<td>
									17-June-2018 12:30 PM
								</td>
								<td>
									<div class="onoffswitch">
									<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" onclick="new PNotify({
                                  title: 'Activated',
                                  text: 'Activated successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });" >
								<label class="onoffswitch-label" for="myonoffswitch2">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
								</label>
							</div>
					
								</td>
								<td>
								<div class="btn-group">
									<a href="{{ route('template.edit-template') }}" title="Edit/Update row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
									<a href="#" title="make a copy of this template" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									<a href="#" title="Delete row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-delete"><i class="fa fa-trash-o"></i></a>
								</div>	
								</td>
								
							</tr>
							<tr>
								<td>Temp2</td>
								<td>Static</td>
								<td>Dear Customer Download our app by cliking the below link. http://acl.cc/hdfcapp </td>
								
								<td>
									15-June-2018 10:12 AM
								</td>
								<td>
									17-June-2018 12:30 PM
								</td>
								<td>
									<div class="onoffswitch">
						<input type="checkbox" name="onoffswitch" checked class="onoffswitch-checkbox" id="myonoffswitch3" onclick="new PNotify({
                                  title: 'Activated',
                                  text: 'Activated successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });" >
						<label class="onoffswitch-label" for="myonoffswitch3">
							<span class="onoffswitch-inner"></span>
							<span class="onoffswitch-switch"></span>
						</label>
					</div>
					
								</td>
								<td>
								<div class="btn-group">
									<a href="{{ route('template.edit-template') }}" title="Edit/Update row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-edit"><i class="fa fa-pencil"></i></a>
									<a href="#" title="make a copy of this template" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-clone"><i class="fa fa-files-o"></i></a>
									<a href="#" title="Delete row data" data-placement="top" data-toggle="tooltip" class="btn btn-xs btn-delete"><i class="fa fa-trash-o"></i></a>
								</div>	
								</td>
								
							</tr>
				</tbody>
            </table>
			</div>
			
			
			</div>
        </div>
		</div>
		</div>
		
        </section></div>
       
	
       
         
         
        </div>
      </div>
    </div>
  </div>
  <!-- //Right Content -->
</div>
<!-- //Body -->
<!-- Footer -->
@include('layouts.footer')
<!-- //Footer -->

