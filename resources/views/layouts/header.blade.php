

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta id="myViewport" name="viewport" content="width ='562'">
<title>Axiom</title>



<link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" >
<link rel="favicon" type="image/png" href="{{ asset('images/favicon.ico') }}" >
<link href="{{ asset('css/fontawesomeanim.css') }}" media="all" rel="stylesheet" />
<link href="{{ asset('css/reset.css') }}" media="all" rel="stylesheet" />
<!--[if IE 8]>
<link href="css/ie-8.css" media="all" rel="stylesheet" />
<![endif]-->
<link href="{{ asset('css/jquery.datetimepicker.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/multiSelect/sumoselect.css') }}" rel="stylesheet">

<!-- notification -->
<link href="{{ asset('vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">

<!-- end notification -->

<!-- used for sweet alerts -->

<link href="{{ asset('vendors/sweetalert/lib/sweet-alert.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/datatable.css') }}" media="all"rel="stylesheet">
<link href="{{ asset('css/style.css')}}" media="all" rel="stylesheet">


<script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}" type="text/javascript">
    
</script>
<script src="{{ asset('js/slimScroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/highchart.js') }}" type="text/javascript"></script>

<!-- Additional IE/Win specific style sheet (Conditional Comments) -->
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->
</head>
<body>
<div class="loader">  </div>
<!-- Container -->
<div class="main_container">
  <!-- Header -->
  <div class="header">
    <button id="main-menu-toggle" type="button"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
    <div class="logo"><img src="{{ asset('images/clogow.png') }}" alt="logo"></div>
    <button data-target="#main-navbar-collapse" class="navbar-toggle" type="button"><i class="navbar-icon fa fa-bars"></i></button>
    <!-- Top Navigation -->
    <div class="topnav_cont hide">
      <div class="topnav">
        <ul class="mainnav">
          <li>-</li>
        </ul>
      </div>
    </div>
	<i class="navbar-icon fa fa-bars smallbar"></i>
    <!-- //Top Navigation -->
    <!-- RIGHT TOP MENU : BEGINS -->
    <div class="right">
	
      <ul class="nav navbar navbar-nav right-navbar-nav ">
	 
        <li class="nav-icon-btn nav-icon-btn-delete dropdown"><a data-toggle="dropdown" aria-haspopup="true" class="dropdown-toggle" href="Javascript:void(0);"> <span class="label ">3</span> <i class="nav-icon fa fa-bell-o faa-ring animated"></i> <span class="small-screen-text">Notifications</span> </a>
		
          <div class="dropdown-menu widget-notifications no-padding">
		  <div class="arrow-up"></div> 
		  <div class="notificationtxt"><span><b>Notifications</b></span><span class="pull-right countnotify">New 3</span></div>
            <div id="main-navbar-notifications" class="notifications-list">
              <div class="notification">
                <div class="notification-title text-primary">New Template - Template1</div>
                <div class="notification-description"> Please approve or reject this template <br>
				<a href="#" class="btn-approve" data-toggle="tooltip" data-placement="top" data-original-title="Approve"><i class="fa fa-check" ></i></a> &nbsp;&nbsp; <a href="#" class="btn-reject" data-toggle="modal" data-target="#rejectreason" data-toggle="tooltip" data-placement="top" data-original-title="Reject"><i class="fa fa-times" ></i></a>&nbsp;&nbsp; <a href="{{ route('notification') }}" class="btn-view" data-toggle="tooltip" data-placement="top" data-original-title="View Details"><i class="fa fa-eye" ></i></a>
				</div>
				 <div class="notification-ago">10min ago Created by <b>ajitk</b></div>
				
				
               
                <div class="notification-icon fa fa-file-text-o bg-primary"></div>
              </div>
              <!-- / .notification -->
              <div class="notification">
                <div class="notification-title text-primary">New Group - DemoGrp</div>
                <div class="notification-description"> Please approve or reject this group <br>
				
				<a href="#" class="btn-approve" data-toggle="tooltip" data-placement="top" data-original-title="Approve"><i class="fa fa-check" ></i></a> &nbsp;&nbsp; <a href="#" class="btn-reject" data-toggle="modal" data-target="#rejectreason" data-toggle="tooltip" data-placement="top" data-original-title="Reject"><i class="fa fa-times" ></i></a>&nbsp;&nbsp; <a href="{{ route('notification') }}" class="btn-view" data-toggle="tooltip" data-placement="top" data-original-title="View Details"><i class="fa fa-eye" ></i></a>
				
				</div>
				 <div class="notification-ago">12min ago Created by <b>anoop</b></div>
				<div class="notification-icon fa fa-cubes bg-primary"></div>
              </div>
              <!-- / .notification -->
             <div class="notification">
                <div class="notification-title text-primary">Edit Broadcast - rash2</div>
                <div class="notification-description"> Please approve or reject this broadcast <br>
				
				<a href="#" class="btn-approve" data-toggle="tooltip" data-placement="top" data-original-title="Approve"><i class="fa fa-check" ></i></a> &nbsp;&nbsp; <a href="#" class="btn-reject" data-toggle="modal" data-target="#rejectreason" data-toggle="tooltip" data-placement="top" data-original-title="Reject"><i class="fa fa-times" ></i></a>&nbsp;&nbsp; <a href="{{ route('notification') }}" class="btn-view" data-toggle="tooltip" data-placement="top" data-original-title="View Details"><i class="fa fa-eye" ></i></a>
				
				</div>
				 <div class="notification-ago">15min ago Edited by <b>ajitk</b></div>
				<div class="notification-icon fa fa-comments bg-primary"></div>
              </div>
              <!-- / .notification -->
              
            </div>
            <!-- / .notifications-list -->
             <a class="notifications-link" href="{{ route('notification') }}">MORE NOTIFICATIONS</a> </div>
        </li>
		<li class=" nav-icon-btn nav-icon-btn-delete dropdown"><a id="cd-tour-trigger" class="dropdown-toggle" href="Javascript:void(0);"> <i class="nav-icon fa fa-question-circle faa-wrench animated"></i> <span class="small-screen-text">Product Tour</span> </a>
		</li>
		
        <li class="dropdown"> <a  aria-expanded="false" class="dropdown-toggle user-menu" href="Javascript:void(0);" >
          <!--<img src="assets/demo/avatars/1.jpg">-->
          <span class="inlinedisp pull-left"><img src="{{ asset('images/user.jpeg') }}" alt="user" class="userimg"></span><span class="pull-right paddingTop15 hidentxt1">&nbsp; Ajit &nbsp;<i class="fa fa-angle-down"></i></span> </a>
		 
          <ul class="dropdown-menu"  role="menu" style="width:192px;">
		   
		   <li role="presentation"><a href="update-profile.php" role="menuitem"><i class="dropdown-icon fa fa-user-circle-o"></i>&nbsp;&nbsp;Update Profile</a></li>
		   
           <li role="presentation"><a href="index.php" role="menuitem"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- RIGHT TOP MENU : ENDS -->
	   <div class="pnav clearfix">
        <ul>
               
        <li class="msg"><a href="{{ route('broadcast.broadcast-summary') }}"><i class="fa fa-comments"></i>&nbsp;Messaging</a></li>
      </ul>
      </div>
  </div>

  <!-- //Header -->