@include('layouts.main')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Register</h3></div>
                            @if(Session::has('success'))
                            <div class="alert alert-success my-3">
                    
                              <strong class="h5"> Success! </strong>  {{Session::get('success')}}
                    
                            </div>
                            @endif
                            <div class="card-body">
                                <form method="POST" action="{{ route('register-create') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
            
                                        <div class="col-md-8">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-8">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="role" class="col-md-3 col-form-label text-md-right">Select Role</label>
            
                                        <div class="col-md-8">
                                            <select name="role" onchange="HideAndDisplay()" id="role" class="form-control">
                                                <option selected disabled>------Select One ------</option>
                                                <option value="donor">Donor</option>
                                                <option value="patient">Patient</option>
                                                <option value="user">User</option>
                                            </select>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="donorForms" style="display: none">
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Blood Group</label>
                
                                            <div class="col-md-8">
                                                <select nput type="text" name="blood" class="form-control">
                                               
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
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Contact No</label>
                
                                            <div class="col-md-8">
                                                <input type="text" name="contact" class="form-control">
                                                @if ($errors->first('contact'))
                                                    <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('contact') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">School Name</label>
                
                                            <div class="col-md-8">
                                                <input type="text" name="school" class="form-control">
                                                @if ($errors->first('school'))
                                                <div class="alert alert-danger" role="alert">
                                                  {{ $errors->first('school') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Address</label>
                
                                            <div class="col-md-8">
                                                <input type="text" name="address" class="form-control">
                                                @if ($errors->first('address'))
                                                <div class="alert alert-danger" role="alert">
                                                  {{ $errors->first('address') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Date of Birth</label>
                
                                            <div class="col-md-8">
                                                <input type="date" name="date_of_birth" class="form-control">
                                                @if ($errors->first('date_of_birth'))
                                                <div class="alert alert-danger" role="alert">
                                                  {{ $errors->first('date_of_birth') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Weight</label>
                
                                            <div class="col-md-8">
                                                <input type="number" name="weight" class="form-control">
                                                @if ($errors->first('weight'))
                                                <div class="alert alert-danger" role="alert">
                                                  {{ $errors->first('weight') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Gender</label>
                                            <div class="col-md-6 mt-2">
                                                <input type="radio" name="gender" value="male"> Male
                                                <input type="radio" name="gender"  value="female"> Female
                                                <input type="radio" name="gender"  value="others"> Others
                                            </div> 
                                            @if ($errors->first('gender'))
                                            <div class="alert alert-danger" role="alert">
                                              {{ $errors->first('gender') }}
                                            </div>
                                            @endif
                                        </div>

                                    </div>

                                    <div id="patientForms" style="display: none">
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Blood Group</label>
                
                                            <div class="col-md-8">
                                                <select nput type="text" name="p_blood" class="form-control" >
                                               
                                                    <option selected disabled>----------Select One---------</option>                 
                                                    @foreach (bloodGroups() as $item)
                                                    <option value="{{$item}}">{{$item}}</option>
                                                    @endforeach        
    
                                                </select>
                                                @if ($errors->first('p_blood'))
                                                <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('p_blood') }}
                                                </div>
                                                @endif 
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Contact No</label>
                
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="p_contact" id="contact_no" size="22" >
                                                @if ($errors->first('p_contact'))
                                                <div class="alert alert-danger" role="alert">
                                                  {{ $errors->first('p_contact') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">Desises</label>
                
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="p_desises" id="desises" size="22" >
                                                @if ($errors->first('p_desises'))
                                                <div class="alert alert-danger" role="alert">
                                                  {{ $errors->first('p_desises') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-md-3 col-form-label text-md-right">Address</label>
                
                                            <div class="col-md-8">
                                                <input class="form-control" type="text" name="p_address" id="address" size="22" >
                                                @if ($errors->first('p_address'))
                                                <div class="alert alert-danger" role="alert">
                                                  {{ $errors->first('p_address') }}
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div id="userForms" style="display: none">
                                        {{-- <div class="form-group row">
                                            <label for="role" class="col-md-3 col-form-label text-md-right">user</label>
                
                                            <div class="col-md-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div> --}}
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-8">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                        <div class="col-md-8">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="{{route('login')}}">Already Have a account? Login!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    function HideAndDisplay(){
        var status=document.getElementById("role");
        if(status.value=='donor'){
            document.getElementById('donorForms').style.display = "block";
            document.getElementById('patientForms').style.display = "none";
            document.getElementById('userForms').style.display = "none";
        }
        else if(status.value=='patient'){
            document.getElementById('patientForms').style.display = "block";
            document.getElementById('userForms').style.display = "none";
            document.getElementById('donorForms').style.display = "none";
        }
        else{
            document.getElementById('userForms').style.display = "block";
            document.getElementById('donorForms').style.display = "none";
            document.getElementById('patientForms').style.display = "none";
        }
    }
</script>