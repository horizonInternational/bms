@extends('layouts.frontend')
@section('content')

<br>
<br>
<h1 style="    text-align: center;
margin: 0px 0 -6px -119px;"><span class="glyphicons glyphicons-arrow-down"></span></h1>

<div class="page-content">
  <div class="container">
    <div class="row">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <ul class="sidebar-filter__list">
              <li class="sidebar-filter__item">
                <div class="collapse show" id="price">
                  <label class="custom-control custom-checkbox">

                    <form>
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;"><br>
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">
                      <input type="checkbox" name="" style="border: solid 1px red; width:45px; height:30px;">

                    </form>
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <ul class="sidebar-filter__list">
          <li class="sidebar-filter__item">
            <div class="collapse show" id="price">
              <label class="custom-control custom-checkbox">
                <form>

                 <div class="span3" id="boarding_dropoff_details_in_search_results">
                  <style>
                  .normal_text, .placeholder_text{width:110px;font-weight:lighter;font-size:12px;font-family:Arial,sans-serif;font-style:italic;}
                  .blueTextNormal {
                    color: #305AA0;
                    outline: medium none;
                    font-size:10px;
                    font-weight:normal;
                    font-family: Arial,Helvetica,sans-serif;
                    cursor: pointer;     
                  }
                  #view_link{text-decoration: underline}
                  #view_link:hover  { text-decoration:none}
                  .rtAdd {
                    background: no-repeat scroll 5px 6px #F2F2F2;
                    border-color: #D9D9D9;
                    border-style: solid;
                    border-width: 1px 0;
                    color: #7F7F7F;
                    font-size: 10px;
                    padding: 4px 3px 4px 20px;
                  }
                </style>

                <div class="form-inline" style="" id="boarding_stage_info"> 
                  <div>
                    <label class="control-label" for="searchbus_boarding_at">Boarding At</label>
                    <select name="searchbus[boarding_at]" id="searchbus_boarding_at" onchange="showStagelandmark(this.value, '', {&quot;47&quot;:&quot;Dharan drive Over,Kathmandu\u003cbr /\u003e\u003cp style='white-space: normal;'\u003ePh: 9216479079 9216491091\u003cbr /\u003e\u003c/p\u003e&quot;}, 'boarding_help_text');" style="width: 216px; display: none;" class="select-box chosen-select" tabindex="-1"><option value="47">Kathmandu - 11:55 PM - </option></select><div class="chosen-container chosen-container-single" style="width: 220px;" title="" id="searchbus_boarding_at_chosen"><a class="chosen-single" tabindex="-1"><span>Kathmandu - 11:55 PM - </span><div><b></b></div></a><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>

                    <span class="help-block"> <span class="pull-left" id="icon_boarding_help_text" style=""><i class="icofont-map-marker"></i></span><span style="" id="searchbus_boarding_help_text" class="boarding_dropoff_help">Dharan drive Over,Kathmandu<br></span><span class="clearfix"></span></span>
                  </div>
                  <div>
                    <label class="control-label" for="searchbus_drop_off">Drop Off</label>
                    <select name="searchbus[drop_off]" id="searchbus_drop_off" onchange="showStagelandmark(this.value, '', {&quot;44&quot;:&quot;Dharan drive\u003cbr /\u003e\u003cp style='white-space: normal;'\u003ePh: 9216479079 9216491091\u003cbr /\u003e\u003c/p\u003e&quot;}, 'drop_off_help_text');" style="width: 216px; display: none;" class="select-box gdsEventListener chosen-select" tabindex="-1"><option value="44">Dharan</option></select><div class="chosen-container chosen-container-single" style="width: 220px;" title="" id="searchbus_drop_off_chosen"><a class="chosen-single" tabindex="-1"><span>Dharan</span><div><b></b></div></a><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>

                    <span class="help-block"> <span class="pull-left" id="icon_drop_off_help_text" style=""><i class="icofont-pushpin"></i></span><span style="" id="searchbus_drop_off_help_text" class="boarding_dropoff_help">Dharan drive<br></span><span class="clearfix"></span></span>
                  </div>
                </div>
                <div id="onward_fare_details_div" style="" class="form-horizontal">
                  <!-- For Seats -->
                  <div class="control-group mbottom0">
                    <label class="control-label">Seats: 2 </label>
                    <div class="controls controls-margin">
                      <span id="selected_seats_span" class="bold" style="display:none;"></span>
                      <span id="selected_seats_div" class="bold"></span>
                    </div>
                  </div>
                  <div class="control-group mbottom0">
                    <label class="control-label">No. of Seat(s): 2 </label>
                    <div class="controls controls-margin">
                      <span id="selected_seats_count_span" class="bold"></span>
                    </div>
                  </div>

                  <div class="control-group mbottom0">
                    <label class="control-label">Discount:</label>
                    <div class="controls controls-margin">
                      <span id="ticket_discount_amount" style="" class="bold"></span>
                      <span id="ticket_discount_amount_locale" style="display:none" class="bold"></span>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="ticket_net_amount">Net Total: 3000/-
                    </label>
                  </div>   
                </div>
                <div>
                  <a href="{{route('booking')}}" class="btn btn-info pull-right bttn_width " style="border-radius:0px;color:#ffffff;" title="Book Passenger Tickets">Continue</a>
                </div>
              </div>
            </form>
          </label>
        </div>
      </li>
    </ul>
  </div>  
</div>
  </div>
</div>

@endsection