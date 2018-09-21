@include('branches.header')
<body id="top" class="thebg" >
<div class="navbar-wrapper2 navbar-fixed-top">
  <div class="container">
    <div class="navbar mtnav">
      <div class="container offset-3">
        <!-- Navigation-->
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
          <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ url('public/images/logo.png')}}" alt="BMS Logo" class="logo"/></a>
          </p>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <a href="{{route('home')}}" class="navbar-brand responsive">
              <p style="    margin: 0 72px 1px;
    border-buttom: 2px dotted #00a2e8;
    padding: 0px 0px 9px;">Support : 01- 4422283 , +977 980343434</p>
            </a>
            <li>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
            </li>
            <li>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Signup</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container breadcrub">
    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#" class="active">Profile</a></li>
				</ul>
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>

	<!-- CONTENT -->
	<div class="container">


  <div class="container mt25 offset-0">


			<!-- CONTENT -->
			<div class="col-md-12 pagecontainer2 offset-0">

				<!-- LEFT MENU -->
				<div class="col-md-1 offset-0">
					<!-- Nav tabs -->
					<ul class="nav profile-tabs">
					  <li class="active">
						<a href="#profile" data-toggle="tab">
						<span class="profile-icon"></span>
						Your profile
						</a></li>
					  <li></li>
					  <li></li>
					  <li></li>
					</ul>
				</div>
				<!-- LEFT MENU -->

				<!-- RIGHT CPNTENT -->
				<div class="col-md-11 offset-0">
					<!-- Tab panes from left menu -->
					<div class="tab-content5">

					  <!-- TAB 1 -->
					  <div class="tab-pane padding40 active" id="profile">

						  <!-- Admin top -->
					    <div class="col-md-3 offset-0">
							<img src="{{ url('public/images/about-man.jpg')}}" alt="" width="147" height="129" class="left margright20"/>
							<p class="size12 grey margtop10">
							Good <br/>
							<a href="#" class="lblue">Change picture</a>
							</p>
							<div class="clearfix"></div>
					    </div>
						  <!-- End of Admin top -->

						  <div class="row">
							<div class="col-md-3 grey">
								<span class="size16 bold dark">Personal Details</span>
								<div class="line2"></div>
								<p>&nbsp;</p>
								<p><a href="#" class="clblue">Name : Firstname Lastname<br>
							    Date of Birth : 1996/08/03<br>
							    Mobile no: 9803425025<br>
							    <br>
							    </a></p>
							</div>
							<div class="col-md-4">
								<span class="size16 bold dark">Others Details </span>
								<div class="line2"></div>
								Email : horizonwebhost@gmail.com
							</div>
							<div class="col-md-4">
								<span class="size16 bold dark">Your Past Bookings</span>
								<div class="line2"></div>
								<a href="#" class="clblue">Pokhara to Kathmandu </a> <span class="bold green"> Rs-1050/-</span><br/>
								<a href="#" class="clblue">Kathmandu to Pokhara: Rs-1050/-</a><span class="bold green"></span><br/>
							</div>
						</div>

						<div class="clearfix"></div>
						<p class="size16 bold">&nbsp;</p>
						<p class="size16 bold">	Update Details</p>
							  </p><div class="col-md-12 offset-0">
							    <table>
								<tr>
									<td>
										<div class="radio left">
										  <label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											Ms.
										  </label>
										</div>
									</td>
									<td>
										<div class="radio">
										  <label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											Mr.
										  </label>
										</div>
									</td>
								</tr>
						  </table>


							<br/>
							Name*:
							<input type="text" class="form-control" placeholder="John Doe" rel="popover" id="name" data-content="This field is mandatory" data-original-title="Here you can edit your name">
							<br/>
							Username*:
							<input type="text" class="form-control" placeholder="Jack" rel="popover" id="username" data-content="This field is mandatory" data-original-title="Here you can edit your username">
							<br/>
							E-mail*:
							<input type="text" class="form-control" placeholder="office@email.com" id="email" data-content="This field is mandatory" data-original-title="Edit your email address">
							<br/>
							Phone number:
							<input type="text" class="form-control" placeholder="">

							<br/>
							Birth date:<br/>
							<div class="row">
								<div class="col-md-4">
									<select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									</select>
								</div>
								<div class="col-md-4">
									<select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									</select>
								</div>
								<div class="col-md-4">
									<select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									</select>
								</div>
							</div>
							<br/>
						<br/>
                        <div class="center">  <a style="border:solid 3px ; padding: 10px;" href="#">Update</a></div>

						</div>
						<!-- END OF COL 1 -->

						<div class="clearfix"></div><br/><br/><br/>




					  </div>
					  <!-- END OF TAB 3 -->

					  <!-- TAB 4 -->
					  <div class="tab-pane" id="settings">
						<div class="padding40 dark"><span class="dark size18">Settings</span>
						  <div class="line4"></div>

							<span class="dark size14 bold">Notifications</span><br/>
							Change the way you recieve notifications.

							<div class="checkbox dark">
							  <label>
								<input type="checkbox" checked> Make my profile private
							  </label>
							</div>
							<div class="checkbox dark">
							  <label>
								<input type="checkbox"> Send an email when someone replyes to one of your comments.
							  </label>
							</div>

							<br/>
							<br/>



							<br/>
							<br/>
							<br/>

							<span class="dark size14 bold">Payments</span><br/>
							<div class="checkbox dark">
							  <label>
								<input type="checkbox" checked> Auto Payment
							  </label>
							</div>

							<br/>
							<br/>

							<span class="dark size14 bold">Credit Card Details</span>
							<div class="line4"></div>
							<br/>
							Card Type<br/>
							<select class="form-control mySelectBoxClass hasCustomSelect cpwidth">
							  <option value="">Visa</option>
							  <option value="">MasterCard</option>
							  <option value="">Discover</option>
							  <option value="">American Express</option>
							</select>
							<br/>
							<br/>
							Card Number<br/>
							<input type="text" class="form-control" placeholder="XXXX-XXXX-XXXX-XXX">
							<br/>
							Expiry date<br/>
							<select class="form-control mySelectBoxClass hasCustomSelect cpwidth2">
							  <option value="">01</option>
							  <option value="">02</option>
							  <option value="">03</option>
							  <option value="">04</option>
							  <option value="">05</option>
							  <option value="">06</option>
							  <option value="">07</option>
							  <option value="">08</option>
							  <option value="">09</option>
							  <option value="">10</option>
							  <option value="">11</option>
							  <option value="">12</option>
							</select>
							/
							<select class="form-control mySelectBoxClass hasCustomSelect cpwidth2">
							  <option value="">2013</option>
							  <option value="">2014</option>
							  <option value="">2015</option>
							  <option value="">2016</option>
							  <option value="">2017</option>
							  <option value="">2018</option>

							</select>

							<br/>
							CVV<br/>
							<input type="text" class="form-control cpwidth2" placeholder="">
							<br/>
							<br/>

							<button type="submit" class="btn-search5">Save changes</button>




						</div>
					  </div>
					  <!-- END OF TAB 4 -->

					  <!-- TAB 5 -->

					  <!-- END OF TAB 5 -->

					  <!-- TAB 6 -->
					  <div class="tab-pane" id="password">
						<div class="padding40">

							<span class="dark size18">Change password</span>
							<div class="line4"></div>

							Username<br/>
							<input type="text" class="form-control " placeholder="">
							<br/>
							Old Password<br/>
							<input type="text" class="form-control " placeholder="">
							<br/>
							New Password<br/>
							<input type="text" class="form-control " placeholder="">
							<br/>
							<button type="submit" class="btn-search5">Save changes</button>

							<br/>
							<br/>
							<br/>
							<span class="dark size18">Security</span>
							<div class="line4"></div>

							What is your father's middle name?
							<input type="password" class="form-control " placeholder="●●●●●●●●●">

							<br/>
							Please choose a security question<br/>
							<select class="form-control mySelectBoxClass hasCustomSelect cpwidth3">
							  <option value="">What is your father's middle name?</option>
							  <option value="">What was the name of your first pet</option>
							  <option value="">What was your first telephone number</option>
							</select>

							<br/>
							<br/>
							Please enter an answer<br/>
							<input type="text" class="form-control " placeholder="">

							<br/>
							 Please confirm your answer<br/>
							<input type="text" class="form-control " placeholder="">
							<br/>
							<button type="submit" class="btn-search5">Save changes</button>

						</div>
					  </div>
					  <!-- END OF TAB 6 -->

					  <!-- TAB 7 -->
					  <div class="tab-pane" id="newsletter">
						<div class="padding40">

							<span class="dark size18">Newsletter</span>
							<div class="line4"></div>

							<div class="checkbox dark">
							  <label>
								<input type="checkbox" checked> Check this box to receive a monthly newsletter
							  </label>
							</div>

							<br/>
							<button type="submit" class="btn-search5">Save changes</button>

						</div>
					  </div>
					  <!-- END OF TAB 7 -->




					</div>
					<!-- End of Tab panes from left menu -->

				</div>
				<!-- END OF RIGHT CPNTENT -->

			<div class="clearfix"></div><br/><br/>
			</div>
			<!-- END CONTENT -->



	  </div>


	</div>
	<!-- END OF CONTENT -->




	<!-- FOOTER -->

	<div class="footerbg3black">
  <div class="container center grey">
		<a href="#" class="social1"><img src="{{ url('public/images/icon-facebook.png')}}" alt=""/></a>
						<a href="#" class="social2"><img src="{{ url('public/images/icon-twitter.png')}}" alt=""/></a>
						<a href="#" class="social3"><img src="{{ url('public/images/icon-gplus.png')}}" alt=""/></a>
						<a href="#" class="social4"><img src="{{ url('public/images/icon-youtube.png')}}" alt=""/></a>
						<br/><br/>
						Copyright &copy; 2018 <a href="#">Newbms</a> All rights reserved. <a href="http://horizonwbhost.com/">Devloped by horizonwebhost</a>
						<br/><br/>
						<a href="#top" id="gotop2" class="gotop"><img src="{{ url('public/images/spacer.png')}}" alt=""/></a>
	</div>

@include('branches.footer')
