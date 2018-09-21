@extends('layouts.frontend')
@section('content')
<body id="top" class="thebg">
<div class="navbar-wrapper2 navbar-fixed-top">
    <div class="container">
        <div class="navbar mtnav">
            <div class="container offset-3">
                <!-- Navigation-->
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a href="r{{ route('home') }}" class="navbar-brand"><img src="{{ url('public/images/logo.png')}}"
                                                                             alt="Travel Agency Logo" class="logo"/></a>
                    </p>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <a href="index.html" class="navbar-brand responsive">
                            <p style="    margin: 0 72px 1px;
    border-buttom: 2px dotted #00a2e8;
    padding: 0px 0px 9px;">Support : 01- 4422283 , +977 980343434</p>
                        </a>
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
                <li><a href="#">kathmandu</a></li>
                <li>/</li>
                <li><a href="#">pokhara</a></li>
            </ul>
        </div>
        <a class="backbtn right" href="#"></a>
    </div>
    <div class="clearfix"></div>
    <div class="brlines"></div>
</div>

<!-- CONTENT -->
<div class="container">
    <div class="container pagecontainer offset-0">

        <!-- FLIGHTS GRID -->
        <div class="flightsgrid">


            <!-- Carousel -->
            <div class="flights_wrapper" style="display: none;">
                <div class="flights_list_carousel">
                    <div class="fconnection">All Available Buses</div>
                    <ul id="flightsfoo">
                        <li class="fl1">
                            <ul class="ftable">
                                <li class="fch"><img src="{{ url('public/bms/updates/update1/img/logo1.png')}}" alt=""
                                                     width="49" height="34"></li>
                                <li>Ba 81 3390</li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 71 kha 3302</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 33 pa 9960</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ga 3 pa 8890</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">KO 45 ga 7765</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ra 67 pa 2234</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Na 23 kha 323</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ja 12 ga 4554</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 33 pa 6642/a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Na 47pa 3356</a></li>
                            </ul>
                        </li>
                        <li class="fl1">
                            <ul class="ftable">
                                <li class="fch"><img src="{{ url('public/bms/updates/update1/img/logo2.png')}}" alt=""
                                                     width="56" height="50"></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 34 ja 4789</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">ka 56 ga 6867</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 21 pa 3660</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">ko 42 pa 5750</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 19 pa 2120</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 27 pa 1380 </a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 37 ga 2346</a></li>
                            </ul>
                        </li>
                        <li class="fl1" width="126" height="79">
                            <ul class="ftable">
                                <li class="fch"><img src="{{ url('public/bms/updates/update1/img/logo3.png')}}" alt=""
                                                     width="51" height="47"></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ja 11 pa 2334</a></li>
                                <li><a href="#ticketid0124" class="fscrollto">Ma 29 pa 4572</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">Ba 73 pa 3370</a></li>
                                <li><a href="#ticketid0123" class="fscrollto">sa 66 pa 1234</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <a id="flightsprev_btn" class="flightsprev" href="#"><img src="{{ url('public/images/spacer.png')}}"
                                                                              alt=""/></a>
                    <a id="flightsnext_btn" class="flightsnext" href="#"><img src="{{ url('public/images/spacer.png')}}"
                                                                              alt=""/></a>
                </div>
            </div>


            <div class="clearfix"></div>

        </div>
        <!-- /FLIGHTS GRID -->

        <div class="flightsgridmore" style="display: none;">
            <a href="#" onclick="addflights()">More</a> <span class="farrow-btm"></span>
            <span class="farrow-top"></span> <a href="#" onclick="removeflights()">Less</a>
        </div>


        <div class="clearfix"></div>


        <!-- <div class="rightcontent col-md-12 offset-0"> -->
        <div class="itemscontainer" style="padding: 0">

            <div class="col-md-12 pagecontainer2" style="padding: 0px">

                <ul class="nav nav-tabs" id="myTab" style="display: none;">
                    <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#preferences">DELUXE<br>
                            VIEW DETAILS
                            &nbsp;</a></li>
                    <li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#preferences"><span
                                    class="hidetext">HICE<br>
                                        VIEW DETAILS
                                </span></a></li>
                    <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#preferences"><span
                                    class="hidetext">CAR<br>
                                        VIEW DETAILS
                                </span>&nbsp;</a></li>
                    <li onclick="loadScript()" class=""><a data-toggle="tab" href="#preferences"><span class="hidetext">TOURIST BUS<br>
                                        VIEW DETAILS
                                </span>&nbsp;</a></li>

                    <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#preferences">MMOUNT MAKALU<br>
                            VIEW DETAILS
                            <span class="hidetext"></span>&nbsp;</a></li>

                    <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#preferences">A /C<br>
                            SEE ALL
                            <span class="hidetext"></span>&nbsp;</a></li>

                </ul>
                <br>
                <br>

                <div id="ticketid0123" class="offset-2">
                    <div class="fblueline"><b>Kathmandu to pokhara available bus</b></div>


                    <!-- GOING TICKET-->
                    <div class="frow1">
                        <ul class="flightstable mt20">
                            <li class="ft1">
                                <p><br>
                                    BUS NUMBER : BA 1 .1424</p>
                            </li>
                            <li class="ft2">
                                <div class="radio radiomargin0">
                                    <label>
                                        <input type="radio" checked="" value="option1" id="optionsRadios1"
                                               name="optionsFradios">
                                        Departure
                                    </label>
                                </div>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">14:00</span><br/>
                            </li>
                            <li class="ft3">
                                Arrival<br/>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">17:45</span><br/>
                            </li>
                            <li class="ft4">PRICE<br/>
                                <span class="grey">TOTAL : NRP : 1050 /-</span><br/>
                            </li>
                            <li class="ft5">
                                <button class="lightbtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse10">More
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>
                    </div>

                    <div class="collapse frowexpand" id="collapse10">

                        <ul class="flightstable mt20">
                            <li class="ft1">

                            </li>
                            <li class="ft2">
                                Duration<br/>
                                <span class="grey">Economy</span><br/>
                                <b>5 h 45 min</b><br/>
                            </li>
                            <li class="ft3">
                                Connections<br/>
                                <span class="grey">Frankfurt, Germany</span><br/>
                                <b>1 h 25 min</b><br/>
                            </li>
                            <li class="ft4">
                                Seats left<br/><br/>
                                <b>6</b>
                            </li>
                            <li class="ft5">
                                <button class="hidebtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse10"><a href="{{ route('booking')}}">BOOK</a></button>

                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>

                    </div>


                    <div class="frow2">


                        <ul class="flightstable mt20">
                            <li class="ft1">


                                BUS NUMBER : BA 1 .1424
                            </li>
                            <li class="ft2">
                                <div class="radio radiomargin0">
                                    <label>
                                        <input type="radio" value="option1" id="optionsRadios1" name="optionsFradios">
                                        Departure
                                    </label>
                                </div>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">14:00</span><br/>
                            </li>
                            <li class="ft3">
                                Arrival<br/>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">17:45</span><br/>
                            </li>
                            <li class="ft4">PRICE<br/>
                                <span class="grey">TOTAL : NRP : 1050 /-</span><br/>
                            </li>
                            <li class="ft5">
                                <button class="lightbtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse11">More
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>


                    </div>
                    <div class="collapse frowexpand" id="collapse11">

                        <ul class="flightstable mt20">
                            <li class="ft1">

                            </li>
                            <li class="ft2">
                                Duration<br/>
                                <span class="grey">Economy</span><br/>
                                <b>5 h 45 min</b><br/>
                            </li>
                            <li class="ft3">
                                Connections<br/>
                                <span class="grey">Frankfurt, Germany</span><br/>
                                <b>1 h 25 min</b><br/>
                            </li>
                            <li class="ft4">
                                Seats left<br/><br/>
                                <b>6</b>
                            </li>
                            <li class="ft5">
                                <button class="hidebtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse11"><a href="payment.html">BOOK</a></button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>

                    </div>
                    <!-- END OF GOING TICKET-->

                    <div class="fgreenline"><b>pokhara related bus</b></div>

                    <!-- RETURNING TICKET-->
                    <div class="frow2">
                        <ul class="flightstable mt20">
                            <li class="ft1"><br>
                                BUS NUMBER : BA 1 .1424
                            </li>
                            <li class="ft2">
                                <div class="radio radiomargin0">
                                    <label>
                                        <input type="radio" value="option1" id="optionsRadios2" name="optionsFradios">
                                        Departure </label>
                                </div>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">14:00</span><br/>
                            </li>
                            <li class="ft3"> Arrival<br/>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">17:45</span><br/>
                            </li>
                            <li class="ft4">PRICE<br/>
                                <span class="grey">TOTAL : NRP : 1050 /-</span><br/>
                            </li>
                            <li class="ft5">
                                <button class="lightbtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse11">More
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>

                    </div>
                    <div class="collapse frowexpand" id="collapse12">

                        <ul class="flightstable mt20">
                            <li class="ft1">

                            </li>
                            <li class="ft2">
                                Duration<br/>
                                <span class="grey">Economy</span><br/>
                                <b>5 h 45 min</b><br/>
                            </li>
                            <li class="ft3">
                                Connections<br/>
                                <span class="grey">Frankfurt, Germany</span><br/>
                                <b>1 h 25 min</b><br/>
                            </li>
                            <li class="ft4">
                                Seats left<br/><br/>
                                <b>6</b>
                            </li>
                            <li class="ft5">
                                <button class="hidebtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse12"><a href="payment.html">BOOK</a></button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>


                        <div class="clearfix"></div>
                    </div>
                    <!-- END OF RETURNING TICKET -->


                    <div class="fselect"></div>
                </div>
                <!-- END OF FLIGHT TICKET-->


                <!-- FLIGHT TICKET-->
                <div id="ticketid0124" class="offset-2 margtop40">
                    <div class="fblueline"></div>

                    <!-- GOING TICKET-->
                    <div class="frow1">
                        <ul class="flightstable mt20">
                            <li class="ft1"><br>
                                BUS NUMBER : BA 1 .1424
                            </li>
                            <li class="ft2">
                                <div class="radio radiomargin0">
                                    <label>
                                        <input type="radio" value="option1" id="optionsRadios3" name="optionsFradios">
                                        Departure </label>
                                </div>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">14:00</span><br/>
                            </li>
                            <li class="ft3"> Arrival<br/>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">17:45</span><br/>
                            </li>
                            <li class="ft4">PRICE<br/>
                                <span class="grey">TOTAL : NRP : 1050 /-</span><br/>
                            </li>
                            <li class="ft5">
                                <button class="lightbtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse11">More
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>

                    </div>
                    <div class="collapse in frowexpand" id="collapse13">
                        <ul class="flightstable mt20">
                            <li class="ft1"><br>
                                BUS NUMBER : BA 1 .1424
                            </li>
                            <li class="ft2">
                                <div class="radio radiomargin0">
                                    <label>
                                        <input type="radio" value="option1" id="optionsRadios5" name="optionsFradios">
                                        Departure </label>
                                </div>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">14:00</span><br/>
                            </li>
                            <li class="ft3"> Arrival<br/>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">17:45</span><br/>
                            </li>
                            <li class="ft4">PRICE<br/>
                                <span class="grey">TOTAL : NRP : 1050 /-</span><br/>
                            </li>
                            <li class="ft5">
                                <button class="lightbtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse11">More
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>


                        <div class="clearfix"></div>
                    </div>

                    <!-- END OF GOING TICKET-->

                    <div class="fgreenline"><b>pokhara related bus </b></div>

                    <!-- RETURNING TICKET-->
                    <div class="frow2">
                        <ul class="flightstable mt20">
                            <li class="ft1"><br>
                                BUS NUMBER : BA 1 .1424
                            </li>
                            <li class="ft2">
                                <div class="radio radiomargin0">
                                    <label>
                                        <input type="radio" value="option1" id="optionsRadios4" name="optionsFradios">
                                        Departure </label>
                                </div>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">14:00</span><br/>
                            </li>
                            <li class="ft3"> Arrival<br/>
                                <span class="grey">3 February, Mon</span><br/>
                                <span class="size16 dark bold">17:45</span><br/>
                            </li>
                            <li class="ft4">PRICE<br/>
                                <span class="grey">TOTAL : NRP : 1050 /-</span><br/>
                            </li>
                            <li class="ft5">
                                <button class="lightbtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse11">More
                                </button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>

                    </div>
                    <div class="collapse frowexpand" id="collapse14">


                        <ul class="flightstable mt20">
                            <li class="ft1">

                            </li>
                            <li class="ft2">
                                Duration<br/>
                                <span class="grey">Economy</span><br/>
                                <b>5 h 45 min</b><br/>
                            </li>
                            <li class="ft3">
                                Connections<br/>
                                <span class="grey">Frankfurt, Germany</span><br/>
                                <b>1 h 25 min</b><br/>
                            </li>
                            <li class="ft4">
                                Seats left<br/><br/>
                                <b>6</b>
                            </li>
                            <li class="ft5">
                                <button class="hidebtn mt1" type="button" data-toggle="collapse"
                                        data-target="#collapse14"><a href="payment.html">BOOK</a></button>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <br/><br/>


                        <div class="clearfix"></div>
                    </div>
                    <!-- END OF RETURNING TICKET -->


                </div>
                <!-- END OF FLIGHT TICKET-->


                <!-- FLIGHT TICKET-->

                <!-- End of offset1-->


            </div>
            <!-- END OF LIST CONTENT-->


        </div>
        <!-- END OF container-->

    </div>

@endsection

