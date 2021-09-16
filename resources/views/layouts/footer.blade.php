<div class="footer">
<ul class="foot_links">
    <li>&copy; 2018 ACL Mobile Ltd.</li>
    <li><a href="javascript:void(0);">Contact Us</a>|</li>
    <li><a href="javascript:void(0);">Help</a>|</li>
  </ul>
</div>
</div>

<script type="text/javascript">
    $(window).load(function() { 
        $(".loader").fadeOut("slow"); 
    });
</script>

<script src="{{ asset('js/formAjaxUtils.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.datetimepicker.js') }}"></script>

<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.dropbox.com/static/api/1/dropins.js" id="dropboxjs" data-app-key="u1x9nntu65ndxn6"></script>-->
<script type="text/javascript" src="{{ asset('vendors/multiSelect/jquery.sumoselect.min.js') }}"></script>

<!-- used for notifiction -->
	
	<script src="{{ asset('vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ asset('vendors/pnotify/dist/pnotify.buttons.js') }}"></script>

	<!-- used for sweet alerts -->
    <script src="{{ asset('vendors/sweetalert/lib/sweet-alert.min.js') }}"></script>
	
	<!-- end notification -->
	
	<script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/datatable.bootstrap.js') }}"></script>
	
	<!--used for highcharts 
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script> -->
	<!-- end highchart js call -->
	
	<script type="text/javascript" src="{{ asset('js/tourjs.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script>
$(document).ready(function() {
    $('input:radio[name=a_SignatureOption]').click(function() {
        var checkval = $(this).val();
        $('#commandButton_1_0').prop('disabled', !(checkval == '1' || checkval == '2'));
    });
});



//$(document).ready(function(){
//	$("#sname").attr("disabled", true);
//   	$("#mcat").click(function(){
//	if ($("#mcat").is(":checked"))
//	{$("#sname").attr("disabled", false); 
//	}
//	else {
//		$("#sname").attr("disabled", true);
//	}
//  });
// });
</script>
<script type="text/javascript">
$(document).ready(function() {
	// Tooltip only Text
	$('.help').hover(function(){
			// Hover over code
			var title = $(this).attr('title');
			$(this).data('tipText', title).removeAttr('title');
			$('<p class="tooltip"></p>')
			.text(title)
			.appendTo('body')
			.fadeIn('slow');
	}, function() {
			// Hover out code
			$(this).attr('title', $(this).data('tipText'));
			$('.tooltip').remove();
	}).mousemove(function(e) {
			var mousex = e.pageX + 20; //Get X coordinates
			var mousey = e.pageY + 10; //Get Y coordinates
			$('.tooltip')
			.css({ top: mousey, left: mousex })
	});

	$("#manual, #fileupload, #groupselect").hide(); 
	
	$("input[name$='filetype2']").click(function(){
	var radio_value2 = $(this).val(); 
	  if(radio_value2=='manual2') {
		$("#manual2").show("");
		$("#fileupload2,#delimeted, #groupselect2").hide("");
	  }
	  else if(radio_value2=='fileupload2') {
		$("#fileupload2,#delimeted").show("");
		$("#manual2, #groupselect2").hide("");
	   }
	  else if(radio_value2=='groupselect2') {
		$("#groupselect2").show("");
		$("#manual2,#delimeted, #fileupload2").hide("");
	   }
	}); 	

});
</script>

<!--   Remove class auto for error message  -->
<script type="text/javascript">
$(function(){
	//$('.user_form dd.auto:lt(3)').removeClass('auto');	
});
</script>
<script type="text/javascript">
function showMe(){
var ids=['didfv1','div2'];
var inp=document.getElementById('myform').getElementsByTagName('input'), el, i=0, k=0;
while(el=inp[i++]){
	if(el.name=='mype'||el.name=='modtype'){
	document.getElementById(ids[k]).style.display=el.checked?'block':'none';
	k++;
	}
}
}
</script>

