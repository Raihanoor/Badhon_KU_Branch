@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
        @include('site.pages.donor.side-nav')
     <div class="row">
         <h2 class="pb-4">Search</h2>    
        <div id="respond" class="col-md-4">

            
                <form action="{{route('blood-search')}}" method="post">
                  @csrf
                  <div class="form-input clear">
                    <div for="blood"> 
                        <div class="py-3">Search by blood group <span class="required">*</span><br></div>  
                        <select class="form-control" type="text" name="blood" id="blood" style="border: 1px dotted black">
                          <option selected disabled>-------Select One-------</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                        </select>
                        @if ($errors->first('blood'))
                        <div class="alert alert-danger" role="alert">
                          {{ $errors->first('blood') }}
                        </div>
                        @endif
                      </div>

                  </div>
                  <div class="mt-3">
                        <button class="btn btn-primary" type="submit" value="Submit">Submit</button>                 
                  </div>

                </form>
              </div>
            <div id="respond" class="col-md-4">
                
                    <form action="{{route('address-search')}}" method="post">
                      @csrf
                      <div class="form-input clear">
                        <div for="address"> 
                            <div class="py-3">Search by Address <span class="required">*</span><br></div>  
                            <input class="form-control" type="text" name="searchAddress" id="address" size="22" style="border: 1px dotted black" placeholder="Address">
                            @if ($errors->first('address'))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors->first('address') }}
                            </div>
                            @endif
                        </div>
                      </div>
                      <div class="mt-3">
                            <button class="btn btn-primary" type="submit" value="Submit">Submit</button>                 
                      </div>
    
                    </form>
                  </div>

</div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')