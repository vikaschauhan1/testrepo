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
		<small>User Broadcast Detail</small></h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        <li><a href="{{ route('broadcast.view-broadcast') }}"><i class="fa fa-home"></i>&nbsp;Broadcast Management</a></li>
        <li class="active">User Broadcast Detail</li>
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
											<input type="text" placeholder="search user.."/>
										</li>
										<li>
                                         <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle dateDropDown">Select Date <span class="caret"></span></button>
                                        <ul class="dropdown-menu dateDropDown-List">
                                            <li><a href="#">Today</a></li>
                                            <li><a href="#">Yesterday</a></li>
                                            <li><a href="#">Current week</a></li>
                                            <li><a href="#">Current month</a></li>
                                            <li><a href="#">Current Quarter</a></li>
                                            <li><a href="#">Current year</a></li>
                                            <li><a href="#">Last year</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" class="customDate">Custom</a></li>
                                        </ul>
                                    </div>
                                 </li>
                                    
                                       <li class="customDateRange"> <input name="textfield2" id="fromdate" type="text" class="lowwid" placeholder="From Date"></li>                
                                        <li class="customDateRange"> <input name="textfield2" id="todate" type="text" class="lowwid" placeholder="To Date"></li> 
                                        
                                    </ul>


                                </div>
								<footer class="panel-footer">Broadcast are showing data for <span class="rdate">10-08-2018</span> to <span class="rdate">11-09-2018</span>
								<span class="dropdown pull-right">
				<a href="#" class="pull-left  btn-download1 dropdown-toggle btn"  data-toggle="dropdown"><i class="fa fa-cloud-download" ></i> Download <span class="caret"></span></a>
				
				  <ul class="dropdown-menu">
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
                <h2 class="title pull-left">User Broadcast Detail</h2>
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
					   <th rowspan="2">UserName</th>
					    <th rowspan="2">Total Broadcast</th>
					   <th colspan="4">Broadcast Type</th>
					   
					   
					  
					   
				   </tr>
				   <tr>
						<th>Simple</th>
						<th>One to One</th>
						<th>Dynamic</th>
						<th>Reminder</th>
						
				   </tr>
			   </thead>
			   <tbody>
				   <tr>
					   <td><a href="{{ route('broadcast.user-broadcast-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View User broadcast details">ajitk</a></td>
					    <td>500</td>
					    <td>200</td>
					  
					   <td>100</td>
					   <td>100</td>
					<td>100</td>
				
				
				 </tr>
				 <tr>
					<td><a href="{{ route('broadcast.user-broadcast-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View User broadcast details">anoop</a></td>
					  <td>400</td>
					    <td>100</td>
					  
					   <td>100</td>
					   <td>100</td>
					<td>100</td>
					
				
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.user-broadcast-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View User broadcast details">sandeep</a></td>
					 <td>300</td>
					    <td>100</td>
					  
					   <td>100</td>
					   <td>50</td>
					<td>50</td>
					
				
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.user-broadcast-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View User broadcast details">rahul</a></td>
					 <td>500</td>
					    <td>200</td>
					  
					   <td>100</td>
					   <td>100</td>
					<td>100</td>
					
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.user-broadcast-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View User broadcast details">isshu</a></td>
					 <td>500</td>
					    <td>200</td>
					  
					   <td>100</td>
					   <td>100</td>
					<td>100</td>
					
				</tr>
				<tr>
					<td><a href="{{ route('broadcast.user-broadcast-report') }}" class="viewlink" data-toggle="tooltip" data-placement="top" data-original-title="Click to View User broadcast details">arjun</a></td>
					 <td>500</td>
					    <td>200</td>
					  
					   <td>100</td>
					   <td>100</td>
					<td>100</td>
					
				</tr>
				</tbody></table>
			
			
			
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
      

<script>

// Build the chart
Highcharts.chart('campaignslareport', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'User Campaign Detail'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Total Delivered',
            y: 80,
            sliced: true,
            selected: true,
            color: '#90ed7d'
        }, {
            name: 'DLR Not Recieved',
            y: 10,
            color:'#434348'
        }, {
            name: 'Total Failed',
            y: 10,
            color:'#f15c80'
        }]
    }]
});
</script>
@include('layouts.footer')
<!-- //Footer -->

