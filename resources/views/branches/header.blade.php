<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Horizonwebhost">
    <meta name="keyword" content="suraj,lekhnath, holiday, horizon, web, host">
    <title>Horizonwebhost- @yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{url('public/frontend/assets/images/favicon.ico')}}">

    <!-- Google Fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Amaranth:400,700|Poppins:300,400,600,700" rel="stylesheet">

    <link href="{{ url('public/frontend/css/plugins.min.css') }}" rel="stylesheet">

    <link href="{{ url('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href=" {{ url('public/frontend/css/jquery-ui.css') }}" > -->


    <!-- Bootstrap -->
    <link href="{{url('public/bms/dist/css/bootstrap.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('public/bms/assets/css/custom.css')}}" rel="stylesheet" media="screen">

    <!-- Carousel -->
    <link href="{{url('public/bms/examples/carousel/carousel.css')}}" rel="stylesheet">


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet'
          type='text/css'>
    <!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="{{url('public/bms/assets/css/font-awesome.css')}}" media="screen"/>
    <!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-ie7.css" media="screen"/><![endif]-->

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/bms/css/fullscreen.css')}}" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{url('public/bms/rs-plugin/css/settings.css')}}" media="screen"/>

    <!-- Picker UI-->
    <link rel="stylesheet" href="{{url('public/bms/assets/css/jquery-ui.css')}}"/>

    <!-- jQuery -->
    <script src="{{url('public/bms/assets/js/jquery.v2.0.3.js')}}"></script>
    <link href="{{ url('public/bms/updates/update1/css/style01.css')}}" rel="stylesheet" media="screen">


    <!-- Bootstrap -->
    <link href="{{url('public/bms/dist/css/bootstrap.css')}}" rel="stylesheet" media="screen">
    <link href="{{url('public/bms/assets/css/custom.css')}}" rel="stylesheet" media="screen">

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
            type="text/javascript"></script>


    <link rel="stylesheet" href="{{ url('public/bms/bus/css/style.css')}}">
    <!--bus-->

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet'
          type='text/css'>


    <link href="{{url('public/bms/examples/carousel/carousel.css')}}" rel="stylesheet">
    <
    <!-- Animo css-->
    <link href="{{url('public/bms/plugins/animo/animate%2banimo.css')}}" rel="stylesheet" media="screen">

    <!-- Picker -->
    <link rel="stylesheet" href="{{url('public/bms/assets/css/jquery-ui.css')}}"/>

    <!-- jQuery -->
    <script src="{{url('public/bms/assets/js/jquery.v2.0.3.js')}}"></script>

<body id="top">
<!-- Top Bar -->
<div id="top-bar" class="top-bar-section top-bar-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- Top Contact -->
                <div class="top-contact link-hover-black">
                    <a href="#">
                        <i class="fa fa-phone"></i>
                        + 977-9875648957
                    </a>
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        bms@info.com
                    </a>
                </div>
                <!-- Top Social Icon -->
                <div class="top-social-icon icons-hover-black">
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-github"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar -->

<!-- Top wrapper -->
<div class="navbar-wrapper2 navbar-fixed-top">
    <div class="container">
        <div class="navbar mtnav">
            <div class="container offset-3">
                <!-- Navigation-->
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a href="{{route('home')}}" class="navbar-brand"><img src="{{ url('public/images/logo.png')}}"
                                                                          alt="BMS Logo" class="logo"/></a>
                    </p>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="{{route('home')}}" class="navbar-brand responsive">
                            <p style="    margin: 0 72px 1px;
   border-buttom: 2px dotted #00a2e8;
   padding: 0px 0px 9px;">Support : 01- 4422283 , +977 980343434</p>
                        </a>
                        @if(Auth::user() && Auth::user()->user_type=='traveller')
                            <li>
                                <button type="button" class="btn btn-info btn-lg"
                                      >My Accout
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-info btn-lg"
                                        ><a href="{{route('userLogout')}}">Logout</a>
                                </button>
                            </li>
                        @else
                        <li>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                    data-target="#myModal">Login
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                    data-target="#myModal2">Signup
                            </button>
                        </li>
                            @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Top wrapper -->
<!-- END OF WRAP -->
<center>
    <!-- Login Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <img src="{{url('public/bms/images/logo.png')}}"/>
                    <h4 class="modal-title" style="padding-top: 20px;color: #0db53b;">Login</h4>
                </div>
                <div class="modal-body">
                    <form role="form" class="form-horizontal" action="{{ route('loginUser')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="email"  class="col-sm-2 control-label">
                                Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" required="" id="email1" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" required="" minlength="8"
                                       id="exampleInputPassword1" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Submit
                                </button>
                                <a href="javascript:;">Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Login Modal End-->
</center>
<!--SignUp Modal-->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img src="images/logo.png"/>
                <h4 class="modal-title" style="padding-top: 10px;color: #0db53b;">Signup</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal" action="{{route('registerUser')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="rad" class="col-sm-3 control-label">
                            User</label>
                        <div class="col-sm-3">
                            <input type="radio" name="rad" class="form-control" required="" id="rad"/>
                        </div>
                        <label for="rad2" class="col-sm-3 control-label">
                            Vendor</label>
                        <div class="col-sm-3">
                            <input type="radio" name="rad" class="form-control" required="" id="rad"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">
                            Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required id="fname" placeholder=" Name"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email"  class="col-sm-3 control-label">
                            Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" required="" id="email1" placeholder="Email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="col-sm-3 control-label">
                            Password</label>
                        <div class="col-sm-9">
                            <input type="Password" name="password" class="form-control" minlength="8" required=""
                                   id="exampleInputPassword1" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rpass" class="col-sm-3 control-label">
                            Re-Password</label>
                        <div class="col-sm-9">
                            <input type="Password" name="retype_password" class="form-control" minlength="8" required="" id="rpass"
                                   placeholder="Re-Password"/>
                        </div>
                    </div>

                    <div class="row" style="margin-right: -796px;">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Register
                            </button>
                            <a href="index.html#myModal">Already have account?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
