<!-- include header -->
<?php include('header.php');?>
<!-- include header -->

  <!-- Body -->
  <!-- sidebar include -->
  <?php include('sidebar_msg.php');?>
  <!-- end sidebar -->
  
    <!-- Right Content -->
    <div class="content">
       <div class="heading clearfix">
        <div class="pull-left mainico hide"><i class="fa fa-reply-all"></i></div>
		<h2 class="pull-left"><span>&nbsp;</span>Group Management<br>
		
		</h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('group.view-group') }}"><i class="fa fa-home"></i>&nbsp;Group Management</a></li>
        <li class="active">Copy Group</li>
      </ul>
      </div>
      <div class="row">
		<div class="col-lg-12 col-md-12">
		<section class="box ">
            <header class="panel_header marginBottom">
                <h2 class="title pull-left">Copy Group</h2>
                <div class="actions panel_actions pull-right">
                	<a href="{{ route('group.view-group') }}" class="btn btn-md btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;View Group</a>
                </div>
            </header>
		<div class="content-body">
					
			<div class="row">
        <div class="col-sm-12 ccol-lg-12">
			<form class="form-horizontal inlineform marginbottom10">
					
					<div class="text-center">
						
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Group Name :</label>
							<div class="col-md-8">
							<input type="text" id="groupname" value="TEstNew_copy"/>
							<a href="JavaScript:Void(0);" class="btn btn-primary-outline btn-xs">Check Availability </a>
							<br><span class="label label-success">Group name available</span>
							</div>
						</div>
						
						<div class="smsblock">
						<div class="form-group row rsms1">
							<label for="templatename" class="col-md-4">Recipient Type: </label>
							<div class="col-md-8">
								<label class="cradio">Domestic
								<input type="radio" checked="checked" name="rtype" value="domestic" >
								<span class="checkmark"></span>
								</label>
								<label class="cradio">International
								<input type="radio" value="int" name="rtype">
								<span class="checkmark"></span>
								</label>
								<label class="cradio">All
								<input type="radio" value="all" name="rtype">
								<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<div class="form-group row">
							<label for="templatename" class="col-md-4">Add Recipients:</label>
							<div class="col-md-8">
								<label class="cradio">Manual
								<input type="radio" checked="checked" name="gmethod" value="manual" >
								<span class="checkmark"></span>
								</label>
								<label class="cradio">File Upload
								<input type="radio" value="upload" name="gmethod">
								<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<div class="form-group row rsms">
							<label for="templatename" class="col-md-4">Recipient Number:</label>
							<div class="col-md-8">
								<textarea>
								09835292343,
								09666803876,
								09555803824
								</textarea><i class="domestic fa fa-question-circle info" data-toggle="tooltip" data-placement="top" title="Numbers may or may not have 91 prefix. 11 digit mobile numbers prefixed with with 0 are also allowed."></i>
								
								<i class="int displaynone fa fa-question-circle info" data-toggle="tooltip" data-placement="top" title="Numbers should have respective country code prefixed. Even domestic numbers should be prefixed with country code"></i>
								<br>
								<a href="javascript:void(0);" class="btn btn-xs btn-ctr btn-primary-outline" onclick="window.open('/country-codes', 'windowname1', 'width=400, height=360, top=150, left=300'); return false;">View All Country Codes</a><br>
								 <p>* Enter numbers either seprated by commas or 1 number per line. Maximum 1 Million allowed</p>
							<p>* All invalid and duplicate numbers will be automatically removed by system.</p>
							</div>
						</div>
						<div class="form-group row usms">
							<label for="templatename" class="col-md-4">Upload File:</label>
							<div class="col-md-8">
							<div class="fileupload">
								<input type="file" id="upload-file-pc" class="uploadfile">
                                               	<div class="dropin-btn-status uploadvisible"><h4><i class="fa fa-cloud-upload fa-2x"></i><br>Choose from Computer or drag a file here.</h4>
												csv, txt, xls, zip, xlsx file format allowed.<br>
												<p class="mrg-b15">File size of upto 10 MBs is supported.</p>
												<p class="mrg-b15">Maximum records 1Million.</p>
												</div>
							</div>	
							 <div id="filenameshow" class="uploadfilename">No file uploaded.</div> <div class="crossfile" id="removefile" ><i class="fa fa-times-circle fa-1x" data-toggle="tooltip" data-placement="right" data-original-title="Remove and upload other file."></i>&nbsp;</div><br>
							 	<a href="javascript:void(0);" class="btn btn-xs btn-ctr btn-primary-outline" onclick="window.open('/country-codes', 'windowname1', 'width=400, height=360, top=150, left=300'); return false;">View All Country Codes</a><br>
							<p>* Enter numbers either seprated by commas or 1 number per line. Maximum 1 Million allowed</p>
							<p>* All invalid and duplicate numbers will be automatically removed by system.</p>
							</div>
							
						</div>
						</div>
						
					</div>
			</form>
        </div>
    </div>
  </div>
  <footer>
					<div class=" row">
							<div class="col-md-4"></div>
							<div class="col-md-8">
								<a class="btn btn-primary" onclick="new PNotify({
                                  title: 'Group Created',
                                  text: 'Group created successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });"><i class="fa fa-floppy-o"></i>&nbsp;Submit</a>
								
								<a class="btn btn-cancel" href="#"><i class="fa fa-times-circle" ></i>&nbsp;Reset</a>
							</div>
					</div>
			</footer>
  </section>
  <!-- //Right Content -->
</div>


</div>
<!-- //Body -->
<!-- Footer -->



<?php include('footer.php'); ?>
<!-- //Footer -->

