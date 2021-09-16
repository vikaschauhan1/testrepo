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
		<small>Broadcast Detailed Report</small></h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        <li><a href="{{ route('broadcast.view-broadcast') }}"><i class="fa fa-home"></i>&nbsp;Broadcast Management</a></li>
        <li class="active">Broadcast Detailed Report</li>
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
											<input type="text" placeholder="search MSISDN.."/>
										</li>
										
										<li>
											<select>
												<option>Status</option>
												<option>Delivered</option>
												<option>DLR Not Recieved</option>
												<option>Failed</option>
												
											</select>
								
                                        </li>
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
                <h2 class="title pull-left">Detailed Broadcast Report - (rash1)</h2>
                <div class="actions panel_actions pull-right">
						<button type="button"  class="btn btn-toggle flipbtn" data-toggle="button" aria-pressed="false" >
						<div class="handle"></div>
					  </button>
						<a href="{{ route('broadcast.broadcast-summary') }}" class="btn btn-md btn-primary"><i class="fa fa-angle-double-left"></i>&nbsp;Back to Broadcast Summary</a>
						
                </div>
            </header>
            <div class="content-body">    
			<div class="row">
			<form class="form-horizontal inlineform">
				<div class="text-center">
				<div class="row">
		          <div class="col-md-12">
                       <div class="tab-content">
					<div role="tabpanel" class="tab-pane active ">
						<div class="card">
						<div class="front">
						<div class="col-md-12">
							
				<table id="example1" class="table table-striped display dt-responsive table-bordered dataTable" width="100%">
               <thead>
				   <tr>
					   <th>MSISDN</th>
					    <th>Message</th>
					   <th>Message Count</th>
					   <th>Date/Time</th>
					   <th>Template Id</th>
					   <th>Status</th>
					   <th>Status Decription</th>
					   <th>Last Status Updated </th>
					  
					   
				   </tr>
			   </thead>
			   <tbody>
				   <tr>
					   <td>9555803824
					   </td>
					    <td>Dear Ajit Stmt for HDFCBANK Creditcard ending XXX6564 dispatched. Min due Rs 10,000. Total Due 24000. Pymt due on 15-Nov-18.</td>
					   <td>2</td>
					   <td>06-Nov-2018 10:38 AM</td>
					   <td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				 <tr>
					<td>9931886030 </td>
					     <td>Dear Anoop Stmt for HDFCBANK Creditcard ending XXX4532 dispatched. Min due Rs 12,000. Total Due 29000. Pymt due on 15-Nov-18.</td>
					   <td>2</td>
					   <td>06-Nov-2018 10:38 AM</td>
					   <td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				 <tr>
					<td>9831886022 </td>
					<td>Dear Sandeep Stmt for HDFCBANK Creditcard ending XXX0987 dispatched. Min due Rs 12,000. Total Due 29000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				<tr>
					<td>9731886032 </td>
					<td>Dear Ishu Stmt for HDFCBANK Creditcard ending XXX6543 dispatched. Min due Rs 13,000. Total Due 30000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				<tr>
					<td>9873886098 </td>
					<td>Dear Suresh Stmt for HDFCBANK Creditcard ending XXX6432 dispatched. Min due Rs 14,000. Total Due 32000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-danger">Failed</span></td>
					<td>Failed due to inbox full</td>
					<td>06-Nov-2018 10:42 AM</td>
				 </tr>
				<tr>
					<td>9987641456 </td>
					<td>Dear Rajesh Stmt for HDFCBANK Creditcard ending XXX2476 dispatched. Min due Rs 14,000. Total Due 32000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-danger">Failed</span></td>
					<td>Failed due to Out of Network </td>
					<td>06-Nov-2018 10:43 AM</td>
				 </tr>
				  <tr>
					   <td>9555803824
					   </td>
					    <td>Dear Ajit Stmt for HDFCBANK Creditcard ending XXX6564 dispatched. Min due Rs 10,000. Total Due 24000. Pymt due on 15-Nov-18.</td>
					   <td>2</td>
					   <td>06-Nov-2018 10:38 AM</td>
					   <td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				 <tr>
					<td>9931886030 </td>
					     <td>Dear Anoop Stmt for HDFCBANK Creditcard ending XXX4532 dispatched. Min due Rs 12,000. Total Due 29000. Pymt due on 15-Nov-18.</td>
					   <td>2</td>
					   <td>06-Nov-2018 10:38 AM</td>
					   <td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				 <tr>
					<td>9831886022 </td>
					<td>Dear Sandeep Stmt for HDFCBANK Creditcard ending XXX0987 dispatched. Min due Rs 12,000. Total Due 29000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				<tr>
					<td>9731886032 </td>
					<td>Dear Ishu Stmt for HDFCBANK Creditcard ending XXX6543 dispatched. Min due Rs 13,000. Total Due 30000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-success">Delivered</span></td>
					<td>Delivered</td>
					<td>06-Nov-2018 10:40 AM</td>
				 </tr>
				 <tr>
					<td>9873886098 </td>
					<td>Dear Rahul Stmt for HDFCBANK Creditcard ending XXX6432 dispatched. Min due Rs 14,000. Total Due 32000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-danger">Failed</span></td>
					<td>Failed due to inbox full</td>
					<td>06-Nov-2018 10:42 AM</td>
				 </tr>
				<tr>
					<td>9987641456 </td>
					<td>Dear Arjun Stmt for HDFCBANK Creditcard ending XXX2476 dispatched. Min due Rs 14,000. Total Due 32000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-danger">Failed</span></td>
					<td>Failed due to Out of Network </td>
					<td>06-Nov-2018 10:43 AM</td>
				 </tr>
				 <tr>
					<td>9098886098 </td>
					<td>Dear Sunil Stmt for HDFCBANK Creditcard ending XXX6432 dispatched. Min due Rs 14,000. Total Due 32000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-warning">DLR not Recieved</span></td>
					<td>waiting for DLR</td>
					<td>06-Nov-2018 10:42 AM</td>
				 </tr>
				<tr>
					<td>9956441456 </td>
					<td>Dear Chandan Stmt for HDFCBANK Creditcard ending XXX2476 dispatched. Min due Rs 14,000. Total Due 32000. Pymt due on 15-Nov-18.</td>
					<td>2</td>
					<td>06-Nov-2018 10:38 AM</td>
					<td>22</td>
					<td><span class="tag label label-warning">DLR not Recieved</span></td>
					<td>waiting for DLR</td>
					<td>06-Nov-2018 10:43 AM</td>
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
        text: 'Rash1 Broadcast Chart'
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
            color:'#333333'
        }, {
            name: 'Total Failed',
            y: 10,
            color:'#f76e5c'
        }]
    }]
});
</script>

@include('layouts.footer')
<!-- //Footer -->

