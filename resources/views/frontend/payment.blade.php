@include('branches.header')
  <body id="top" class="thebg" >
<div class="navbar-wrapper2 navbar-fixed-top">
  <div class="container">
    <div class="navbar mtnav">
      <div class="container offset-3">
        <!-- Navigation-->
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
          <a href="index.html" class="navbar-brand"><img src="{{ url('public/images/logo.png')}}" alt="Travel Agency Logo" class="logo"/></a>
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
          <li><a href="#">Kathmandu</a></li>
          <li>/</li>
          Pokhara
          <li>/</li>          
          <li></li>         
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
      <!-- LEFT CONTENT -->
      <div class="col-md-12 pagecontainer2 offset-0">
<div class="padding30 grey"><br>
    <div class="clearfix"></div>
          Please tell us who will be checking in. Must be 18 or older. <br/><br/>
          
          <div class="col-md-4 textright">
            <div class="margtop15"><span class="dark">Contact Name:</span><span class="red">*</span></div>
          </div>
    <div class="col-md-4">
            <span class="size12">First and Last Name*</span>
            <input type="text" class="form-control " placeholder="">
          </div>
          <div class="col-md-4 textleft margtop15">
          </div>
          <div class="clearfix"></div>
          
          <br/>
    <div class="col-md-4 textright">
            <div class="margtop7"><span class="dark">Phone Number:</span><span class="red">*</span></div>
          </div>
          <div class="col-md-4 textleft">
            <span class="size12">Preferred Phone Number*</span> 
            <input type="text" class="form-control" placeholder="">
    </div>
          <div class="clearfix"></div>
