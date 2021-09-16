<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Axiom - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css" >
	<script src="vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
	<!-- Pixel Admin's stylesheets -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/login.css" rel="stylesheet" type="text/css">
	<!--<link href="css/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="css/themes.min.css" rel="stylesheet" type="text/css">-->

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->

</head>
<body>
<div class="loginbg">
<div class="col-lg-4 col-md-4">

</div>
<div id="loginbox" class="col-lg-4 col-md-4  col-sm-12 ">                    
				<div class="panel1">
								<div class="form-group" style="padding-top:60px;padding-bottom:38px;">
                                    <div class="col-md-12 control text-center">
                                        <img src="images/logocolor.png" alt="logo"/>
                                    </div>
								</div> 
								<div class="panel-heading hide">
									<div class="panel-title">Login to your Account</div>
										
								</div>     
					   
                    <div style="padding-top:10px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="group-management">
                                    <div class="text-center userimg">
										<img src="images/user.jpeg" alt="user"/>
									</div>
									<div class="logintrans">
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" autofocus value="admin" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                            </div>
                            <div style="margin-bottom: 10px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" value="1234567898" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="input-group">
                                    
                                       <label class="ccheck  hide"> Remember me
											<input type="checkbox" checked id="remember" name="remember" value="remember" >
											<span class="ccheckmark"></span>
										</label>
                                     
                                    </div>
									

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="{{ route('group.view-group') }}" style="width: 100%;" class="btn btn-primary"><i class="glyphicon glyphicon-lock"></i> Login  </a>
                                      

                                    </div>
                                </div>
								</div>

                                <div class="form-group" >
                                    <div class="col-md-12 control">
                                        <div style="border-top: 0px solid #eee; padding-top:15px; font-size:85%; text-align:center; color: #333;" >
                                         If you’ve forgotten your username or password,contact your administrator.
                                        </div>
                                    </div>
                                </div>    
                        </form>     

							    

                        </div> <br></br>
						<div class="form-group" style="position: absolute; width:95%;bottom: 10px;">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid #333; text-align:center; padding-top:15px; font-size:85%; color: #333;" >
                                          Copyright &copy; 2018 <a href="https://acl-mobile.com" target="_blank">ACL Mobile LTD.</a>
                                        </div>
                                    </div>
                        </div>						
                    </div>  
			</div>
<div class="col-lg-4 col-md-4">
	
	<p></p>
</div>
<div class="backdrop" id="site-landing"></div>

</div>

<!-- Pixel Admin's javascripts -->
<script src="js/jquery.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<script src="js/polygonizr.js"></script>
<script type="text/javascript">
//use for login animation 
 $('#site-landing').polygonizr();
 
	// Resize BG
	init.push(function () {
		var $ph  = $('#page-signin-bg'),
		    $img = $ph.find('> img');

		$(window).on('resize', function () {
			$img.attr('style', '');
			if ($img.height() < $ph.height()) {
				$img.css({
					height: '100%',
					width: 'auto'
				});
			}
		});
	});

	// Show/Hide password reset form on click
	init.push(function () {
		$('#forgot-password-link').click(function () {
			$('#password-reset-form').fadeIn(400);
			return false;
		});
		$('#password-reset-form .close').click(function () {
			$('#password-reset-form').fadeOut(400);
			return false;
		});
	});

	// Setup Sign In form validation
	init.push(function () {
		$("#signin-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
		// Validate username
		$("#username_id").rules("add", {
			required: true,
			minlength: 3
		});

		// Validate password
		$("#password_id").rules("add", {
			required: true,
			minlength: 6
		});
	});

	// Setup Password Reset form validation
	init.push(function () {
		$("#password-reset-form_id").validate({ focusInvalid: true, errorPlacement: function () {} });
		
		// Validate email
		$("#p_email_id").rules("add", {
			required: true,
			email: true
		});
	});

	window.PixelAdmin.start(init);
	
	$(function(){
		$("input[type='submit']").on('click',function(){
			var userID = $('#username_id').val(), 
		    pwd = $('#password_id').val(),
			url = window.location.pathname,
		    value = url.substring(url.lastIndexOf('/') + 1)
			if(userID != ""){
				if(userID == "enterpriseadmin" && pwd=="123456"){
					url = url.replace(value, 'admin/index.html')
					<!-- alert("new url => " + url); -->
					$('form').attr('action',url).submit();
					//window.location.replace(url);						 
				}else if(userID == "enterprise" && pwd=="123456"){
					url = url.replace(value, 'user/index.html')
					<!-- alert("new url => " + url); -->
					$('form').attr('action',url).submit();	
				}else if(userID == "cfu" && pwd=="123456"){
					url = url.replace(value, ''+userID+'/view-users.html')
					<!-- alert("new url => " + url); -->
					$('form').attr('action',url).submit();	
				}else if(userID == "moderator" && pwd=="123456"){				
					url = url.replace(value, 'modrator/index.html')
					<!-- alert("new url => " + url); -->
					$('form').attr('action',url).submit();		
				}else{
					alert('The username or password you entered is incorrect.');
                    return false;					
				}
				
			}	
		});
	 
	});
	
</script>
</body>
</html>
