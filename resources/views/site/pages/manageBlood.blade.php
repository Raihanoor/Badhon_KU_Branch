@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
        @include('site.pages.donor.side-nav')
     <div class="three_quarter">
      <section>
        <div id="respond">
            <h2 class="pb-4">Send Blood Request</h2>
                @if(Session::has('success'))
                <div class="alert alert-success my-3">
        
                  <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif
                <form action="{{route('blood-request')}}" method="post">
                  @csrf

                      <div class="form-input clear py-3">
                        <div class="one_third first" for="donation_date">
                            <div class="py-3">Date Of Donation<span class="required">*</span><br></div>  
                            <input type="date" name="donation_date" class="form-control" id="donation_date" size="22" style="border: 1px dotted black">
                            @if ($errors->first('donation_date'))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors->first('donation_date') }}
                            </div>
                            @endif
                        </div>
                        <div class="one_third" for="donation_time">
                                <div class="py-3">Time of donation (am/pm)<span class="required">*</span><br></div>  
                                <input type="text" name="donation_time" class="form-control" id="donation_time" size="22" style="border: 1px dotted black">
                                @if ($errors->first('donation_time'))
                                <div class="alert alert-danger" role="alert">
                                  {{ $errors->first('donation_time') }}
                                </div>
                                @endif
                        </div>
                        <div class="one_third" for="no_of_bag">
                            <div class="py-3">Required No Of Bag <span class="required">*</span><br></div>  
                            <input type="text" name="no_of_bag" class="form-control" id="no_of_bag" size="22" style="border: 1px dotted black">
                            @if ($errors->first('no_of_bag'))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors->first('no_of_bag') }}
                            </div>
                            @endif
                       </div>

                  </div>
                  <div class="form-input clear">
                      <div class="one_third" for="blood">
                          <div class="py-3">Blood Group<span class="required">*</span><br></div>  
                          <select nput type="text" name="blood" class="form-control" style="border: 1px dotted black">
                                                
                              <option selected disabled>----------Select One---------</option>                 
                              @foreach (bloodGroups() as $item)
                              <option value="{{$item}}">{{$item}}</option>
                              @endforeach        

                          </select>
                          @if ($errors->first('blood'))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors->first('blood') }}
                            </div>
                          @endif
                      </div>
                      
                        <div class="one_third" for="desises">
                                <div class="py-3">Desises<span class="required">*</span><br></div>  
                                <input type="text" name="desises" class="form-control" id="desises" size="22" style="border: 1px dotted black">
                                @if ($errors->first('desises'))
                                <div class="alert alert-danger" role="alert">
                                  {{ $errors->first('desises') }}
                                </div>
                                @endif
                       </div>
                       <div class="one_third" for="managed">
                            <div class="py-3">Managed No of Begs<span class="required">*</span><br></div>  
                            <input type="text" name="managed" class="form-control" id="managed" size="22" style="border: 1px dotted black">
                            @if ($errors->first('managed'))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors->first('managed') }}
                            </div>
                            @endif
                        </div>
  
                   
                  </div>

                  <div class="form-input clear py-3">
                        <div class="one_third first" for="location">
                                <div class="py-3">Location<span class="required">*</span><br></div>  
                                <input type="text" name="location" class="form-control" id="location" size="22" style="border: 1px dotted black">
                                @if ($errors->first('location'))
                                <div class="alert alert-danger" role="alert">
                                  {{ $errors->first('location') }}
                                </div>
                                @endif
                        </div>
                        <div class="one_third" for="contact_no">
                            <div class="py-3">Contact No<span class="required">*</span><br></div>  
                            <input type="text" name="contact_no" class="form-control" id="contact_no" size="22" style="border: 1px dotted black">
                            @if ($errors->first('contact_no'))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors->first('contact_no') }}
                            </div>
                            @endif
                       </div>
                        <div class="one_third" for="relationship">
                                <div class="py-3">Your Relationship with patient<span class="required">*</span><br></div>  
                                <input type="text" name="relationship" class="form-control" id="relationship" size="22" style="border: 1px dotted black">
                                @if ($errors->first('relationship'))
                                <div class="alert alert-danger" role="alert">
                                  {{ $errors->first('relationship') }}
                                </div>
                                @endif
                         </div>

                  </div>
                  <div class="message py-2">
                    <textarea name="message" id="message" class="form-control" cols="25" rows="10" placeholder="Your Message" style="border: 1px dotted black"></textarea>
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
      </section>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')