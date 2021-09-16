<style>
.msg a{
	    color: #0360b8 !important;
   
}
</style>
<div class="body_container">
    <div class="let_content">
	    <div class="logo_entp axiomlogo"><!--<img src="images/logo_hdfc.gif" />!-->
		<!--<img src="images/axiomlogo.png" class="axiomlogo" />-->
		<img src="{{ asset('images/logocolor.png') }}" class="axiomlogo" />
		
		
	  </div>
	   <div class="logo_entp smalllogo">
	   <img src="{{ asset('images/smalllogob.png') }}" class="smalllogo" />
	   </div>
	  <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{ asset('images/user.jpeg') }}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Ajit Kumar</p>
                  <div>
                     <small class="designation text-muted">Last login : 12/09/2018, 10:10 AM</small>
                    <span class="status-indicator online"></span>
                  </div>
				  
                </div>
				
    </div>
			  <p class="lastlogin">Last login: <span>12/06/2018, 10:10 AM</span></p>
      <div class="fixpos">
      <!-- Left Nav -->
      <div class="left_nav">
        <div id="main-menu"  class="sminscroll">
		      <p class="navtxt hide">NAVIGATION</p>
          <ul class="navigation">
            <li class="mm-dropdown mm-dropdown-root"><a href="Javascript:void(0);"><i class="menu-icon fa fa-cubes"></i> <span>Group Management </span></a>
              <ul >

                <li class="{{ isActiveRoute('group.group-details,group.view-group,group.edit-group') }}"><a href="{{ route('group.view-group') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>View Group</a></li>
                <li class="{{ isActiveRoute('group.create-group') }}"><a href="{{ route('group.create-group') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>Create Group</a></li>

              </ul>
            </li>

			      <li class="mm-dropdown mm-dropdown-root "><a href="Javascript:void(0);"><i class="menu-icon fa fa-file-text-o"></i><span>Template Management</span></a>
              <ul >
                <li class="mmc-title">Template Management</li>
                <li class="{{ isActiveRoute('template.view-template,template.edit-template') }}"><a href="{{ route('template.view-template') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>View Template</a></li>
                <li class="{{ isActiveRoute('template.create-template') }}" ><a href="{{ route('template.create-template') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>Create Template</a></li>
              </ul>
            </li>

            <li class="mm-dropdown mm-dropdown-root open"><a href="Javascript:void(0);"><i class="menu-icon fa fa-comments"></i><span>Broadcast Management</span></a>
              <ul>
                <li class="mmc-title">Broadcast Management</li>
                <li class="{{ isActiveRoute('broadcast.view-broadcast,broadcast.edit-broadcast,broadcast.broadcast-details') }}"><a href="{{ route('broadcast.view-broadcast') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>View Broadcast</a></li>
                <li class="{{ isActiveRoute('broadcast.create-broadcast') }}"><a href="{{ route('broadcast.create-broadcast') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>Create Broadcast</a></li>
              </ul>
            </li>

      			<li class="mm-dropdown mm-dropdown-root "><a href="Javascript:void(0);"><i class="menu-icon fa fa-bar-chart"></i><span>Broadcast Report</span></a>
              <ul>
                <li class="mmc-title">Broadcast Report</li>
                <li class="{{ isActiveRoute('broadcast.broadcast-summary,broadcast.broadcast-detail-report') }}"><a href="{{ route('broadcast.broadcast-summary') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>Broadcast Summary</a></li>
        				<li class="{{ isActiveRoute('broadcast.user-broadcast-detail,broadcast.user-broadcast-report') }}"><a href="{{ route('broadcast.user-broadcast-detail') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span>User Broadcast Detail</a></li>
        				<li class="{{ isActiveRoute('broadcast.detailed-report') }}"><a href="{{ route('broadcast.detailed-report') }}"><span class="dash"><i class="fa fa-angle-double-right"></i></span> Detailed Report</a></li>
              </ul>
            </li>
		
          </ul>
        </div>
      </div>
      <!-- //Left Nav -->
    </div>
	</div>
<div id="main-menu-bg"></div>