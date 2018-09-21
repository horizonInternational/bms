@extends('layouts.frontend')
@section('content')
<main class="page-main">
  <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="under" href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><span>Result</span></li>
      </ol>
    </div>
  </nav>
  <div class="page-content">
    <div class="container">
      <div class="row">
        <aside class="sidebar col-lg-3 order-1 order-lg-0">
          <div class="sidebar__content js-sticky-top">
            <div class="sidebar-filter modal card fade" id="sidebarFilter" tabindex="-1" role="dialog">
              <button class="btn-toggle btn btn-light" type="button" data-dismiss="modal"><span class="icon-bar"></span></button>
              <div class="modal-header bg-primary text-white">
                <h4 class="modal-title justify-content-center justify-content-lg-between border-bottom-0"><span class="search-result mr-3">869 out of 1100</span>
                  <button class="clear pointer" type="button"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510"><path d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm127.5 346.8l-35.7 35.7-91.8-91.8-91.8 91.8-35.7-35.7 91.8-91.8-91.8-91.8 35.7-35.7 91.8 91.8 91.8-91.8 35.7 35.7-91.8 91.8 91.8 91.8z"/></svg></i></button>
                </h4>
              </div>


              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <ul class="sidebar-filter">
                      <li class="sidebar-filter__item border-bottom-0">

                        <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#sorting" data-toggle="collapse" role="button"><span>Sorting</span></a></h5>
                        <div class="form-group"><span class="form-select">
                          <select class="form-control select2 js-form-select" id="searchFlightType" name="flight_type">
                            <option value="Price (Lowest)">Price (Lowest)</option>
                            <option value="Price (Highest)">Price (Highest)</option>
                            <option value="Duration (Shortest)">Duration (Shortest)</option>
                            <option value="Duration (Longest)">Duration (Longest)</option>
                            <option value="Departure (Earliest)">Departure (Earliest)</option>
                            <option value="Departure (Earliest)">Departure (Earliest)</option>
                            <option value="Departure (Latest)">Departure (Latest)</option>
                            <option value="Arrival (Earliest)">Arrival (Earliest)</option>
                            <option value="Arrival (Latest)">Arrival (Latest)</option>
                          </select></span>
                        </div>
                      </li>
                      <li class="sidebar-filter__item">
                        <h5 class="sidebar-filter__title"><a class="sidebar-filter__toggle d-flex justify-content-between align-items-center" href="#price" data-toggle="collapse" role="button"><span>Price range</span><i class="fa fa-angle-down"></i></a></h5>
                        <div class="collapse show" id="price">
                          <div class="sidebar-filter__content">
                            <label class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">0 - 99 -</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">100 - 299 -</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">300 - 599 -</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">600 - 999-</span>
                            </label>
                            <label class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox"/><span class="custom-control-label pointer">1000 - +</span>
                            </label>
                          </div>
                        </div>
                      </li>
                      
                    
                    
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <div class="col-lg-9">

          <div class="row">

            <div class="list-flight-item col-12">
              <div class="flight-card card"  style="margin-bottom: -30px; color:#1dc6c8; background: #1dc6c8;">
                <div class="row align-items-center flex-md-nowrap">
                  <div class="flight-card__row col-12 col-md text-center px-md-0" >
                    <div class="list-group list-group-flush flex-nowrap flex-md-row m-0">
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">A/C</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">Deluxe</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">Normal</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">Hice</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">Car</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">Seats</div>
                        </div>
                      </div>
                    </div>


                  </div>

                </div>
              </div>
            </div>


            <div class="list-flight-item col-12">
              <div class="flight-card card">
                <div class="row align-items-center flex-md-nowrap">
                  <div class="flight-card__row col-12 col-md text-center px-md-0">
                    <div class="list-group list-group-flush flex-nowrap flex-md-row m-0">
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">Bus</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">Departure</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">Destination</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">Shift</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">Day</div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                  <div class="flight-card__total list-group list-group-flush col-12 col-md-auto">
                    <div class="list-group-item text-center p-md-0">
                      <div class="row justify-content-center align-items-center flex-md-column">

                        <div class="col-7 col-md-12"><a class="btn btn-secondary btn--round" href="{{route('showSeat')}}" role="button">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                   <div class="list-flight-item col-12">
              <div class="flight-card card">
                <div class="row align-items-center flex-md-nowrap">
                  <div class="flight-card__row col-12 col-md text-center px-md-0">
                    <div class="list-group list-group-flush flex-nowrap flex-md-row m-0">
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="col-7 col-md-12 fz-mdall">BA 90 1212</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">8:20am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10pm</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">08:10pm</div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                  <div class="flight-card__total list-group list-group-flush col-12 col-md-auto">
                    <div class="list-group-item text-center p-md-0">
                      <div class="row justify-content-center align-items-center flex-md-column">
                     
                        <div class="col-7 col-md-12"><a class="btn btn-secondary btn--round" href="{{route('showSeat')}}" role="button">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                   <div class="list-flight-item col-12">
              <div class="flight-card card">
                <div class="row align-items-center flex-md-nowrap">
                  <div class="flight-card__row col-12 col-md text-center px-md-0">
                    <div class="list-group list-group-flush flex-nowrap flex-md-row m-0">
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="col-7 col-md-12 fz-mdall">BA 90 1212</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">8:20am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10pm</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">08:10pm</div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                  <div class="flight-card__total list-group list-group-flush col-12 col-md-auto">
                    <div class="list-group-item text-center p-md-0">
                      <div class="row justify-content-center align-items-center flex-md-column">
                     
                        <div class="col-7 col-md-12"><a class="btn btn-secondary btn--round" href="{{route('showSeat')}}" role="button">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                   <div class="list-flight-item col-12">
              <div class="flight-card card">
                <div class="row align-items-center flex-md-nowrap">
                  <div class="flight-card__row col-12 col-md text-center px-md-0">
                    <div class="list-group list-group-flush flex-nowrap flex-md-row m-0">
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="col-7 col-md-12 fz-mdall">BA 90 1212</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">8:20am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10pm</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">08:10pm</div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                  <div class="flight-card__total list-group list-group-flush col-12 col-md-auto">
                    <div class="list-group-item text-center p-md-0">
                      <div class="row justify-content-center align-items-center flex-md-column">
                     
                        <div class="col-7 col-md-12"><a class="btn btn-secondary btn--round" href="{{route('showSeat')}}" role="button">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                   <div class="list-flight-item col-12">
              <div class="flight-card card">
                <div class="row align-items-center flex-md-nowrap">
                  <div class="flight-card__row col-12 col-md text-center px-md-0">
                    <div class="list-group list-group-flush flex-nowrap flex-md-row m-0">
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="col-7 col-md-12 fz-mdall">BA 90 1212</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">8:20am</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column text-md-right">
                          <div class="title col-5 col-md-12">07:10pm</div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row d-md-inline-flex flex-md-column">
                          <div class="title col-5 col-md-12">08:10pm</div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
                  <div class="flight-card__total list-group list-group-flush col-12 col-md-auto">
                    <div class="list-group-item text-center p-md-0">
                      <div class="row justify-content-center align-items-center flex-md-column">
                     
                        <div class="col-7 col-md-12"><a class="btn btn-secondary btn--round" href="{{route('showSeat')}}" role="button">View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flight-content__more col-12 d-flex justify-content-center mt-4">
              <button class="btn btn-secondary btn--round btn-load" type="button">Show more<i class="fa fa-spin"></i>
              </button>
            </div>
            <!-- end load items-->
          </div>
        </div>
      </div>
    </div>
    <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
  </div>
</main>
@endsection