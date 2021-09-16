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
		<h2 class="pull-left"><span>&nbsp;</span>User Broadcast Report<br>
		<small>User Broadcast Summary</small></h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        <li><a href="{{ route('broadcast.view-broadcast') }}"><i class="fa fa-home"></i>&nbsp;Broadcast Management</a></li>
        <li class="active">User Broadcast Report</li>
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
										
                                       
                                       <li class="customDateRange1"> <input name="textfield2" id="fromdate" type="text" class="lowwid" placeholder="Scheduled From Date"></li>                
                                        <li class="customDateRange1"> <input name="textfield2" id="todate" type="text" class="lowwid" placeholder="Scheduled To Date"></li>  
                                        
                                    </ul>


                                </div>
								<footer class="panel-footer">Broadcast are showing data for <span class="rdate">10-08-2018</span> to <span class="rdate">11-09-2018</span>
								
								<span class="dropdown pull-right">
				<a href="#" class="pull-left  btn-download1 dropdown-toggle btn"  data-toggle="dropdown"><i class="fa fa-cloud-download" ></i> Download <span class="caret"></span></a>
				
				  <ul class="dropdown-menu">
					<li><a href="#" class="download"><i class="fa fa-file-excel-o"></i> xls</a></li>
					<li><a href="#" class="download"><i class="fa fa-file-excel-o"></i> xlsx</a></li>
					<li><a href="#" class="download"><i class="fa fa-file-excel-o"></i> csv</a></li>
					<li><a href="#" class="download"> <i class="fa fa-file-o"></i> text</a></li>
				  </ul>
				</span>
								
								</footer>
                            </div>
                        </div>
                    </div>
	  
	  <div class="row">
		<div class="col-lg-12">
		<section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">Broadcast Report (User - ajitk)<small> in Millions</small></h2>
                <div class="actions panel_actions pull-right">
				
                	
                </div>
            </header>
            <div class="content-body">    
			<div class="row">
			<div class="card">
			 <div class="front">
			<div class="col-xs-12">
            <div id="example-1_wrapper" class="dataTables_wrapper form-inline">
					
			<table id="example1" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
               <thead>
				   <tr>
					   <th>Broadcast Name</th>
					    <th>Broadcast Type</th>
					   <th>Broadcast Success Rate</th>
					   <th>Scheduled Date/Time</th>
					   <th>Total Request Pushed</th>
					   <th>Total SMS in Request</th>
					    <th>Total Delivered</th>
					   <th>DLR Not Recieved</th>
					  
					   <th>Total Failed</th>
					  
					   
				   </tr>
			   </thead>
			   <tbody>
				   <tr>
					   <td><a href="{{ route('broadcast.broadcast-detail-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">test1</a>
					   </td>
					    <td>Simple</td>
					   <td>80%</td>
					   <td>06-Nov-2018 10:38 AM</td>
					   <td>500</td>
					   <td>1000</td>
					   <td>400</td>
					<td>50</td>
					
					<td>50</td>
				 </tr>
				 <tr>
					<td><a href="{{ route('broadcast.broadcast-detail-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash1</a></td>
					<td>One-One</td>
					<td>80%</td>
					<td>14-Dec-2018 09:52 AM</td>
					<td>500</td>
					<td>1000</td>
					<td>400</td>
					<td>50</td>
					
					<td>50</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-detail-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash2</a></td>
					<td>Dynamic</td>
					<td>80%</td>
					<td>16-Dec-2018 09:53 AM</td>
					<td>500</td>
					<td>1000</td>
					<td>400</td>
					<td>50</td>
					
					<td>50</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-detail-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash3</a></td>
					<td>Dynamic</td>
					<td>80%</td>
					<td>23-Nov-2018 09:53 AM</td>
					<td>500</td>
					<td>1000</td>
					<td>400</td>
					<td>50</td>
					
					<td>50</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-detail-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash4</a></td>
					<td>Dynamic</td>
					<td>80%</td>
					<td>22-Nov-2018 09:53 AM</td>
					<td>500</td>
					<td>1000</td>
					<td>400</td>
					<td>50</td>
					
					<td>50</td>
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.broadcast-detail-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View Broadcast Details">rash5</a></td>
					<td>One-One</td>
					<td>80%</td>
					<td>14-Dec-2018 09:52 AM</td>
					<td>500</td>
					<td>1000</td>
					<td>50</td>
					<td>400</td>
					<td>50</td>
					<td>
						
					</td>
				</tr>
				</tbody></table>
			
			
			
			</div>
        </div>
		</div>
		
		<div class="back">
		<div class="col-xs-12">
				<div id="campaignslareport" style="max-width:100%; height: 500px; margin: 0 auto"></div>
			</div>
			
		</div>
		</div>
		</div>
		
        </section></div>
       
	
       
         
         
        </div>
	  
	  
	  </div><!-- end content div-->


@include('layouts.footer')
<!-- //Footer -->

