$(document).ready(function(){
$('.back').hide();
$('.flipbtn').on("click",function(){
   // $('.flipbtn').addClass('flag');
    $('.front').toggle(500);
    $('.back').toggle(500);
	
})

	
//used for flip button on report page
//alert($(document).width());
// *************************** //
	//$('#todate').datetimepicker().datetimepicker({value:'',format:'d/m/Y H:i',step:1});
	if($('#todate').length > 0)
	{
		$('#todate').datetimepicker().datetimepicker({value:'',format:'d/m/Y H:i',step:1});
	}
	if($('#fromdate').length > 0)
	{
		$('#fromdate').datetimepicker().datetimepicker({value:'',format:'d/m/Y H:i',step:1});
	}
	

// onload hide sidebar in static on mousehover show the sidebar menu.
$(window).load(function() {
		var windowWidth = $(window).width();
		if(windowWidth < 851)
		{
			$("body").addClass("mmc");
		}
		else
		{
			$("body").removeClass("mmc");
			
		}
	});

//on resize screen sidebar will hide by default when less than 851 width
	$(window).resize(function() {
		var windowWidth = $(window).width();
		if(windowWidth < 851)
		{
			$("body").addClass("mmc");
		}
		else
		{
			$("body").removeClass("mmc");
			$(".topnav_cont").removeAttr("style")
		}
	});

//used for collapse menu when not active sidebar only if you remove this all menu in exmapd mode 
$("#main-menu .mm-dropdown > ul").hide();	
	
//use for sidebar menu	
	$("#main-menu-toggle").click(function(){
		$("body").toggleClass("mmc");
		//$("#main-menu > ul > li.active").addClass("mm-dropdown-root open").children("ul").show();
		var bodyClass = $("body").attr("class");
		if(bodyClass == 'mmc')
		{
			//$.cookies.set('mmc',true);
			$("#main-menu .mm-dropdown.open > a").mouseover();
			$("#main-menu > ul > li.active").addClass("mm-dropdown-root open").children("ul").hide();
			
			//for scroll only miniscroll
			$('#main-menu').removeClass('sminscroll');
			$('#main-menu').removeAttr('style');
			$('.slimScrollDiv').removeAttr('style');
		}
		else
		{
			//$.cookies.set('mmc',false);
			$("#main-menu > ul > li.active").addClass("mm-dropdown-root open").children("ul").show();
			
			//this onl for mini scroll
			$('#main-menu').addClass('sminscroll');
		}
		//$.cookie('main-menu-toggle', true);
	});
	
	
	
	//on document ready also for sidebar scroll 
	
	//alert($.cookie('mmc'));
	/*if($.cookie('mmc') == 'true'){
		$('#main-menu-toggle').click();
	}*/
/* **************************  ************************** */
	$("ul.navigation > li.active").addClass("mm-dropdown-root open").children("ul").show();
	$("#main-menu > ul > li > a").click(function(){
		var currentClass = $(this).parent().attr("class");
		if(! $(this).parent().hasClass("active") && !$("body").hasClass("mmc"))
		{
			$("#main-menu > ul > li").removeClass("mm-dropdown-root open active");
			$("#main-menu > ul > li > ul").slideUp();
			$(this).parent("li").toggleClass("mm-dropdown-root open active");
			$(this).next("ul").slideToggle();
		}
		else if($("body").hasClass("mmc"))
		{
			//$("#main-menu > ul > li").removeClass("mm-dropdown-root open active");
			//$("#main-menu > ul > li > ul").slideUp("slow");
			$("#main-menu > ul > li").removeClass("mm-dropdown-root open active");
			$(this).parent("li").addClass("mm-dropdown-root open active");
			//$("#main-menu > ul > li > ul").hide();
			$("#main-menu > ul > li").not(".open").children("ul").hide();
			$(this).next("ul").toggle();
		}
	});
/* **************************  ************************** */
	$(".navbar-toggle").on("click",function(){
		$(this).next(".topnav_cont").toggle().end().next().next(".right").toggle();
	});
/* **************************  ************************** */

	$(window).resize(function(){
		var screenWidth = $(window).width();
		var bodyCls = $("body").attr("class");
		if(screenWidth < 851 || bodyCls == "mmc")
		{
			$("#main-menu .mm-dropdown.open > ul").hide();
			
		}
		else
		{ 
			$("#main-menu .mm-dropdown.open > ul").show();
			
		}
		
		//use for scroll only when in expand mode sidebar
		if(bodyCls == "mmc"){
			$('#main-menu').removeClass('sminscroll');
			$('#main-menu').removeAttr('style');
			$('.slimScrollDiv').removeAttr('style');
			
		}
		else
		{
			$('#main-menu').addClass('sminscroll');
		}
	});
	
	//onload same on resize the window
	$(window).load(function(){
		var screenWidth = $(window).width();
		var bodyCls = $("body").attr("class");
		if(screenWidth < 851 || bodyCls == "mmc")
		{
			$("#main-menu .mm-dropdown.open > ul").hide();
			
		}
		else
		{ 
			$("#main-menu .mm-dropdown.open > ul").show();
			
		}
		
		//use for scroll only when in expand mode sidebar
		if(bodyCls == "mmc"){
			$('#main-menu').removeClass('sminscroll');
			$('#main-menu').removeAttr('style');
			$('.slimScrollDiv').removeAttr('style');
			
		}
		else
		{
			$('#main-menu').addClass('sminscroll');
		}
	});
/* **************************  ************************** */
/* **************************  ************************** */
// LEFT NAVIGATION ACTIVE CLASS : BEGINS 
	 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 $("ul.navigation li a").each(function(){
	 if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
	    //$(this).addClass("active");
		$(this).parent().addClass("active");
	 });
// LEFT NAVIGATION ACTIVE CLASS : ENDS 
	$('ul.navigation li').each(function(){
    if($(this).hasClass('active')) {
		$('li.mm-dropdown').removeClass('open');
		$('li.mm-dropdown').removeClass('active');
		//$('li.mm-dropdown ul').css('display','none');
		
        $(this).parents('.mm-dropdown-root').addClass('open').slideDown('slow').addClass('active');
		//$('li.mm-dropdown.open.active ul').css('display','block');
    } 
	});
// *************************** //
	var dropdownMenuLink = $(".dropdown-toggle");
	
	$(".dropdown-toggle").on("click",function(){
		$(this).next(".dropdown-menu").toggle();
		$(this).parent().toggleClass("open");
	});
	
	$(".dropdown-toggle-upload").on("click",function(){
		$(this).next(".dropdown-menu-upload").toggle();
		$(this).parent().toggleClass("open");
	});
	
	$(document).on("click",function(a){
		var clicked = $(a.target);
		var menuClick = $(".dropdown-menu-parent").attr("class");
		
		if(! clicked.parents().hasClass("dropdown-toggle"))
		{
			$(".dropdown-menu").hide();
			$(".dropdown.open").removeClass("open");
		}
		
		if(! clicked.parents().hasClass("dropdown-upload-parent"))
		{
			$(".dropdown-menu-upload").hide();
			$(".dropdown-upload-parent").removeClass("open");
		}

	});
// *************************** TOP MENU HOME FIRST LINK HIDE //
	$(".topnav_cont .mainnav > li").first().hide();
// *************************** //
	/*$(".alert .close").click(function(){
		$(this).parent(".alert").hide("slow",function(){
			$(this).remove();
		});
	});*/
	/*setTimeout(function() {
    	$(".alert-success").hide("slow",function(){
			$(this).remove();
		})
	}, 5000);*/
// *************************** DROPBOX *************************** //
	/*document.getElementById("db-chooser").addEventListener("DbxChooserSuccess",
        function(e) {
            alert("Here's the chosen file: " + e.files[0].link)
            window.location.href = 'e.files[0].link';
        }, false);*/
// *************************** FILE UPLOAD MENU *************************** //
	$(".file-field-link").on("click",function(){
		$(this).prev(".file-field-input").click();
	});
	$(".file-field-input").change(function(){
		$(".filename-text").html($(this).val()).addClass("text-green");
	});

 
// *************************** //
	$("input:radio[name='allocate-revoke']").click(function(){
		var thisValue = $(this).val();
		if(thisValue == 'allocate')
		{
			$("dl.allocate,.ar-submit").show();
			$("dl.revoke").hide();
		}
		else
		{
			$("dl.allocate").hide();
			$("dl.revoke,.ar-submit").show();
		}
	});
	
	$("input:radio[name='allocate-revoke-email']").click(function(){
		var thisValue = $(this).val();
		if(thisValue == 'allocate-email')
		{
			$("dl.allocate-email,.ar-submit").show();
			$("dl.revoke-email").hide();
		}
		else
		{
			$("dl.allocate-email").hide();
			$("dl.revoke-email,.ar-submit").show();
		}
	});

// *************************** //
	$(".stat-counters .text-bg").each(function(){
		var text = $(this).text();
		var screenWidth = $("body").width();
		//alert(screenWidth);
		if(screenWidth < 1100)
		{
			if(text.length > 8)
			{
				$(".stat-counters .text-bg").css("font-size","14px");
			}
		}
	});
// *************************** //
	
// *************************** //
	$("body").delegate(".expand-link","click",function(){
		var relLink = $(this).attr("rel");
		$(this).parents("tr").nextAll(".row-expand."+relLink).toggle();
		var textLink = $(this).text();
		if(textLink == "+")
		{
			$(this).text("-");
		}
		else
		{
			$(this).text("+");
		}
	});
// *************************** //
	//$("#ctall").click(function(){
	//	window.open("country-codes.php", "mywindow","location=1,status=1,scrollbars=1, width=400, height=360, top=100, left=360");
	//});
	$("#not-now").click(function(){
		window.close();
	});
// *************************** //

/* $userAgent = navigator.userAgent
preg_match( '/MSIE ([0-9]{1,}[\.0-9]{0,})/', $userAgent, $matches );
$version = float( $matches[1] );
if( $version <= 6.0 ) {
    alert($version);
} */

// ****************** PLACEHOLDER ************** //



/*
$(":[placeholder]").each(function(){
		var	phVal = $(this).attr("placeholder");
		$("input:[placeholder]").val(phVal).css({'color':'#999', 'opacity':'1'});
			$("form").submit(function(){
				if($(this).val() == phVal){
					$("input:[placeholder]").val("");
				 }
			});
		$(this).bind('keypress',function(){
			if($(this).val() == phVal){
				$(this).val("").css({'color':'','opacity':''});
			}
		});
		$(this).bind('focusout',function(){
			if($(this).val() == ""){
				$(this).val(phVal).css({'color':'#999','opacity':'1'});
			}
		});
});*/
// *************************** //
// *************************** //
// *************************** //
});