<!--used for popup to change broadcast reschedule -->
<!-- Modal -->
<div id="reschedulebroad" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reschedule Broadcast</h4>
      </div>
      <div class="modal-body">
      <div class="form-group row">
							<label for="broadcatname" class="col-md-4">Broadcast Name :</label>
							<div class="col-md-8">
							<input type="text" id="broadcatnamecopy" value="rash1" disabled />
							
							
							</div>
					</div>
					<div class="form-group restbox row">
						<label for="broadcastschd" class="col-md-4">Current Schedule Date/Time:</label>
						<div class="col-md-8">
						<input type="text" class="datetime" id="fromdate1"  value="23/11/2018 10:41" disabled/>
							
					
						</div>
					</div>
					<div class="form-group restbox row">
						<label for="broadcastschd" class="col-md-4">New Schedule Date/Time:</label>
						<div class="col-md-8">
						<input type="text" class="datetime" id="todate"  value="23/11/2018 10:41" />
							
					
						</div>
					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="new PNotify({
                                  title: 'Campaign Rescheduled',
                                  text: 'Campaign Rescheduled successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });" ><i class="fa fa-floppy-o"></i>&nbsp;Update</button>&nbsp;<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" ></i>&nbsp;Cancel</button>
      </div>
    </div>

  </div>
</div>

<!-- end broadcast reschedule -->

<!--used for popup to change broadcast Copy  -->
<!-- Modal -->
<div id="copybroadcast" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Copy Broadcast</h4>
      </div>
      <div class="modal-body">
      <div class="form-group row">
							<label for="broadcatname" class="col-md-4">Broadcast Name :</label>
							<div class="col-md-8">
							<input type="text" id="broadcatname" value="rash1_copy" />
							
							
							</div>
					</div>
					
					<div class="form-group restbox row">
						<label for="broadcastschd" class="col-md-4">Broadcast Schedule:</label>
						<div class="col-md-8">
						<input type="text" class="datetime" id="fromdate"  value="23/11/2018 10:41" />
							
					
						</div>
					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="new PNotify({
                                  title: 'Broadcast Copied',
                                  text: 'Broadcast Copied successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });" ><i class="fa fa-floppy-o"></i>&nbsp;Submit</button>&nbsp;<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" ></i>&nbsp;Cancel</button>
      </div>
    </div>

  </div>
</div>

<!-- end broadcast Copy -->


<!-- use for only show product Tour -->
<ul class="cd-tour-wrapper">
		<li class="cd-single-step">
			<span>Step 1</span>

			<div class="cd-more-info bottom">
				<h2>Dashboard</h2>
				<p>Welcome to Axiom 6.0. In dashboard section you can see the stats of messaging on selected dates and compare messaging charts etc.</p>
				
			</div>
		</li> <!-- .cd-single-step -->

		<li class="cd-single-step">
			<span>Step 2</span>

			<div class="cd-more-info bottom">
				<h2>Configuration</h2>
				<p>First you need to configure division, vendor, and map division with verndor and then you are ready to go.</p>
				
			</div>
		</li> <!-- .cd-single-step -->

		<li class="cd-single-step">
			<span>Step 3</span>

			<div class="cd-more-info bottom">
				<h2>Messaging</h2>
				<p>Now you can create groups, and start broadcasting, and increase your business.</p>
				
			</div>
		</li> <!-- .cd-single-step -->
		
		<li class="cd-single-step">
			<span>Step 4</span>

			<div class="cd-more-info bottom">
				<h2>Reports</h2>
				<p>You can view, compare all reports in charts and table format, you can also download this reports in csv format.</p>
				
			</div>
		</li> <!-- .cd-single-step -->
	</ul> <!-- .cd-tour-wrapper -->
	<div class="cd-cover-layer"></div>
<!-- end product Tour -->

<!-- start google translater -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<!--<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- end google translater -->
<!-- use for Reject Reason on click modal -->
<div id="rejectreason" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Rejection Reason</h4>
      </div>
      <div class="modal-body">
	  <div class="row">
        <div class="col-md-12">
				<label>Please describe the rejection reason</label>
				<textarea class="textareawidth" autofocus></textarea>		
		</div>
	  </div>
	  </div>
      <div class="modal-footer">
       <a href="#" data-dismiss="modal" class="btn-rejecttxt" onclick="new PNotify({
                                  title: 'Rejected',
                                  text: 'Rejection Status Updated and sent successfully, user will notified',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });"><i class="fa fa-times" ></i> Reject</a> 
		
		
      </div>
    </div>

  </div>
</div>
<!-- end Reject modal -->
</body>
</html>
