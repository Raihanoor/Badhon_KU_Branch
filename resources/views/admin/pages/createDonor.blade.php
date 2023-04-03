@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add New Donor</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Donors</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('all-donors')}}" class="btn btn-primary">ALl Donors</a>
                </div>
            </div>
            <div class="row card mb-4">
                <div class=" col-md-12 card-header p-3 text-center">
                   <h5>Enter Detals of New Donor</h5> 
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success mt-2">
        
                   <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif
                <div class="col-md-12 px-5 card-body justify-content-center">
                    <form action="{{route('storeDonor')}}" method="post">
                            @csrf
                            <div class="row my-4">
                                <div class="col-md-4 my-2">
                                    <h6>Name</h6>
                                    <input type="text" name="name" class="form-control" style="border: 1px dotted black">  
                                    @if ($errors->first('name'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <h6 class="my-2">Email</h6>
                                    <input type="text" name="email" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('email'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <h6 class="my-2">Password</h6>
                                    <input type="password" name="password" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('password'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <h6 class="my-2">Contact No</h6>
                                    <input type="text" name="contact" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('contact'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('contact') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <h6 class="my-2">School Name</h6>
                                    <input type="text" name="school" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('school'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('school') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row my-4">
                                    
                                <div class="col-md-4">
                                    <h6 class="my-2">Address</h6>
                                    <input type="text" name="address" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('address'))
                                    <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('address') }}
                                    </div>
                                    @endif
                                </div>


                                <div class="col-md-4">
                                    <h6 class="my-2">Date of Birth</h6>
                                    <input type="date" name="date_of_birth" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('date_of_birth'))
                                    <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('date_of_birth') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-md-4">
                                
                                    <h6 class="my-2">weight</h6>
                                    <input type="number" name="weight" class="form-control" style="border: 1px dotted black">
                                    @if ($errors->first('weight'))
                                    <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('weight') }}
                                    </div>
                                    @endif
                                </div>
    
                                <div class="col-md-4">
                                    <h6 class="my-2">Gender</h6>
                                    <input type="radio" name="gender"  value="male" style="border: 1px dotted black">Male
                                    <input type="radio" name="gender"  value="female" style="border: 1px dotted black">Female
                                    <input type="radio" name="gender"  value="others" style="border: 1px dotted black">Others
                                    @if ($errors->first('gender'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('gender') }}
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <div class="mt-4 row">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
</div>