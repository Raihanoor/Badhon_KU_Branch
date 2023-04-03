@include('admin.pertials.template')
@include('admin.pertials.nav-top')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 col-md-8">
            <h1 class="mt-4">Edit kamrul's Data</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('all-donors')}}" class="btn btn-primary">ALl Donors</a>
                    <a href="{{route('createDonor')}}" class="btn btn-primary">Add New Donor</a>
                </div>
            </div>
            <div class="row card mb-4">
                <div class=" col-md-12 card-header">
                    Edit Detals
                </div>
                @foreach($data as $value)
                   <input type="hidden" name="id" value="{{$donor_id=$value->id}}">
                @endforeach
                
                <div class="card-body">
                    <form action="{{ route('updateDonor',$donor_id) }}" method="post">
                         @csrf
                         <div class="mx-5">
                                     @foreach($data as $value)
                                     <h6>Name</h6>
                                     <input type="text" name="name" class="form-control" value="{{$value->name}}" required>  
                                     
                                     <h6 class="my-3">Email</h6>
                                     <input type="text" name="email" class="form-control" value="{{$value->email}}" required>
             
                                     <h6 class="my-3">Password</h6>
                                     <input type="password" name="password" class="form-control" value="{{$value->password}}" required>

                                     <input type="hidden" name="id" value="{{$value->id}}">
                                     <h6 class="my-3">Blood Group</h6>
                                     <input type="text" name="blood" class="form-control" value="{{$value->blood_group}}" required>
             
                                     <h6 class="my-3">height</h6>
                                     <input type="text" name="height" class="form-control" value="{{$value->height}}" required>
             
                                     <h6 class="my-3">weight</h6>
                                     <input type="text" name="weight" class="form-control" value="{{$value->weight}}" required>
                          
             
                                     <h6 class="my-3">Contact No</h6>
                                     <input type="text" name="contact" class="form-control" value="{{$value->contact_no}}" required>
             
                                     <h6 class="my-3">Address</h6>
                                     <input type="text" name="address" class="form-control" value="{{$value->address}}" required>
             
                                     <h6 class="my-3">Date of Birth</h6>
                                     <input type="date" name="date_of_birth" class="form-control" value="{{$value->date_of_birth}}" required>
             
                                     @endforeach
             
                                     @foreach ($school as $item)
                                        <h6 class="my-3">School Name</h6>
                                        <input type="text" name="school" class="form-control" value="{{$item->school_name}}" required>

                                     @endforeach
                                  
             
                                     <h6 class="my-3">Gender</h6>
                                     <input type="radio" name="gender"  value="male" required>Male
                                     <input type="radio" name="gender"  value="female" required>Female
                                     <input type="radio" name="gender"  value="others" required>Others
             
                             </div>

                             <div style="margin: 5% 5% 5% 5%">
                                   <input type="submit" class="btn btn-primary" value="Update">
                              </div>
             
             
                     </form>
                </div>
            </div>
        </div>
    </main>
</div>