<div class="col-md-4 textright">
            <div class="margtop7"><span class="dark">Email</span><span class="red"></span></div>
    </div>
          <div class="col-md-4 textleft">
            <span class="size12">Preferred email*</span>  
            <input type="text" class="form-control" placeholder="">
    </div>
          <div class="clearfix"></div>
          <br/>
          <div class="col-md-8 textleft">
            Bedding / Smoking Request (optional)
            <!-- Collapse 3 --> 
            <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse3"></button>
            <div id="collapse3" class="collapse">
              <textarea rows="3" class="form-control margtop10"></textarea>
            </div>
            <!-- End of collapse 3 -->
            <div class="clearfix"></div>        

            Special Requests (optional)   
            <!-- Collapse 4 --> 
            <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse4"></button>
            <div id="collapse4" class="collapse">
              <textarea rows="3" class="form-control margtop10"></textarea>
            </div>
            <!-- End of collapse 4 -->
            <div class="clearfix"></div>  
            
    </div>
          <div class="clearfix"></div>
          
          
          <br/>
          <br/>
          <span class="size16px bold dark left">How would you like to pay?</span>
          <div class="roundstep right">2</div>
          <div class="clearfix"></div>
          <div class="line4"></div>   
        
          
          
          <br/>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            
            <!-- Collapse 5 --> 
            <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse5"></button>
            <div id="collapse5" class="collapse">
              <input type="text" class="form-control margtop10" placeholder="">
            </div>
            <!-- End of collapse 5 -->
            <div class="clearfix"></div>
          </div>
          <div class="col-md-4 textleft">
          </div>
          <div class="clearfix"></div>
          

          <br/>
          <!-- Nav tabs -->
          <ul class="nav navigation-tabs">
            <li class="active"><a href="#card" data-toggle="tab">Credit/Debit card</a></li>
            <li><a href="#paypal" data-toggle="tab">e-sewa</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content4">
          
            <!-- Tab 1 -->
            <div class="tab-pane active" id="card">
            
              <div class="col-md-4 textright">
                <div class="margtop15"><span class="dark">Debit/Credit Card Number:</span><span class="red">*</span></div>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control margtop10" placeholder="">
              </div>
              <div class="col-md-4 textleft">
              </div>
              <div class="clearfix"></div>
              
              <br/>
              <div class="col-md-4 textright">
                <div class="margtop7"><span class="dark">Card Type:</span><span class="red">*</span></div>
              </div>
              <div class="col-md-4">
                <select class="form-control mySelectBoxClass">
                  <option selected>xxx-xxx-xxx-772</option>
                  <option>xxx-xxx-xxx-039</option>
                </select>
              </div>
              <div class="col-md-4 textleft">
              </div>
              <div class="clearfix"></div>
              
              <br/>
              <div class="col-md-4">
                
                <div class="w50percent">
                  <div class="wh90percent">
                    <select class="form-control mySelectBoxClass">
                      <option selected>01 JAN</option>
                      <option>02 FEB</option>
                      <option>03 MAR</option>
                      <option>04 APR</option>
                      <option>05 MAY</option>
                      <option>06 JUN</option>
                      <option>07 JUL</option>
                      <option>08 AUG</option>
                      <option>09 SEP</option>
                      <option>10 OCT</option>
                      <option>11 NOV</option>
                      <option>12 DEC</option>
                    </select>           
                  </div>
                </div>
                <div class="w50percentlast">
                  <div class="wh90percent right">
                    <select class="form-control mySelectBoxClass">
                      <option selected>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                    </select>           
                  </div>
                </div>
                <div class="clearfix"></div>
            </div>
              <div class="col-md-4 textleft">
              </div>
              <div class="clearfix"></div>
              

              <br/>
              <div class="col-md-4 textright">
                <div class="margtop15"><span class="dark">Card Identification Number:</span><span class="red">*</span></div>
              </div>
            <div class="col-md-4">
                <input type="text" class="form-control margtop10" placeholder="">
              </div>
            <div class="clearfix"></div>
              <div class="col-md-4">
                <input type="text" class="form-control margtop10" placeholder="">
            </div>
              <div class="col-md-4 textleft margtop15">
              </div>
              <div class="clearfix"></div>
              
              
              <div class="col-md-4 textright">
                <div class="margtop15"><span class="dark"> Cardholder Name:</span><span class="red">*</span></div>
              </div>
              <div class="col-md-4">
                <input type="text" class="form-control margtop10" placeholder="">
              </div>
              <div class="col-md-4 textleft margtop15">(as it appears on the card)
              </div>
              <div class="clearfix"></div>
            
            </div>
            <!-- End of Tab 1 -->           
            
            <!-- Tab 2 -->            
            <div class="tab-pane" id="paypal">
            
            <div class="alert alert-warning fade in">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <strong>Important:</strong> You will be redirected to e-sewa's website to securely complete your payment. 
            </div>

            <button type="submit" class="btn-search5">Proceed to e-sewwa</button>

            </div>
            <!-- End of Tab 2 --> 
          </div>

          
          <br/>
          <br/>
          <span class="size16px bold dark left">Where should we send your confirmation?</span>
          <div class="roundstep right">3</div>
          <div class="clearfix"></div>
          <div class="line4"></div>   
          Please enter the email address where you would like to receive your confirmation.<br/> 
          
          
          <div class="col-md-4 textright">
            <div class="mt15"><span class="dark">Email Address:</span><span class="red">*</span></div>
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control margtop10" placeholder="">
          </div>
          <div class="col-md-4 textleft">
          </div>
          <div class="clearfix"></div>
          
          <br/>
          <br/>
          <span class="size16px bold dark left">Review and book your trip</span>
          <div class="roundstep right">4</div>
          <div class="clearfix"></div>
          <div class="line4"></div>   
          
    <div class="alert alert-info">
          Important information about your booking:<br/>
          <p class="size12">• This reservation is non-refundable and cannot be changed or canceled.</p>
          </div>    
          <p>By selecting to complete this booking I acknowledge that I have read and accept the <a href="#" class="clblue">rules & 
          restrictions</a> <a href="#" class="clblue">terms & conditions</a> , and <a href="#" class="clblue">privacy policy</a>. <br/>   
          
          <button type="submit" class="bluebtn margtop20">
          <a href="{{ route('userprofile')}}">Complete booking</a>
          </button> 
    </p>
        </div>
      </div>
</div>
  </div>
 @include('branches.footer')


