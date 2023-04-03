@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container" class=" d-flex justify-content-center">
     <div class="three_quarter">
      <section>
        <div id="respond">
            <h2 class="text-center pb-4">Become A hero</h2>
                @if(Session::has('success'))
                <div class="alert alert-success my-3">
        
                  <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif
                <form action="{{route('userToDonor')}}" method="post">
                        @csrf
                    <div class="mx-5">
                            <input type="hidden" name="id" value="{{auth()->user()->id}}">
                            <div class="row">
                                <div class="col-md-4 py-3">
                                        <h6>Name</h6>
                                        <input type="text" name="name" class="form-control" style="border: 1px dotted black" value="{{auth()->user()->name}}" disabled>   
                                        @if ($errors->first('name'))
                                        <div class="alert alert-danger" role="alert">
                                          {{ $errors->first('name') }}
                                        </div>
                                        @endif   
                                </div>

                                <div class="col-md-4 py-2">
                                        <h6 class="my-2">Email</h6>
                                        <input type="text" name="email" class="form-control" style="border: 1px dotted black" value="{{auth()->user()->email}}" disabled>
                                        @if ($errors->first('email'))
                                        <div class="alert alert-danger" role="alert">
                                          {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                </div>
                                <div class="col-md-4 py-2">

                                  <h6 class="my-2">Blood Group</h6>
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
                            </div>

                            <div class="row">
                                <div class="col-md-4 py-3">
                                    <h6 class="my-2">weight</h6>
                                    <input type="number" name="weight" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('weight'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('weight') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">Contact No</h6>
                                        <input type="text" name="contact" class="form-control" style="border: 1px dotted black">
                                        @if ($errors->first('contact'))
                                        <div class="alert alert-danger" role="alert">
                                          {{ $errors->first('contact') }}
                                        </div>
                                        @endif
                                </div>
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">School Name</h6>
                                        <input type="text" name="school" class="form-control" style="border: 1px dotted black">
                                        @if ($errors->first('school'))
                                        <div class="alert alert-danger" role="alert">
                                          {{ $errors->first('school') }}
                                        </div>
                                        @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">Address</h6>
                                        <input type="text" name="address" class="form-control" style="border: 1px dotted black">
                                        @if ($errors->first('address'))
                                        <div class="alert alert-danger" role="alert">
                                          {{ $errors->first('address') }}
                                        </div>
                                        @endif
                                </div>
                                <div class="col-md-4 py-3">
                                        <h6 class="my-2">Date of Birth</h6>
                                        <input type="date" name="date_of_birth" class="form-control" style="border: 1px dotted black">
                                        @if ($errors->first('date_of_birth'))
                                        <div class="alert alert-danger" role="alert">
                                          {{ $errors->first('date_of_birth') }}
                                        </div>
                                        @endif
                                </div>
                                <div class="col-md-4 py-1">

                                  <h6 class="mt-4">Gender</h6>                                
                                  <input type="radio" name="gender" value="male">
                                  <label for="gender">Male</label> 
                                  <input type="radio" name="gender"  value="female">
                                  <label for="gender">Female</label> 
                                  <input type="radio" name="gender"  value="others">
                                  <label for="gender">Others</label> 
                                  @if ($errors->first('gender'))
                                  <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('gender') }}
                                  </div>
                                  @endif
                              </div>
                            </div>

                    </div>

                    <div style="margin: 5% 5% 5% 5%">
                         <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                    </div>

                </form>
              </div>
            </div>
      </section>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')