//------------ plugin for chcekbox showHide --------------//
(function($){
	$.fn.extend({ 
		checkboxBivHide: function(options) {
			var defaults = {
				hideDivId: '.hide',
				showDivId: '.show',
			};		
			var options = $.extend(defaults, options);
    		return this.each(function() {
				var o =options;
				var items = $(this);
				items.click(function() {
						if($(this).is(':checked') == true){
							debugger;
							$(o.hideDivId).hide();
							$(o.showDivId).show();
						}
						else{
							$(o.showDivId).hide();
						}					
				})
    		});
    	}
	});
})(jQuery);
// *************************** //

// ***************  Change Radio click event Show Hide ****************** //
(function($){
	$("input:radio[data-show]").change(function(){
			 var show = $(this).attr("data-show");
			 var hide = $(this).attr("data-hide");
			 $(show).show();
			 $(hide).hide();	
	});	
})(jQuery); 


//Custom Used by Ajit date - 27-06-2018
//added for onclick new row added in division page 
$("#add_divisionrow").click(function () { 

    $("#divisiontbl").each(function () {
       
        var tds = '<tr>';
        jQuery.each($('tr:last td', this), function () {
            tds += '<td>' + $(this).html() + '</td>';
        });
        tds += '</tr>';
        if ($('tbody', this).length > 0) {
            $('tbody', this).append(tds);
        } else {
            $(this).append(tds);
        }
    });
});

