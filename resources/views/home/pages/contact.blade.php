@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="contact" class="clear">
      <div class="one_half first">
        <h1>Have Any Question ?</h1>
        <p>If you have any question or Have any suggestion please contact with us</p>
        <div id="respond">
          <h2>Contact Us</h2>
          @if(Session::has('success'))
          <div class="alert alert-success my-3">
  
             <strong class="h5"> Success! </strong>  {{Session::get('success')}}
  
          </div>
          @endif
          <form action="{{route('contactUs')}}" method="post">
            @csrf
            <div class="form-input clear">
              <label class="one_half first my-2" for="author">Name<span class="required">*</span><br>
                <input type="text" name="name" id="name" class="form-control" size="22" style="border: 1px dotted black">
                @if ($errors->first('name'))
                <div class="alert alert-danger" role="alert">
                  {{ $errors->first('name') }}
                </div>
                @endif
              </label>
              <label class="one_half my-2" for="email">Email <span class="required">*</span><br>
                <input type="text" name="email" id="email" class="form-control"  size="22" style="border: 1px dotted black">
                @if ($errors->first('email'))
                <div class="alert alert-danger" role="alert">
                  {{ $errors->first('email') }}
                </div>
                @endif
              </label>
            </div>
            <div class="form-input clear">
              <label class="one_half first my-2" for="contact">Contact No<span class="required">*</span><br>
                <input type="text" name="contact" id="contact" class="form-control"  size="22" style="border: 1px dotted black">
                @if ($errors->first('contact'))
                <div class="alert alert-danger" role="alert">
                  {{ $errors->first('contact') }}
                </div>
                @endif
              </label>
            </div>
            <div class="form-message my-2">
              <textarea name="message" id="message" placeholder="Your Message" class="form-control" cols="25" rows="10" style="border: 1px dotted black"></textarea>
              @if ($errors->first('message'))
              <div class="alert alert-danger" role="alert">
                {{ $errors->first('message') }}
              </div>
              @endif
            </div>
            
            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
         
          </form>

        </div>
      </div>
      <div class="one_half">
        <div class="map push50"><img src="/images/site/blood-2.jpg" alt=""></div>
        <section class="contact_details clear">
          <h2>Am I Eligible to Donate Blood?</h2>
            <p>To ensure the safety of both patients and donors, these are some of the requirements donors must meet to be eligible to donate blood based on their donation type. To explore a list of eligibility information</p>
          <div class="one_half first">
            <div class="h4">Whole Blood Donation</div>
              <ul>
                  <li>
                    Donation frequency: Every 56 days* 
                  </li>
                  <li>You must be in good health and feeling well**</li>
                  <li>You must be at least 16 years old in most states</li>
                  <li>You must weigh at least 110 lbs</li>
              </ul> 
              
              
              
          </div>
        </section>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>


@include('site.pertials.footer')