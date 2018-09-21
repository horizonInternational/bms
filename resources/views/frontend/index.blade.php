@extends('layouts.frontend')

@section('content')
    <div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
        <div class="fullscreenbanner">
            <ul>
                <!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
                <!-- FADE -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="300"><img
                            src="{{url('public/images/slider/rome.jpg')}}" alt=""/>
                    <div class="tp-caption scrolleffect sft"
                         data-x="center"
                         data-y="120"
                         data-speed="1000"
                         data-start="800"
                         data-easing="easeOutExpo"></div>
                </li>
                <!-- FADE -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="300"><img
                            src="{{url('public/images/slider/santorini.jpg')}}" alt=""/>
                    <div class="tp-caption scrolleffect sft"
                         data-x="center"
                         data-y="120"
                         data-speed="1000"
                         data-start="800"
                         data-easing="easeOutExpo"></div>
                </li>
                <!-- FADE -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="300"><img
                            src="{{url('public/images/slider/rome.jpg')}}" alt=""/>
                    <div class="tp-caption scrolleffect sft"
                         data-x="center"
                         data-y="120"
                         data-speed="1000"
                         data-start="800"
                         data-easing="easeOutExpo"></div>
                </li>
            </ul>
            <div class="tp-bannertimer none"></div>
        </div>
    </div>

    <script type="text/javascript">

        var tpj = jQuery;
        tpj.noConflict();

        tpj(document).ready(function () {

            if (tpj.fn.cssOriginal != undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            tpj('.fullscreenbanner').revolution(
                {
                    delay: 9000,
                    startwidth: 1170,
                    startheight: 600,

                    onHoverStop: "on",                      // Stop Banner Timet at Hover on Slide on/off

                    thumbWidth: 100,                            // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight: 50,
                    thumbAmount: 3,

                    hideThumbs: 0,
                    navigationType: "bullet",               // bullet, thumb, none
                    navigationArrows: "solo",               // nexttobullets, solo (old name verticalcentered), none

                    navigationStyle: false,             // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                    navigationHAlign: "left",               // Vertical Align top,center,bottom
                    navigationVAlign: "bottom",                 // Horizontal Align left,center,right
                    navigationHOffset: 30,
                    navigationVOffset: 30,

                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,

                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,

                    touchenabled: "on",                     // Enable Swipe Function : on/off


                    stopAtSlide: -1,                            // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                    stopAfterLoops: -1,                     // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                    hideCaptionAtLimit: 0,                  // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                    hideAllCaptionAtLilmit: 0,              // Hide all The Captions if Width of Browser is less then this value
                    hideSliderAtLimit: 0,                   // Hide the whole slider, and stop also functions if Width of Browser is less than this value


                    fullWidth: "on",                            // Same time only Enable FullScreen of FullWidth !!
                    fullScreen: "off",                      // Same time only Enable FullScreen of FullWidth !!


                    shadow: 0                               //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

                });


        });
    </script>

    <!-- WRAP -->
    <div class="wrap cstyle03">

        <div class="container mt-200 z-index100">
            <div class="row">
                <div class="col-md-4">
                    <div class="bs-example bs-example-tabs cstyle04">
                        <div class="tab-content" id="myTabContent">
                            <div id="air" class="tab-pane fade active in">

                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>From</b></span>
                                        <input type="text" class="form-control" placeholder="kathmandu">
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>To</b></span>
                                        <input type="text" class="form-control" placeholder="pokhara">
                                    </div>
                                </div>


                                <div class="clearfix"></div>
                                <br/>

                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Departing</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker3"
                                               placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>Returning</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker4"
                                               placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="room1 margtop15">
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>Day</b></span>
                                            <select class="form-control">
                                                <option>day</option>
                                                <option selected>night</option>
                                                <option>mornning</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                 <span class="opensans size13"><b>Time </b>
                 <select name="select" class="form-control ">
                   <option>today</option>
                   <option selected>tomorrow</option>
                   </select>
                </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End of 1st tab -->

                            <div id="hotel" class="tab-pane fade">

                                <span class="opensans size18">Where do you want to go?</span>
                                <input type="text" class="form-control" placeholder="Greece">

                                <br/>

                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Check in date</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker"
                                               placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>Check in date</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker2"
                                               placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="room1 margtop15">
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                            <div class="addroom1 block"><a href="#room2" onclick="addroom2()"
                                                                           class="grey">+
                                                    Add room</a></div>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft left">
                                                    <span class="opensans size13"><b>Adult</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option>1</option>
                                                        <option selected>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <span class="opensans size13"><b>Child</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option>0</option>
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="room2 none">
                                    <div class="clearfix"></div>
                                    <div class="line1"></div>
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                            <div class="addroom2 block grey"><a href="#" onclick="addroom3()"
                                                                                class="grey">+
                                                    Add room</a> | <a href="#" onclick="removeroom2()"
                                                                      class="orange"><img
                                                            src="images/delete.png" alt="delete"/></a></div>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft left">
                                                    <span class="opensans size13"><b>Adult</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option selected>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <span class="opensans size13"><b>Child</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option selected>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="room3 none">
                                    <div class="clearfix"></div>
                                    <div class="line1"></div>
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                            <div class="addroom3 block grey"><a href="#" onclick="addroom3()"
                                                                                class="grey">+
                                                    Add room</a> | <a href="#" onclick="removeroom3()"
                                                                      class="orange"><img
                                                            src="images/delete.png" alt="delete"/></a></div>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft left">
                                                    <span class="opensans size13"><b>Adult</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <span class="opensans size13"><b>Child</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option selected>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--End of 2nd tab -->

                            <div id="car" class="tab-pane fade">

                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Picking up</b></span>
                                        <input type="text" class="form-control" placeholder="Airport, address">
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>Dropping off</b></span>
                                        <input type="text" class="form-control" placeholder="Airport, address">
                                    </div>
                                </div>


                                <div class="clearfix"></div>
                                <br/>

                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Pick up date</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker5"
                                               placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>Hour</b></span>
                                        <select class="form-control mySelectBoxClass">
                                            <option>12:00 AM</option>
                                            <option>12:30 AM</option>
                                            <option>01:00 AM</option>
                                            <option>01:30 AM</option>
                                            <option>02:00 AM</option>
                                            <option>02:30 AM</option>
                                            <option>03:00 AM</option>
                                            <option>03:30 AM</option>
                                            <option>04:00 AM</option>
                                            <option>04:30 AM</option>
                                            <option>05:00 AM</option>
                                            <option>05:30 AM</option>
                                            <option>06:00 AM</option>
                                            <option>06:30 AM</option>
                                            <option>07:00 AM</option>
                                            <option>07:30 AM</option>
                                            <option>08:00 AM</option>
                                            <option>08:30 AM</option>
                                            <option>09:00 AM</option>
                                            <option>09:30 AM</option>
                                            <option>10:00 AM</option>
                                            <option selected>10:30 AM</option>
                                            <option>11:00 AM</option>
                                            <option>11:30 AM</option>
                                            <option>12:00 PM</option>
                                            <option>12:30 PM</option>
                                            <option>01:00 PM</option>
                                            <option>01:30 PM</option>
                                            <option>02:00 PM</option>
                                            <option>02:30 PM</option>
                                            <option>03:00 PM</option>
                                            <option>03:30 PM</option>
                                            <option>04:00 PM</option>
                                            <option>04:30 PM</option>
                                            <option>05:00 PM</option>
                                            <option>05:30 PM</option>
                                            <option>06:00 PM</option>
                                            <option>06:30 PM</option>
                                            <option>07:00 PM</option>
                                            <option>07:30 PM</option>
                                            <option>08:00 PM</option>
                                            <option>08:30 PM</option>
                                            <option>09:00 PM</option>
                                            <option>09:30 PM</option>
                                            <option>10:00 PM</option>
                                            <option>10:30 PM</option>
                                            <option>11:00 PM</option>
                                            <option>11:30 PM</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="room1 margtop15">
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>Drop off date</b></span>
                                            <input type="text" class="form-control mySelectCalendar" id="datepicker6"
                                                   placeholder="mm/dd/yyyy"/>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <span class="opensans size13"><b>Hour</b></span>
                                            <select class="form-control mySelectBoxClass">
                                                <option>12:00 AM</option>
                                                <option>12:30 AM</option>
                                                <option>01:00 AM</option>
                                                <option>01:30 AM</option>
                                                <option>02:00 AM</option>
                                                <option>02:30 AM</option>
                                                <option>03:00 AM</option>
                                                <option>03:30 AM</option>
                                                <option>04:00 AM</option>
                                                <option>04:30 AM</option>
                                                <option>05:00 AM</option>
                                                <option>05:30 AM</option>
                                                <option>06:00 AM</option>
                                                <option>06:30 AM</option>
                                                <option>07:00 AM</option>
                                                <option>07:30 AM</option>
                                                <option>08:00 AM</option>
                                                <option>08:30 AM</option>
                                                <option>09:00 AM</option>
                                                <option>09:30 AM</option>
                                                <option>10:00 AM</option>
                                                <option selected>10:30 AM</option>
                                                <option>11:00 AM</option>
                                                <option>11:30 AM</option>
                                                <option>12:00 PM</option>
                                                <option>12:30 PM</option>
                                                <option>01:00 PM</option>
                                                <option>01:30 PM</option>
                                                <option>02:00 PM</option>
                                                <option>02:30 PM</option>
                                                <option>03:00 PM</option>
                                                <option>03:30 PM</option>
                                                <option>04:00 PM</option>
                                                <option>04:30 PM</option>
                                                <option>05:00 PM</option>
                                                <option>05:30 PM</option>
                                                <option>06:00 PM</option>
                                                <option>06:30 PM</option>
                                                <option>07:00 PM</option>
                                                <option>07:30 PM</option>
                                                <option>08:00 PM</option>
                                                <option>08:30 PM</option>
                                                <option>09:00 PM</option>
                                                <option>09:30 PM</option>
                                                <option>10:00 PM</option>
                                                <option>10:30 PM</option>
                                                <option>11:00 PM</option>
                                                <option>11:30 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End of 3rd tab -->

                            <div id="vacations" class="tab-pane fade">

                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Flying from</b></span>
                                        <input type="text" class="form-control" placeholder="City or airport">
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>To</b></span>
                                        <input type="text" class="form-control" placeholder="City or airport">
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                                <br/>

                                <div class="w50percent">
                                    <div class="wh90percent textleft">
                                        <span class="opensans size13"><b>Check in date</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker7"
                                               placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="w50percentlast">
                                    <div class="wh90percent textleft right">
                                        <span class="opensans size13"><b>Check in date</b></span>
                                        <input type="text" class="form-control mySelectCalendar" id="datepicker8"
                                               placeholder="mm/dd/yyyy"/>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="room1 margtop15">
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                            <div class="addroom1 block"><a href="#room2" onclick="addroom2()"
                                                                           class="grey">+
                                                    Add room</a></div>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft left">
                                                    <span class="opensans size13"><b>Adult</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option>1</option>
                                                        <option selected>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <span class="opensans size13"><b>Child</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option>0</option>
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="room2 none">
                                    <div class="clearfix"></div>
                                    <div class="line1"></div>
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                            <div class="addroom2 block grey"><a href="#" onclick="addroom3()"
                                                                                class="grey">+
                                                    Add room</a> | <a href="#" onclick="removeroom2()"
                                                                      class="orange"><img
                                                            src="{{ url('public/images/delete.png')}}"
                                                            alt="delete"/></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft left">
                                                    <span class="opensans size13"><b>Adult</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option selected>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <span class="opensans size13"><b>Child</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option selected>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="room3 none">
                                    <div class="clearfix"></div>
                                    <div class="line1"></div>
                                    <div class="w50percent">
                                        <div class="wh90percent textleft">
                                            <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                            <div class="addroom3 block grey"><a href="#" onclick="addroom3()"
                                                                                class="grey">+
                                                    Add room</a> | <a href="#" onclick="removeroom3()"
                                                                      class="orange"><img
                                                            src="{{ url('public/images/delete.png')}}"
                                                            alt="delete"/></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="w50percentlast">
                                        <div class="wh90percent textleft right">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft left">
                                                    <span class="opensans size13"><b>Adult</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <span class="opensans size13"><b>Child</b></span>
                                                    <select class="form-control mySelectBoxClass">
                                                        <option selected>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--End of 4th tab -->
                        </div>

                        <div class="searchbg">
                            <form action="{{route('search')}}" method="get">
                                <button type="submit" class="btn-search">Search</button>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <div class="lastminute">
            <div class="container lmc">
                <img src="{{ url('public/images/rating-4.png')}}" alt=""/><br/>
                BUS BOOKING <b>OUR MOTO</b> Moving you in the right direction.

                <br/>

            </div>
        </div>
        <!-- END OF WRAP -->



@endsection