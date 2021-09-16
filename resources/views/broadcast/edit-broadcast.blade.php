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
        <div class="pull-left mainico hide"><i class="glyphicon glyphicon-th"></i></div>
		<h2 class="pull-left"><span>&nbsp;</span>Broadcast Management<br>
				<small>Broadcast Management</small>
		</h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('broadcast.view-broadcast') }}"><i class="fa fa-home"></i>&nbsp;Broadcast Management</a></li>
        <li class="active">Edit Broadcast </li>
      </ul>
      </div>
      <div class="row">
		<div class="col-lg-12 col-md-12">
			<section class="box">
            <header class="panel_header marginBottom">
                <h2 class="title pull-left">Edit Broadcast</h2>
                <div class="actions panel_actions pull-right">
                	<a href="{{ route('broadcast.view-broadcast') }}" class="btn btn-md btn-primary"><i class="fa fa-eye"></i>&nbsp;View Broadcast</a>
                </div>
            </header>
            <div class="content-body"> 
							
				<div class="row">
				<div class="col-xs-12 ">
				<form class="form-horizontal inlineform marginbottom10">
					
					<div class="text-center" id="smsdivb">
					
					<div class="form-group row">
							<label for="broadcatname" class="col-md-4">Broadcast Name :</label>
							<div class="col-md-8">
							<input type="text" id="broadcatname" value="rash1" disabled />
							
							</div>
					</div>
					<div class="form-group restbox row">
						<label for="broadcastschd" class="col-md-4">Broadcast Schedule:</label>
						<div class="col-md-8">
						<input type="text" class="datetime1" id="fromdate" value="23/11/2018 10:41" />
							<label class="ccheck hide">Set Recurrence 
									  <input type="checkbox" id="setfreq" value="setre" name="havesubdiv" data-toggle="tooltip" data-placement="top" data-original-title="Define rules to repeat this campaign.">
									  <span class="ccheckmark"></span>
							</label>
					
						</div>
					</div>
					<div class="form-group reminderbox row">
						<label for="broadcastschd" class="col-md-4">Start Date:</label>
						<div class="col-md-8">
						<input type="text" class="datetime" id="startdate" value="23/11/2018 10:41" />
							
					
						</div>
					</div>
					
					<div class="form-group row">
							<label for="templatetext" class="col-md-4" >Broadcast Category :</label>
							<div class="col-md-8">
								<label class="cradio">Simple
								<input type="radio" checked="checked" name="broadcastcat" value="simple" disabled>
								<span class="checkmark"></span>
							</label>
							<label class="cradio">One-to-One
									  <input type="radio" value="oneone" name="broadcastcat" disabled>
									  <span class="checkmark"></span>
							</label>
							<label class="cradio">Dynamic
									  <input type="radio" value="dynamic" name="broadcastcat" disabled>
									  <span class="checkmark"></span>
							</label>
							<label class="cradio">Reminder
									  <input type="radio" value="reminder" name="broadcastcat" disabled>
									  <span class="checkmark"></span>
							</label>
					         </div>
			</div>
			
			<div class="form-group row">
							<label for="templatetext" class="col-md-4" >Message Category :</label>
							<div class="col-md-8">
								<label class="cradio">Alert
								<input type="radio" checked="checked" name="mgcat" value="alert" >
								<span class="checkmark"></span>
							</label>
							<label class="cradio">Promotional
									  <input type="radio" value="promo" name="mgcat">
									  <span class="checkmark"></span>
							</label>
							</div>
						</div>
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Sender Name:</label>
							<div class="col-md-8">
								<select id="sendern">
									<option checked>HDFC</option>
									<option>HDFC-BK</option>
									<option>HDFC-CC</option>
								</select>
							</div>
						</div>							
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Broadcast Termination :</label>
							<div class="col-md-8">
								
							<label class="cradio">National
								<input type="radio" checked="checked" name="btermination" value="national" disabled >
								<span class="checkmark"></span>
							</label>
							<label class="cradio">International
									  <input type="radio" value="international" name="btermination" disabled>
									  <span class="checkmark"></span>
							</label>
							<label class="cradio">All
									  <input type="radio" value="ctall" onclick="new PNotify({
                                  title: 'Country code is required',
                                  text: 'See the all country list in bottom of the page',
                                  type: 'info',
                                  styling: 'bootstrap3'
                              });"  name="btermination" disabled>
									  <span class="checkmark"></span>
							</label>
							
						</div>
						</div>
					<div class="row">
		                    <div class="col-md-12">
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs hide" role="tablist">
                                        <li  class="active" ><a href="{{ route('broadcast.create-broadcast') }}" >Simple</a></li>
                                        <li><a href="personalized.php" aria-controls="one-one" >One-One Campaign</a></li>
                                        <li><a href="advance-broadcast.php" >Dynamic Campaign</a></li>
                                        <li><a href="reminder-service.php">Reminder Service</a></li>
                                    </ul>

                                    <!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="simple">
			<p class="tabbline hide">Send a static message to all recipients quickly.</p>
			<fieldset>
				<legend>Message Details</legend>
			
				<div class="form-group row">
				<label for="templatename" class="col-md-4">Message Type :</label>
				<div class="col-md-8">
							<label class="ccheck">Flash Message
									  <input type="checkbox" value="flash" name="msgtype">
									  <span class="ccheckmark"></span>
							</label>
					
				</div>
			</div>
			
			<div class="simplebox"><!-- simple broadcast category start -->
				<div class="form-group row">
				<label for="templatename" class="col-md-4">Message Content :</label>
				<div class="col-md-8">
						<label class="cradio">Manual
								<input type="radio" checked="checked" name="msgcontent" value="mannual" >
								<span class="checkmark"></span>
							</label>
							<label class="cradio">Template
									  <input type="radio" value="template" name="msgcontent">
									  <span class="checkmark"></span>
							</label>
					
				</div>
				</div>
				
				<div class="form-group ctemplate row">
				<label for="templatename" class="col-md-4">Select Template :</label>
				<div class="col-md-8">
						<select>
							<option>Select template</option>
							<option>Test</option>
							<option>temp</option>
							<option>Hdfc promotion</option>
						</select> <span><a href="{{ route('template.create-template') }}" class="btn btn-sm btn-clone"><i class="fa fa-plus-circle "></i> Add New</a></span>
					
				</div>
				</div>
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Message :</label>
				<div class="col-md-8">
						<textarea>Dear customer Big billion day is back, Please click below link to expore and make your wishlist. http://acl.cc/bigbillion </textarea>
						<i data-toggle="tooltip" data-placement="top" data-original-title="Upto 160 ASCII text characters are supported in a single SMS but in a long message the length supported is ASCII message limit specified in the generic section> characters. These special characters |, ^, {, }, €, [, ~, ] and \ will be treated as two characters. 
						Please select the Unicode option if any Unicode characters are present in the file. If not selected Unicode characters in the file will be 
						rendered as ?." class="fa fa-question-circle"></i>
						<p>0/612</p>
					
				</div>
			</div>
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Unicode Message(Optional):</label>
				<div class="col-md-8">
						<label class="ccheck">Allow Unicode
								<input type="checkbox" id="allowuni" value="Allow Unicode" name="allowuni" data-toggle="tooltip" data-placement="top" data-original-title="Check to allow vernacular messaging. You can copy and paste the vernacular text in the message box.">
								<span class="ccheckmark"></span>
							</label>
					
				</div>
			</div>
			</div><!-- end simple broadcast div -->
			
			<div class="oneonebox"><!-- start oneonebroadcast div -->
			
				<div class="rupload1">
					<div class="form-group row">
							<label for="templatename" class="col-md-4">Upload File :</label>
							<div class="col-md-8">
							<div class="fileupload">
								<input type="file" id="upload-file-pc" class="uploadfile">
                                               	<div class="dropin-btn-status uploadvisible"><h4><i class="fa fa-cloud-upload fa-2x"></i><br>Choose from Computer or drag a file here.</h4>
												csv, txt, xls, zip, xlsx file format allowed.<br>
												<p class="mrg-b15">File size of upto 50MBs is supported.</p>
												</div>
							</div>	
							
							 <div id="filenameshow" class="uploadfilename">No file uploaded.</div> <div class="crossfile" id="removefile" ><i class="fa fa-times-circle fa-1x" data-toggle="tooltip" data-placement="right" data-original-title="Remove and upload other file."></i>&nbsp;</div>
							 <p class="marginTop5 hide">Note: Mobile Number only in first column of a single column file.</p>
							</div>
					</div>
					<div class="form-group row">
				<label for="templatename" class="col-md-4">Select Delimeter :</label>
				<div class="col-md-8"><select class="minhght" name="DELIMETED">
                                     <option selected="selected" value="">--Select Delimeter--</option>
                                      <option value="1">Tilde ~</option>
                                      <option value="2">Tab </option>
                                      <option value="3">Pipe |</option>
                                      <option value="4">Comma ,</option>
                                      <option value="4">Xls/Xlsx</option>
                                     </select>
				</div>
				</div>
					<div class="row">
					<label for="templatename" class="col-md-4"></label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="" > Scrub Blacklist Numbers
							<input type="checkbox" id="blacklistnumber" value="blacklistnumber" name="blacklistnumber" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
					</div>		
						<div class="form-group row">
					<label for="templatename" class="col-md-4">Total Count Records :</label>
					<div class="col-md-8">
						<span class="lineheight24"><strong>213234</strong></span>
						
						<i data-toggle="tooltip" data-placement="top" data-original-title="Final campaign count can be less having only valid and unique requests." class="fa fa-question-circle"></i>
						</br>
						<label class="ccheck"> My file contains header
							<input type="checkbox" id="cheaders" value="cheaders" name="cheaders" >
								<span class="ccheckmark"></span>
						</label>
					</div>
				</div>	
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Duplicate Checks (optional) :</label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="Rejects duplicate numbers to prevent duplicate messaging. Duplicate numbers should be exact match. Number with country code is different from number without country code. Requires additional processing time while the campaign is in Processing status." >Reject duplicate numbers.
							<input type="checkbox" id="duplicate" value="duplicate" name="duplicate" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
				</div>	
				
				</div>
			
			</div><!-- end oneone broadcast div -->
			<div class="dynamicbox"><!-- Dynamic broadcast category start -->
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Select Template :</label>
				<div class="col-md-8">
						<select>
							<option>Select template</option>
							<option>Test</option>
							<option>temp</option>
							<option>Hdfc promotion</option>
						</select> <span><a href="{{ route('template.create-template') }}" class="btn btn-sm btn-clone"><i class="fa fa-plus-circle "></i> Add New</a></span>
					
				</div>
				</div>
				<div class="form-group row">
				<label for="templatename" class="col-md-4">Message :</label>
				<div class="col-md-8">
						<textarea>Dear #customer Stmt for HDFCBANK Creditcard ending #CCNO dispatched. Min due Rs #MINDUE. Total Due #TDUE. Pymt due on #DATE.</textarea>
						<i data-toggle="tooltip" data-placement="top" data-original-title="Upto 160 ASCII text characters are supported in a single SMS but in a long message the length supported is ASCII message limit specified in the generic section> characters. These special characters |, ^, {, }, €, [, ~, ] and \ will be treated as two characters. 
						Please select the Unicode option if any Unicode characters are present in the file. If not selected Unicode characters in the file will be 
						rendered as ?." class="fa fa-question-circle"></i>
						<p>0/612</p>
					
				</div>
			</div>
				
					<div class="form-group row">
							<label for="templatename" class="col-md-4">Upload File :</label>
							<div class="col-md-8">
							<div class="fileupload">
								<input type="file" id="upload-file-pc" class="uploadfile">
                                   	<div class="dropin-btn-status uploadvisible"><h4><i class="fa fa-cloud-upload fa-2x"></i><br>Choose from Computer or drag a file here.</h4>
												csv, txt, xls, zip, xlsx file format allowed.<br>
									<p class="mrg-b15">File size of upto 50MBs is supported.</p>
									</div>
							</div>	
							
							 <div id="filenameshow" class="uploadfilename">No file uploaded.</div> <div class="crossfile" id="removefile" ><i class="fa fa-times-circle fa-1x" data-toggle="tooltip" data-placement="right" data-original-title="Remove and upload other file."></i>&nbsp;</div>
							 <p class="marginTop5 hide">Note: Mobile Number only in first column of a single column file.</p>
							</div>
					</div>
					<div class="form-group row">
				<label for="templatename" class="col-md-4">Select Delimeter :</label>
				<div class="col-md-8"><select class="minhght" name="DELIMETED">
                                     <option selected="selected" value="">--Select Delimeter--</option>
                                      <option value="1">Tilde ~</option>
                                      <option value="2">Tab </option>
                                      <option value="3">Pipe |</option>
                                      <option value="4">Comma ,</option>
                                      <option value="4">Xls/Xlsx</option>
                                     </select>
				</div>
				</div>
				<div class="row">
					<label for="templatename" class="col-md-4"></label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="" > Scrub Blacklist Numbers
							<input type="checkbox" id="blacklistnumber" value="blacklistnumber" name="blacklistnumber" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
					</div>	
					<div class="form-group row">
						<label for="templatename" class="col-md-4">Total Count Records :</label>
					 <div class="col-md-8">
						<span class="lineheight24"><strong>213234</strong></span>
						
						<i data-toggle="tooltip" data-placement="top" data-original-title="Final campaign count can be less having only valid and unique requests." class="fa fa-question-circle"></i>
					 </div>
					</div>	
					<div class="form-group row">
					<label for="templatename" class="col-md-4">Duplicate Checks (optional) :</label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="Rejects duplicate numbers to prevent duplicate messaging. Duplicate numbers should be exact match. Number with country code is different from number without country code. Requires additional processing time while the campaign is in Processing status." >Reject duplicate numbers.
							<input type="checkbox" id="duplicate" value="duplicate" name="duplicate" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
				</div>
				
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Map Variables:</label>
					<div class="col-md-8">
					<div class="variables">
						<p class="label2">Mobile Number</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Customer</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Account</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Date</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Month</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				</div>
				
			</div><!-- end dynamic broadcast list -->
			
			<div class="reminderbox"><!-- Reminder broadcast category start -->
			<div class="form-group row">
				<label for="templatename" class="col-md-4">Select Template :</label>
				<div class="col-md-8">
						<select>
							<option>Select template</option>
							<option>Test</option>
							<option>temp</option>
							<option>Hdfc promotion</option>
						</select> <span><a href="{{ route('template.create-template') }}" class="btn btn-sm btn-clone"><i class="fa fa-plus-circle "></i> Add New</a></span>
					
				</div>
				</div>
				<div class="form-group row">
				<label for="templatename" class="col-md-4">Message :</label>
				<div class="col-md-8">
						<textarea>Dear #customer Stmt for HDFCBANK Creditcard ending #CCNO dispatched. Min due Rs #MINDUE. Total Due #TDUE. Pymt due on #DATE.</textarea>
						<i data-toggle="tooltip" data-placement="top" data-original-title="Upto 160 ASCII text characters are supported in a single SMS but in a long message the length supported is ASCII message limit specified in the generic section> characters. These special characters |, ^, {, }, €, [, ~, ] and \ will be treated as two characters. 
						Please select the Unicode option if any Unicode characters are present in the file. If not selected Unicode characters in the file will be 
						rendered as ?." class="fa fa-question-circle"></i>
						<p>0/612</p>
					
				</div>
			</div>
			
				<div class="form-group row">
			
							<label for="templatename" class="col-md-4">Upload File :</label>
							<div class="col-md-8">
							<div class="fileupload">
								<input type="file" id="upload-file-pc" class="uploadfile">
                                   	<div class="dropin-btn-status uploadvisible"><h4><i class="fa fa-cloud-upload fa-2x"></i><br>Choose from Computer or drag a file here.</h4>
												csv, txt, xls, zip, xlsx file format allowed.<br>
									<p class="mrg-b15">File size of upto 50MBs is supported.</p>
									</div>
							</div>	
							
							 <div id="filenameshow" class="uploadfilename">No file uploaded.</div> <div class="crossfile" id="removefile" ><i class="fa fa-times-circle fa-1x" data-toggle="tooltip" data-placement="right" data-original-title="Remove and upload other file."></i>&nbsp;</div>
							 <p class="marginTop5 hide">Note: Mobile Number only in first column of a single column file.</p>
							</div>
					</div>
					<div class="form-group row">
				<label for="templatename" class="col-md-4">Select Delimeter :</label>
				<div class="col-md-8"><select class="minhght" name="DELIMETED">
                                     <option selected="selected" value="">--Select Delimeter--</option>
                                      <option value="1">Tilde ~</option>
                                      <option value="2">Tab </option>
                                      <option value="3">Pipe |</option>
                                      <option value="4">Comma ,</option>
                                      <option value="4">Xls/Xlsx</option>
                                     </select>
				</div>
				</div>
				<div class="row">
					<label for="templatename" class="col-md-4"></label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="" > Scrub Blacklist Numbers
							<input type="checkbox" id="blacklistnumber" value="blacklistnumber" name="blacklistnumber" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
					</div>	
					<div class="form-group row">
						<label for="templatename" class="col-md-4">Total Count Records :</label>
					 <div class="col-md-8">
						<span class="lineheight24"><strong>213234</strong></span>
						
						<i data-toggle="tooltip" data-placement="top" data-original-title="Final campaign count can be less having only valid and unique requests." class="fa fa-question-circle"></i>
					 </div>
					</div>	
					<div class="form-group row">
					<label for="templatename" class="col-md-4">Duplicate Checks (optional) :</label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="Rejects duplicate numbers to prevent duplicate messaging. Duplicate numbers should be exact match. Number with country code is different from number without country code. Requires additional processing time while the campaign is in Processing status." >Reject duplicate numbers.
							<input type="checkbox" id="duplicate" value="duplicate" name="duplicate" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
				</div>
				
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Map Variables:</label>
					<div class="col-md-8">
					<div class="variables">
						<p class="label2">Mobile Number</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Customer</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Account</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Date</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
					<div class="variables">
						<p class="label2">Month</p>
						<select class="input-sm">
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
							<option>Column5</option>
						</select>
					</div>
				</div>
				</div>
				
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Reminder Apply On :</label>
					<div class="col-md-8">
						<select>
							<option>Column1</option>
							<option>Column2</option>
							<option>Column3</option>
							<option>Column4</option>
						</select>
						
					</div>
				</div>
				
				<div class="form-group row">
					<label for="templatename" class="col-md-4">End Date:</label>
					<div class="col-md-8">
						<input type="text" class="datetime" id="date"/>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Send On :</label>
					<div class="col-md-8">
						<select class="sendon">
							<option value="1">Onday</option>
							<option value="2">Before</option>
							<option value="3">After</option>
							<option value="4">Start of month</option>
						</select>
						<span class="sendonselect">
						<select class="input-sm ">
							<option value="0" selected="selected">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">Last Day</option>
						</select> Days</span>
					</div>
				</div>
				
			</div><!-- end Reminder broadcast list -->
			
			</fieldset>
			
			
			
			<fieldset class="simplebox">
			<legend>Add Recipients <i data-toggle="tooltip" data-placement="top" data-original-title="add recipients through any of the following modes available below" class="fa fa-question-circle"></i></legend>
			
			<div class="form-group row">
							<label for="templatetext" class="col-md-4" >Select Recipient Mode :</label>
							<div class="col-md-8">
								<label class="cradio">Manual
								<input type="radio" checked name="reciept" value="rmanual" >
								<span class="checkmark"></span>
							</label>
							<label class="cradio">File Upload
									  <input type="radio" value="rupload" name="reciept">
									  <span class="checkmark"></span>
							</label>
							<label class="cradio">Group Selection
									  <input type="radio" value="rselection" name="reciept">
									  <span class="checkmark"></span>
							</label>
							</div>
				</div>
				<div class="form-group row">
							<label for="templatename" class="col-md-4">Update Type:</label>
							<div class="col-md-8">
								<label class="cradio">Append
								<input type="radio" checked="checked" name="updatetype" value="append">
								<span class="checkmark"></span>
								</label>
								<label class="cradio">Remove
								<input type="radio" value="Remove" name="updatetype">
								<span class="checkmark"></span>
								</label>
							</div>
						</div>
				<div class="rmanual">
					<div class="form-group row">
					<label for="templatename" class="col-md-4">Enter Recipient Number :</label>
					<div class="col-md-8">
						<textarea></textarea>
						<i data-toggle="tooltip" data-placement="top" data-original-title="Enter recipient numbers separated by comma or one number per line. Max 1 Million numbers are allowed." class="fa fa-question-circle"></i>
						
						
					</div>
					</div>
					<div class="row">
					<label for="templatename" class="col-md-4"></label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="" > Scrub Blacklist Numbers
							<input type="checkbox" id="blacklistnumber" value="blacklistnumber" name="blacklistnumber" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
					</div>					
					<div class="form-group row">
					<label for="templatename" class="col-md-4">Total Count Records :</label>
					<div class="col-md-8">
						<span class="lineheight24"><strong>213234</strong></span>
						
						<i data-toggle="tooltip" data-placement="top" data-original-title="Final campaign count can be less having only valid and unique requests." class="fa fa-question-circle"></i>
					</div>
					</div>
					<div class="form-group row">
					<label for="templatename" class="col-md-4">Duplicate Checks (optional) :</label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="Rejects duplicate numbers to prevent duplicate messaging. Duplicate numbers should be exact match. Number with country code is different from number without country code. Requires additional processing time while the campaign is in Processing status." >Reject duplicate numbers.
							<input type="checkbox" id="duplicate" value="duplicate" name="duplicate" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
				</div>					
				</div><!-- end manual section div -->
			
				<div class="rupload">
					<div class="form-group row">
							<label for="templatename" class="col-md-4">Upload File :</label>
							<div class="col-md-8">
							<div class="fileupload">
								<input type="file" id="upload-file-pc" class="uploadfile">
                                               	<div class="dropin-btn-status uploadvisible"><h4><i class="fa fa-cloud-upload fa-2x"></i><br>Choose from Computer or drag a file here.</h4>
												csv, txt, xls, zip, xlsx file format allowed.<br>
												<p class="mrg-b15">File size of upto 50MBs is supported.</p>
												</div>
							</div>	
							
							 <div id="filenameshow" class="uploadfilename">No file uploaded.</div> <div class="crossfile" id="removefile" ><i class="fa fa-times-circle fa-1x" data-toggle="tooltip" data-placement="right" data-original-title="Remove and upload other file."></i>&nbsp;</div>
							 <p class="marginTop5">Note: Mobile Number only in first column of a single column file.</p>
							</div>
					</div>
				<div class="row">
					<label for="templatename" class="col-md-4"></label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="" > Scrub Blacklist Numbers
							<input type="checkbox" id="blacklistnumber" value="blacklistnumber" name="blacklistnumber" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
					</div>			
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Total Count Records :</label>
					<div class="col-md-8">
						<span class="lineheight24"><strong>213234</strong></span>
						
						<i data-toggle="tooltip" data-placement="top" data-original-title="Final campaign count can be less having only valid and unique requests." class="fa fa-question-circle"></i>
						</br>
						<label class="ccheck"> My file contains header
							<input type="checkbox" id="cheaders" value="cheaders" name="cheaders" >
								<span class="ccheckmark"></span>
						</label>
					</div>
				</div>	
				<div class="form-group row">
					<label for="templatename" class="col-md-4">Duplicate Checks (optional) :</label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="Rejects duplicate numbers to prevent duplicate messaging. Duplicate numbers should be exact match. Number with country code is different from number without country code. Requires additional processing time while the campaign is in Processing status." >Reject duplicate numbers.
							<input type="checkbox" id="duplicate" value="duplicate" name="duplicate" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
				</div>	
				
				</div><!-- end file upload section div -->
				<div class="rselection">
					<div class="form-group row">
						<label for="templatename" class="col-md-4">Select Group :</label>
					 <div class="col-md-8">
						<select class="groupselect" multiple="multiple">
							<option>Cedit card</option>
							<option>Debit card</option>
							<option>Net Banking</option>
						</select>
					 </div>
					</div>	
					<div class="row">
					<label for="templatename" class="col-md-4"></label>
					<div class="col-md-8">
						<label class="ccheck" data-toggle="tooltip" data-placement="top" data-original-title="" > Scrub Blacklist Numbers
							<input type="checkbox" id="blacklistnumber" value="blacklistnumber" name="blacklistnumber" >
								<span class="ccheckmark"></span>
						</label>
						
					</div>
					</div>	
					<div class="form-group row">
						<label for="templatename" class="col-md-4">Total Count Records :</label>
					 <div class="col-md-8">
						<span class="lineheight24"><strong>213234</strong></span>
						
						<i data-toggle="tooltip" data-placement="top" data-original-title="Final campaign count can be less having only valid and unique requests." class="fa fa-question-circle"></i>
					 </div>
					</div>	
					
				
				</div><!-- end file group section div -->
			
			</fieldset>
			
		</div>
      </div>
	</div>
   </div>
</div>
</div>
						
				<div class="form-group">
				* Mobile number should be prefixed with their respective country code. <a href="javascript:void(0);" class="btn btn-xs btn-ctr btn-primary-outline" onclick="window.open('/country-codes', 'windowname1', 'width=400, height=360, top=150, left=300'); return false;">View All Country Codes</a><br>

				* Please note that duplicate and invalid numbers will removed automatically by system.
				</div>
					
					</div>
							
				</div>
				</div>
			
			<footer>
				<div class="form-group row text-center">
							
							<div class="col-md-12">
							<a class="btn btn-primary" href="{{ route('broadcast.broadcast-preview') }}"><i class="fa fa-file"></i>&nbsp;Preview</a>
								<a class="btn btn-primary" onclick="new PNotify({
                                  title: 'Campaign created',
                                  text: 'Campaign created successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });"><i class="fa fa-floppy-o"></i>&nbsp;Create</a>
								
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
  <!-- //Right Content -->
@include('layouts.footer')
<!-- //Footer -->

