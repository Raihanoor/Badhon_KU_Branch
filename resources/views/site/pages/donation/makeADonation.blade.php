@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
        @include('site.pages.donor.side-nav')
     <div class="three_quarter">
      <section>
        <div id="respond">
            <h2 class="pb-4">Make a Donation</h2>
                @if(Session::has('success'))
                <div class="alert alert-success my-3">
        
                  <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif

                @if(auth()->user()->role=='donor')

                 @foreach ($donorInfo as $item)               

                    @if ($bloodRequest->blood != $item->blood_group )
                      <div class="alert alert-danger">Sorry !! Your Blood Group did not match</div>
                    @else 
                        @if (!$item->is_available)
                        <form action="{{route('add-donation')}}" method="post">
                          @csrf
                          
                          <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"> 
                          <div class="form-input clear">
                            <div class="one_third" for="no_of_bag">
                                <div class="py-3">Donation Place<span class="required">*</span><br></div>  
                                <div class="form-control" style="border: 1px dotted black">{{$bloodRequest->location}}<br></div> 
                                <input type="hidden" name="donation_place" id="donation_place" value="{{$bloodRequest->location}}" size="22" style="border: 1px dotted black">
                            </div>
                            <div class="one_third" for="blood">
                                <div class="py-3">Donation Date<span class="required">*</span><br></div>  
                                <input type="date" class="form-control" name="donation_date" id="donation_date" size="22" style="border: 1px dotted black">
                                @if ($errors->first('donation_date'))
                                <div class="alert alert-danger" role="alert">
                                  {{ $errors->first('donation_date') }}
                                </div>
                                @endif
                            </div>
                          </div>                   
                          <div class="py-4">
                            <textarea name="description" class="form-control" id="description" placeholder="Description" cols="25" rows="10" style="border: 1px dotted black"></textarea>
                              @if ($errors->first('description'))
                              <div class="alert alert-danger" role="alert">
                                {{ $errors->first('description') }}
                              </div>
                              @endif
                          </div>
                        <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                      </form>
                      @else
                      <div class="alert alert-danger">You are not elizable for blood donation. you will be elizable after {{$item->next_available_date}}</div> 
                      @endif
                    @endif
             
                 @endforeach
      
              @else

              You are not authenticated as donor please <a href="{{route('login')}}"> login </a> as Donor | New <a href="{{route('become-a-hero')}}">Register</a> as Donor
                  
              @endif
              </div>
            </div>
      </section>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')