//use for url selection active class

//use for assign items from left to right in division creation page
$(document).ready(function(){
// ***************************************** //
var clickLeft,clickRight,selectLeft,selectRight;

function selectListMove(clickLeft,clickRight,selectLeft,selectRight)
{
	//alert(clickLeft + clickRight + selectLeft + selectRight);
	$(clickLeft).click(function(){
		var selectOption = $(selectLeft + " option:selected");
		if(selectOption.length == 0)
		{
			new PNotify({
                                  title: 'Nothing to Move',
                                  text: 'Please select at least one item from left to move',
                                  type: 'danger',
                                  styling: 'bootstrap3'
                              });
		}
		$(selectRight).append($(selectOption).clone());
		$(selectOption).remove();		
	});
	$(clickRight).click(function(){
		var selectOption = $(selectRight + " option:selected");
		if(selectOption.length == 0)
		{
			//alert("Nothing to move.");
			new PNotify({
                                  title: 'Nothing to Move',
                                  text: 'Please select at least one item from right to move',
                                  type: 'danger',
                                  styling: 'bootstrap3'
                              });
		}
		$(selectLeft).append($(selectOption).clone());
		$(selectOption).remove();
	});
}

selectListMove("#template-assign-add","#template-assign-remove","#template-assign-left","#template-assign-right");

selectListMove("#assign-sender-add","#assign-sender-remove","#assign-sender-left","#assign-sender-right");

$("#push-detail").click(function(){
		$("ul.padbot-search,ul.advanced-search").toggle();
	});
});
// ***************************************** //




