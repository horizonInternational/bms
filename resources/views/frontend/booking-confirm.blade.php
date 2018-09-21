@extends('layouts.frontend')
@section('content')

      <div class="page-content">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-12 d-flex" id="barba-wrapper">
              <div class="barba-container">
                <div class="booking-card card">
                  <div class="card-body">
                    <div class="booking-card__title">
                      <h2>03 Confirmation</h2>
                      <hr class="mb-4">
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-4">
                      <p class="mark bg-primary-light mb-3">Thank you. Your booking is now confirmed.</p><a class="btn btn-secondary btn--round mb-3 ml-auto d-none d-md-block" href="{{route('home')}}" role="button"> <b style="font-size: 15px;"> <<< </b> HOME</a>
                    </div>
                    <section class="mb-5">
                      <h4>Traveller info</h4>
                      <div class="row">
                        <div class="col-12 col-md-8">
                          <ul class="booking-card__checklist">
                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                              <div class="fw-sm">Booking number:</div><span>15694562</span>
                            </li>
                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                              <div class="fw-sm">Fist name:</div><span>Anushree</span>
                            </li>
                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                              <div class="fw-sm">Last name:</div><span>Adhikari</span>
                            </li>
                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                              <div class="fw-sm">E-mail address:</div><span>anushree@yahoo.com</span>
                            </li>
                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                              <div class="fw-sm">Street Address and number:</div><span>Teku kathmandu</span>
                            </li>
                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                              <div class="fw-sm">Town / City:</div><span>bramhatole</span>
                            </li>
              
                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                              <div class="fw-sm">Country:</div><span>Nepal</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </section>
                    <section class="mb-5">
                      <h4>Special requirements</h4>
                      <p>I would like a room overlooking the main square, if possible. To you I will be very grateful. Thank you.</p>
                    </section>
                    <section class="mb-5">
                      <h4>Payment</h4>
                      <p>You have now confirmed and guaranteed your booking by credit card.All payments are to be made at the hotel during your stay, unless otherwise stated in the hotel policies or in the room conditions.Please note that your credit card may be pre-authorised prior to your arrival.</p>
                    </section>
                    <div class="mb-5">
                      <div class="fw-bold">This hotel accepts the following forms of payment:</div>
                      <ul>
                        <li>American Express, Visa, MasterCard</li>
                      </ul>
                    </div>
                    <section>
                      <h4>Cancel Reservation</h4>
                      <p>
                        You can cancel the reservation. To cancel the reservation, please
                        <a href="#">click here.</a>
                      </p>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
      </div>
@endsection