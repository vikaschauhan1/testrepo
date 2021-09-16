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
        <div class="pull-left mainico hide"><i class="fa fa-reply-all"></i></div>
		<h2 class="pull-left"><span>&nbsp;</span>Update Profile<br>
		<small>Update profile details, change password etc.</small>
		</h2>
		<ul class="breadcrumb breadcrumb-page pull-right">
        
        <li><a href="{{ route('broadcast.broadcast-summary') }}"><i class="fa fa-tachometer"></i>&nbsp;Dashboard</a></li>
        <li class="active">Update profile</li>
      </ul>
      </div>
      <div class="row">
		<div class="col-lg-12 col-md-12">
			<section class="box ">
            <header class="panel_header marginBottom">
                <h2 class="title pull-left">Update profile</h2>
                <div class="actions panel_actions pull-right">
                	<a href="{{ route('broadcast.broadcast-summary') }}" class="btn btn-md btn-primary"><i class="fa fa-long-arrow-left"></i>&nbsp;Back to Broadcast</a>
                </div>
            </header>
			<div class="content-body">
				
			<div class="row">
			<div class="col-sm-12 ccol-lg-12">
			<form class="form-horizontal marginbottom10 profile">
					
					<div class="col-md-4 col-lg-3 col-xs-12">
						<img src="images/user.jpeg" alt="" class="pimage">
						<h5>Ajit Kumar</h6>
						<h6>ajitk@accl-mobile.com</h6>
						<h6>9555803824</h6>
						<h6>192.168.2.34</h6>
					</div>
					<div class="col-md-8 col-lg-9 col-xs-12">
						<div class="row form-group">
							<label class="col-md-12 row nopadding">User Id</label>
							<input type="text" value="ajitk" disabled>
						</div>
						<div class="row form-group">
							<label class="col-md-12 row nopadding">Name</label>
							<input type="text" value="Ajit Kumar">
						</div>
						<div class="row form-group">
							<label class="col-md-12 row nopadding">Email </label>
							<input type="text" value="ajitk@accl-mobile.com" disabled>
						</div>
						<div class="row form-group">
							<label class="col-md-12 row nopadding">Mobile </label>
							<input type="text" value="9555803824">
						</div>
						<div class="row form-group">
							<label class="col-md-12 row nopadding">Current Ip </label>
							<input type="text" value="192.168.2.34" disabled>
						</div>
						<div class="row form-group">
							<label class="col-md-12 row nopadding">Current Password </label>
							<input type="password" value="212343212">
						</div>
						<div class="row form-group">
							<label class="col-md-12 row nopadding">New Password </label>
							<input type="password" value="">
						</div>
						<div class="row form-group">
							<label class="col-md-12 row nopadding">Confirm Password </label>
							<input type="password" value="">
						</div>
					</div>
			</form>
        </div>
    </div>
  </div>
		<footer>
					<div class="row">
							<div class="col-md-5"></div>
							<div class="col-md-7">
								<a class="btn btn-primary" onclick="new PNotify({
                                  title: 'Profile Updated',
                                  text: 'Profile updated successfully',
                                  type: 'success',
                                  styling: 'bootstrap3'
                              });"><i class="fa fa-floppy-o"></i>&nbsp;Update</a>
								<a class="btn btn-cancel" href="{{ route('broadcast.broadcast-summary') }}"><i class="fa fa-times-circle" ></i>&nbsp;Cancel</a>
							</div>
					</div>
	</footer>
  </section>
  <!-- //Right Content -->
</div>


</div>
<!-- //Body -->
<!-- Footer -->



@include('layouts.footer')
<!-- //Footer -->