//use to select the radio button of division and sub-ddivission.
$(document).ready(function(){
	$("#subdivision").hide();
				$('input:radio[name=creatediv]').click(function () {
					//alert('hello');
                    var checkval = $(this).val();
                    if (checkval == 'division')
                    {	
                        $("#division").show();
						$("#subdivision").hide();
                    }
                    else if(checkval == 'subdivision') {
                        $("#division").hide();
						$("#subdivision").show();
                    }
					else{
						
					}
					
                });
				
				//use for create sms m and email template hide show div 
				$('input:radio[name=ctemplate]').click(function () {
					//alert('hello');
                    var checkval = $(this).val();
                    if (checkval == 'smstemp')
                    {	
                        $("#smstempdiv").show();
						$("#emailtempdiv").hide();
                    }
                    else if(checkval == 'emailtemp') {
                        $("#smstempdiv").hide();
						$("#emailtempdiv").show();
                    }
					else{
						
					}
					
                });
				
				
				//use for sms and email template view table on lick on button 
				$('#smst').click(function () {
					//alert('hi');
					$('#smstemplate').show();
					$('#emailtemplate').hide();
					$('#smst').removeClass('btn-default');
					$('#smst').addClass('btn-primary');
					$('#emailt').removeClass('btn-primary');
					$('#emailt').addClass('btn-default');
					
				});
				$('#emailt').click(function () {
					
					$('#smstemplate').hide();
					$('#emailtemplate').show();
					$('#emailt').addClass('btn-primary');
					$('#smst').addClass('btn-default');
					$('#smst').removeClass('btn-primary');
					$('#emailt').removeClass('btn-default');
					
					
				});
				
				
				
				//use for multiselection dropdown
				
				// Multi Select function for All controllers
				var control,selectedText,selectAll,placeholder	
				var multiSelect = function(control, selectedText, selectAll, placeholder){
					$(control).SumoSelect({ 
						search: true, 
						selectAll:selectAll,
						locale:['OK', 'Cancel', "Select All "+selectedText],
						captionFormatAllSelected:' All {0} ' +selectedText+' Selected ',
						captionFormat:'{0} '+ selectedText+ ' Selected', 
						placeholder: placeholder
					});
				}
	
				//multiSelct(control, selectedText, selectAll, placeholder);
				multiSelect('.vendortype','Vendor Type','true','Select Vendor Type');
				multiSelect('.countryrouting','Country Routing','true','Select Country');
				multiSelect('.supportedchannels','Supported Channels','true','Supported Channels');
				multiSelect('.subdivision','Sub-division','true','Sub-divisions');
				multiSelect('.category','Category','true','Category');
				//multiSelect('.supportedchannels','Select Supported Channels','true','Select Country');
				multiSelect('.channelsreport','','true','Select Channels');
				multiSelect('.ActSenderID','Actual Sender',true,'Select Actual Sender');
				multiSelect('.RcvSenderID','Received Sender',true,'Select Received Sender');
				multiSelect('.country','Country','true','Select Country');			
				multiSelect('.countryexclude','Country','true','Select Country');			
				multiSelect('.countryinclude','Country','true','Select Country');			
				multiSelect('.circle','Circle','true','Select Circle');
				multiSelect('.operator','Operator','true','Select Operator');
				multiSelect('.smsc','smsc','true','Select smsc');
				multiSelect('.groupselect','Group','true','Select Group');

//slim scroll
$('#main-navbar-notifications').slimScroll({
        width: '300px',
		height: '200px',
		railVisible: true,
		allowPageScroll: false
    });
$('#main-navbar-messages').slimScroll({
        width: '300px',
		height: '200px',
		railVisible: true,
		allowPageScroll: false
    });
	$('.filter_opts ul').slimScroll({
		width: '100%',	
		height: '200px',
		alwaysVisible :false,
		railVisible: true,
		railOpacity: 0.3,		
		distance: '1px',
		allowPageScroll: false,
		disableFadeOut: false,
		allowPageScroll: false
		
    });				

	//use for datatable
	'use strict';
    $('#example1').DataTable({
    responsive: true
		});
	'use strict';
    $('#example2').DataTable({
    responsive: true
		});
	$('#example3').DataTable({
    responsive: true
		});
					
});
//use for data tooltip bootstrap
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

//for data table responsive	


$(document).ready(function() {

	//hide show div on checkbox for smsm email otp
	$(".div-sms-non-otp, .div-sms-otp, .div-email").hide();
	//use for show hide vendor type otp non-otp etc in vendor creation checkbox
		$('#vtypeotp').on('click',function(){
				if($(this).is(':checked')){
					 $(".div-sms-otp").show();
					 
				}else
				{
					$(".div-sms-otp").hide();
				}
			});
			$('#vtypenonotp').on('click',function(){
				if($(this).is(':checked')){
					 $(".div-sms-non-otp").show();
					 
				}else 
				{
					$(".div-sms-non-otp").hide();
				}
			});
			$('#vtypeemail').on('click',function(){
				if($(this).is(':checked')){
					 $(".div-email").show();
					 
				}else
				{
					$(".div-email").hide();
				}
			});
			$('#vtypewhatsapp').on('click',function(){
				if($(this).is(':checked')){
					 $(".div-whatsapp").show();
					 
				}else
				{
					$(".div-whatsapp").hide();
				}
			});
			
			//used for set setfreq in simple campaign type
			$('#setfreq').on('click',function(){
				if($(this).is(':checked')){
					 $("#freqtype").removeAttr('disabled');
					 
				}else
				{
					 $("#freqtype").attr('disabled','disabled');
				}
			});
			
			//used for simple tab in broadcast page for weekly daily monthly show hide
			$('.daily, .weekly, .monthly').hide();
			$("#freqtype").change(function() {
			if ($(this).val() == "1") {
				$(".daily").show("");
				$(".weekly").hide("");
				$(".monthly").hide("");
				
			} 
			else if ($(this).val() == "2") {
				$(".daily").hide("");
				$(".weekly").show("");
				$(".monthly").hide("");
				
			}
			else if ($(this).val() == "0") {
				$(".daily").hide("");
				$(".weekly").hide("");
				$(".monthly").hide("");
				
			} 			
			else if ($(this).val() == "3") {
				$(".daily").hide("");
				$(".weekly").hide("");
				$(".monthly").show("");
				
			} 
			});
			
});
		
$(document).ready(function(){
	//use for bootstrap date time
	$(".datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
    });
	
	$('.sminscroll').slimScroll({
		width: '100%',	
		height: '470px',
		alwaysVisible :false,
		railVisible: true,
		railOpacity: 0.6,		
		distance: '1px',
		allowPageScroll: false,
		disableFadeOut: false,
	
		
    });
	
//use for vendor mapping page to show hide vendor service
//use for international only
				//use for otp
                $("input[name$='country']").click(function () {
                    var radio_value2 = $(this).val();
                    if (radio_value2 == 'intnational') {
                        $(".tr-intnational").show("");
                        
                    }
                    else if (radio_value2 == 'national') {
                        $(".tr-intnational").hide("");
                    }
                    else if (radio_value2 == 'All') {
                         $(".tr-intnational").show("");
                    }
                });
				
				//use for non otp
				 $("input[name$='countrynon']").click(function () {
                    var radio_value2 = $(this).val();
                    if (radio_value2 == 'intnationalnon') {
                        $(".tr-intnational1").show("");
                        
                    }
                    else if (radio_value2 == 'nationalnon') {
                        $(".tr-intnational1").hide("");
                    }
                    else if (radio_value2 == 'Allnon') {
                       $(".tr-intnational1").show("");
                    }
                });
				
				//use for email
				 $("input[name$='countryemail']").click(function () {
                    var radio_value2 = $(this).val();
                    if (radio_value2 == 'intnationalemail') {
                        $(".tr-intnational2").show("");
                        
                    }
                    else if (radio_value2 == 'nationalemail') {
                        $(".tr-intnational2").hide("");
                    }
                    else if (radio_value2 == 'Allemail') {
                        $(".tr-intnational2").hide("");
                    }
                });
				
				
	//use for onchange of vendor 1
$(".tr-intnational,.tr-intnational1,.tr-intnational2, .tr-otp, .tr-nonotp, .tr-email").hide();	
    $("#vemdorm").change(function() {
        if ($(this).val() == "1") {
            $(".tr-otp").show("");
            $(".tr-nonotp").show("");
            $(".tr-email").show("");
            
        } 
		else if ($(this).val() == "2") {
            $(".tr-otp").show("");
            $(".tr-nonotp").hide("");
            $(".tr-email").show("");
        }
        else if ($(this).val() == "3") {
           $(".tr-otp").show("");
            $(".tr-nonotp").hide("");
            $(".tr-email").hide("");
        } 
		else if ($(this).val() == "4") {
           $(".tr-otp").hide("");
            $(".tr-nonotp").show("");
            $(".tr-email").hide("");
        } else {
           $(".tr-otp").hide("");
            $(".tr-nonotp").hide("");
            $(".tr-email").hide("");
        }
        
    });
	
	//use for subdivision and division selection in division creation
	$(".ctemplate").hide();	
    $("input[name$='msgcontent']").click(function () {
       var radio_content = $(this).val();
      if (radio_content == 'mannual') {
            $(".ctemplate").hide("");
             $("#allowuni").removeAttr("disabled");          
          }
        else if (radio_content == 'template') {
         $(".ctemplate").show("");
         $("#allowuni").attr("disabled","true");
         }
    });	
	
//used for advanc broadcast for showing msg when select the file.

	$(".dymsg").hide();	
    $(".upload").click(function () {
      $('.dymsg').show();
    });	
	

//use for message create broadcast message content type 
	$(".sdNo").hide();	
    $("input[name$='havesubdiv']").click(function () {
       var radio_value2 = $(this).val();
      if (radio_value2 == 'sdYes') {
            $(".sdNo").hide("");
                        
          }
        else if (radio_value2 == 'sdNo') {
         $(".sdNo").show("");
         }
    });	
	
	

//use for select broadcast category like simple, onetoone , dynamic etc.
$(".oneonebox, .dynamicbox, .reminderbox, .personalizediv").hide();
 $("input[name$='broadcastcat']").click(function () {
       var radio_broadcastcat = $(this).val();
      if (radio_broadcastcat == 'simple') {
            $(".simplebox").show("");
            $(".oneonebox").hide("");
            $(".dynamicbox").hide("");
            $(".reminderbox").hide("");
            $(".personalizediv").hide("");
            $(".restbox").show("");
                        
          }
        else if (radio_broadcastcat == 'oneone') {
			 $(".simplebox").hide("");
            $(".oneonebox").show("");
            $(".dynamicbox").hide("");
            $(".reminderbox").hide("");
			$(".personalizediv").show("");
			$(".restbox").show("");
         }
		 
		 else if (radio_broadcastcat == 'dynamic') {
			 $(".simplebox").hide("");
            $(".oneonebox").hide("");
            $(".dynamicbox").show("");
            $(".reminderbox").hide("");
			$(".personalizediv").show("");
			$(".restbox").show("");
         }
		 else if (radio_broadcastcat == 'reminder') {
			 $(".simplebox").hide("");
            $(".oneonebox").hide("");
            $(".dynamicbox").hide("");
            $(".reminderbox").show("");
			$(".personalizediv").show("");
			$(".restbox").hide("");
         }
    });	
    	
	//used for simple create broadcast in reciept method
	//use for subdivision and division selection in division creation
	$(".rupload, .rselection").hide();	
    $("input[name$='reciept']").click(function () {
       var radio_value2 = $(this).val();
      if (radio_value2 == 'rmanual') {
            $(".rmanual").show("");
            $(".rupload").hide("");
            $(".rselection").hide("");
                        
          }
        else if (radio_value2 == 'rupload') {
			$(".rmanual").hide("");
            $(".rupload").show("");
            $(".rselection").hide("");
         }
		 
		 else if (radio_value2 == 'rselection') {
			$(".rmanual").hide("");
            $(".rupload").hide("");
            $(".rselection").show("");
         }
    });


//use for create group or both sms and others
	$(".emailblock").hide();	
    $("input[name$='group']").click(function () {
       var radio_value2 = $(this).val();
      if (radio_value2 == 'smsgroup') {
            $(".emailblock").hide("");
            $(".smsblock").show("");
            
                        
          }
        else if (radio_value2 == 'emailgroup') {
           $(".emailblock").show("");
            $(".smsblock").hide("");
         }
    });

	
	//use for create manual or upload in group creation others
	$(".usms, .uemail").hide();	
    $("input[name$='gmethod']").click(function () {
       var radio_value2 = $(this).val();
      if (radio_value2 == 'manual') {
            $(".rsms").show("");
            $(".usms").hide("");
                        
          }
        else if (radio_value2 == 'upload') {
          $(".rsms").hide("");
            $(".usms").show("");
         }
		 
    });
	
	$(".uemail").hide();	
    $("input[name$='gmethodem']").click(function () {
       var radio_value2 = $(this).val();
      if (radio_value2 == 'manual') {
            $(".remail").show("");
            $(".uemail").hide("");
                        
          }
        else if (radio_value2 == 'upload') {
          $(".remail").hide("");
            $(".uemail").show("");
         }
		 
    });
	
	
	
	//use for enable disable promo and alert radio for simple campaign in create broadcast
	
    $("input[name$='mgcat']").click(function () {
       var radio_value2 = $(this).val();
      if (radio_value2 == 'alert') {
            $("#sendern").removeAttr('disabled');
                                  
          }
        else if (radio_value2 == 'promo') {
           $("#sendern").attr('disabled','disabled');
         }
		 
    });
				
					
	//use for file upload to show the new design of upload file.
	$('.btnuploads').hide();
	 $('input[type="file"]').change(function(e){
            var fileName = "c://fakepath/" + e.target.files[0].name;
            $('#filenameshow').html(fileName);
			$('#filenameshow').addClass('fileselected');
			$('#filenameshow').removeClass('uploadfilename');
			$('.uploadfile').hide();
			$('.uploadvisible').hide();
			$('.crossfile').show();
			$('.crossfile').css('display','inline-block');
			$('.btnuploads').show();
			
        });
		
		
		// to remove the selected file then again show the upload div
		$("#removefile").click(function(){
		 var fileName = "";
		//$('#removefile').on('click' function(){
		 $('input[type="file"]').val("");
		$('#filenameshow').removeClass('fileselected');
			$('#filenameshow').addClass('uploadfilename');
			$('.uploadfile').show();
			$('#filenameshow').html("No file uploaded.");
			$('.uploadvisible').show();
			$('.crossfile').css('display','none');
			$('.btnuploads').hide();
			
		});
				
	//used for monthly dropdown selectionin simple campain in create broardcast
		$('.recurrencemonthly').on('change', function() {
    var totalElm = $('.recurrencemonthly').length;
    var listId = $(this).attr('id');
    var listNumber = parseInt(listId.split('_')[1]);
    var currValue = parseInt($(this).val());
    var prevValue = parseInt($('#RECURRENCEM_' + (listNumber - 1)).val()) || 0;
    var nextValue = parseInt($('#RECURRENCEM_' + (listNumber + 1)).val()) || 0;
    
    //alert(prevValue + " " + currValue + " " + nextValue);
    
    if(currValue == 0) {
        for(i=listNumber; i<=totalElm; i++) {
            $('#RECURRENCEM_' + (i + 1)).val("");
            $('#RECURRENCEM_' + (i + 1)).attr('disabled', true);
        }
    }
    
    if(currValue > 0 && currValue > prevValue && currValue > nextValue) {
        for(i=listNumber; i<=totalElm; i++) {
            $('#RECURRENCEM_' + (i + 1)).val("");
            $('#RECURRENCEM_' + (i + 1)).attr('disabled', true);
        }
        
        $('#RECURRENCEM_' + (listNumber + 1)).val("");
        $('#RECURRENCEM_' + (listNumber + 1)).attr('disabled', false);
    }
    
    if(currValue > 0 && currValue < prevValue) {
        for(i=listNumber; i<=totalElm; i++) {
            $('#RECURRENCEM_' + (i + 1)).val("");
            $('#RECURRENCEM_' + (i + 1)).attr('disabled', true);
        }
        
        $(this).val("");
        $('#RECURRENCEM_' + (listNumber + 1)).val("");
    }
    
    if(currValue > 0 && currValue == prevValue) {
        for(i=listNumber; i<=totalElm; i++) {
            $('#RECURRENCEM_' + (i + 1)).val("");
            $('#RECURRENCEM_' + (i + 1)).attr('disabled', true);
        }
        
        $(this).val("");
    }
    
    if(currValue > 0 && currValue == nextValue) {
        for(i=listNumber; i<=totalElm; i++) {
            $('#RECURRENCEM_' + (i + 1)).val("");
            $('#RECURRENCEM_' + (i + 1)).attr('disabled', true);
        }
        
        $('#RECURRENCEM_' + (listNumber + 1)).val("");
        $('#RECURRENCEM_' + (listNumber + 1)).attr('disabled', false);
    }
});


// addd another ip input box for all 
$('.addip').click(function() {
    $('.addip').before('<div class="addipdiv"><input type="text" class="form-control input-xs" max="3" placeholder="192">.<input type="text" max="3" class="form-control input-xs" placeholder="168">.<input type="text" class="form-control input-xs" placeholder="11">.<input type="text" class="form-control input-xs" placeholder="112"> <a href="JavaScript:Void(0);" class="removeip btn btn-primary-outline btn-xs"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></div>');
});
$('.ipbox').on('click','.removeip',function() {
 	$(this).parent().remove();
});

// addd sender id for sender management 
$('.addsender').click(function() {
    $('.addsenderid').before('<div class="addsenderdiv"><input type="text" class="form-control" max="3" placeholder=""><a href="JavaScript:Void(0);" class="removeip btn btn-primary-outline btn-xs"><i class="fa fa-minus-circle" aria-hidden="true"></i></a></div>');
});
$('.senderbox').on('click','.removeip',function() {
 	$(this).parent().remove();
});

//use for domestic interntional all in create group page sms tab
$("input[name$='rtype']").click(function () {
       var rtype_value = $(this).val();
      if (rtype_value == 'domestic') {
            $(".domestic").show("");
            $(".int").hide("");
            $(".domesticdiv").show("");
           $(".int").tooltip('hide'); 
                        
          }
		else if (rtype_value == 'int') {
         $(".domestic").hide("");
            $(".int").show("");
			 $(".int").tooltip('show'); 
			  $(".domesticdiv").hide("");
         }
        else if (rtype_value == 'all') {
           $(".domestic").hide("");
            $(".int").show("");
			 $(".int").tooltip('show');
			$(".domesticdiv").hide("");			 
         }
		 
});



//use for checkbox for short url personalized div
//use for personalized fall back url 
$('.androiddrop, .iosdrop, .fallbackdrop, .error_msg').hide()
		$('#android').on('click',function(){
				if($(this).is(':checked')){
					$('.androiddrop').show();
					$('.androidtxt').hide();
					$('.error_msg').show();
					
				}else{
					$('.androiddrop').hide();
					$('.androidtxt').show();
					$('.error_msg').hide();
				}
			});
			$('#ios').on('click',function(){
				if($(this).is(':checked')){
					$('.iosdrop').show();
					$('.iostxt').hide();
					
				}else{
					$('.iosdrop').hide();
					$('.iostxt').show();
				}
			});
			$('#fallback').on('click',function(){
				if($(this).is(':checked')){
					$('.fallbackdrop').show();
					$('.fallbacktxt').hide();
					
				}else{
					$('.fallbackdrop').hide();
					$('.fallbacktxt').show();
				}
			});

//use for selection on sendon selectbox in reminder campaign
  $(".sendon").change(function() {
        if ($(this).val() == "4") {
            $(".sendonselect").hide("");
                       
        } 
		else{
            $(".sendonselect").show("");
        }
              
    });	

//used for template management page to show template based on selection of sms and email.
	$('#smstemp').on('click',function(){
				if($(this).is(':checked')){
					$('.sms').show();
				}
				else {
					$('.sms').hide();
				}
			});
		$('#emailtemp').on('click',function(){
				if($(this).is(':checked')){
					$('.email').show();
				}
				else{
					$('.email').hide();
				}
			});

	
//Used for trigger when load first time Product Tour
setTimeout(function(){ 
//$( "#cd-tour-trigger" ).trigger( "click" );	
 }, 3000);
	

//Used for sweet alerts 
$('.btn-delete').click(function() {
    deleteEle = this;
    swal({
    title: "Are you sure?",
    text: "You will not be able to recover this row data!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    closeOnConfirm: false
    },
    function(){
        let url = $(deleteEle).data('url');
        let token = $(deleteEle).data('token');
        if(url && token) {
            let deleted = deleteUsingAjax(url, token).responseJSON;
            
            if(deleted.error) {
                swal("Error in delete!", deleted.error+"!.", "error");    
            } else {
                $(deleteEle).closest("tr").remove();
                swal("Deleted!", "Your row data has been deleted.", "success");
            }
        } else {
            swal("Error in delete!", "Something Went Wrong!.", "error");
        }
    });
});	
function deleteUsingAjax(URL, TOKEN) {
    return $.ajax({
        url: URL,
        data: {_token: TOKEN},
        type: "delete",
        async: false,
        success: function (data) {
            
            if(data.error) {
                return data;
            } else {
                return true;
            }
        },
        error: function () {
            return false;
        }
    });
    
}
//use fro activeate and deactivate
$('input.onoffswitch-checkbox:checked').click(function() {
swal({
  title: "Are you sure?",
  text: "You want to deactivate !",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Deactivate it!",
  closeOnConfirm: false
},
function(){
  swal("Deactivated!", "Deactivated successfully.", "success");
});
});	


//used in addd vendor scrren to diable while making check on unlimited tps
$('#ounlimited').click(function() {
	if($(this).is(':checked')){
					$('#omaxlimit').attr('disabled','disabled');
				}
				else {
					$('#omaxlimit').removeAttr('disabled','disabled');
				}
		
});

$('#nunlimited').click(function() {
	if($(this).is(':checked')){
					$('#nmaxlimit').attr('disabled','disabled');
				}
				else {
					$('#nmaxlimit').removeAttr('disabled','disabled');
				}
		
});

$('#eunlimited').click(function() {
	if($(this).is(':checked')){
					$('#emaxlimit').attr('disabled','disabled');
				}
				else {
					$('#emaxlimit').removeAttr('disabled','disabled');
				}
		
});

//use fro activeate and deactivate
$('input.onoffswitch-checkbox:not(:checked)').click(function() {
swal({
  title: "Are you sure?",
  text: "You want to activate !",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#0360b8",
  confirmButtonText: "Yes, Activate it!",
  closeOnConfirm: false
},
function(){
  swal("Activated!", "Activated successfully.", "success");
});
});	

//use for download report comfirmation
 $('.download').click(function() {
swal({
  title: "Are you sure?",
  text: "You want to download this report!",
  type: "info",
  showCancelButton: true,
  confirmButtonColor: "#0360b8",
  confirmButtonText: "Yes, download it!",
  closeOnConfirm: true
});
});	

//use for Notification screen when click on approve btn this alert will in acction
$('.btn-approvetxt, .btn-approve').click(function() {
swal({
  title: "Are you sure?",
  text: "You want to approve this!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#5ebd5e",
  confirmButtonText: "Yes, Approve!",
  closeOnConfirm: false
},
function(){
  swal("Approved!", "Now user can use this", "success");
});
});	

//use for small sxxcreen bar click to show top header right bar.
$('.smallbar').on('click',function() {
 	$('.header .right').slideToggle(500);
 	$('.pnav').slideToggle(500);
 	$('.content').toggleClass('marginTop');
});

   			
});//closed for document ready
//used to set min width for mobile.
window.onload = function () {
    var mvp = document.getElementById('myViewport');
    mvp.setAttribute('content','width=580');
}

//use for ccusstom date range and report top filter_opts
 // Date Parameters //
            $('.customDateRange').hide();
            $(".dateDropDown-List a").on('click', function() {
                $(this).parents(".btn-group").find('.btn').html($(this).text() + ' <span class="caret"></span>');
                $(this).parents(".btn-group").find('.btn').val($(this).data('value'));

                if (!$(this).hasClass('customDate')) {
                    $('.customDateRange').hide();
                } else {
                    $('.customDateRange').show();
                }
            });

//used for campaign creation on textarea character count 
function countChar(val) {
        var len = val.value.length;
        if (len >= 612) {
          val.value = val.value.substring(len, 612);
        } else {
         $('.broadcastmsg').text(612 - len);
        }
		
		//use for msg count
		if (len <= 162) {
         $('.msgcounts').text('1');
        }
		else if (len > 162 && len <= 306) {
         $('.msgcounts').text('2');
        }
		else if (len >= 307 && len <= 459){
          $('.msgcounts').text('3');
        }
		else if (len >= 460 && len <= 612){
          $('.msgcounts').text('4');
        }
     };			

//used for fix the filter box when scroll up 
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 20) {
        $(".panel .search_bar, .main_head").slideUp("");
		 $(".panel").addClass("fixedsearch");
    }
	else{
		 $(".panel .search_bar, .main_head").slideDown("");
		 $(".panel").removeClass("fixedsearch");
	}
});

//use for simple broadcast when select template then textarea should be disabled.
     $("#selecttemp").change(function() {
		if ($(this).val() == "0") {
			$('#simpletextarea').removeAttr('disabled');   
        } 
		else {
             $('#simpletextarea').attr('disabled','disabled');    
        }
     });
	 

/* used for chart in Vendor summary report */
Highcharts.chart('vendorsummaryreport', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Vendor Summary Report'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Vendor1', 'Vendor2', 'Vendor3', 'Vendor4', 'Vendor5'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Messages in (millions)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' millions'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'OTP',
        data: [122, 342, 124, 203, 400]
    }, {
        name: 'Non-OTP',
        data: [342, 122, 322, 408, 298]
    }, {
        name: 'Promotional',
        data: [124, 122, 321, 302, 312]
    }, {
        name: 'Total',
        data: [588, 586, 767, 913, 1010]
    }]
});
/* used for charts */
