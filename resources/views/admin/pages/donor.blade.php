@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Donors</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Donors</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <a href="{{route('createDonor')}}" class="btn btn-primary mb-3"> Add New Donor</a>
                    </div>

                    @if(Session::has('success'))
                    <div class="alert alert-success mt-3">
            
                       <strong class="h5"> Success! </strong>  {{Session::get('success')}}
            
                    </div>
                    @endif

                    <table id="datatablesSimple" style="border: 1px black">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Blood Group</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Contact No</th>
                                <th>Status</th>
                                <th>Next Available Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $values)
                            <tr>
                                <td>{{$values->name}}</td>
                                <td>{{$values->blood_group}}</td>
                                <td>{{$values->email}}</td>                      
                                <td>{{$values->address}}</td>
                                <td>{{$values->contact_no}}</td>  
                                <td>
                                    @if ($values->next_available_date != null)
                                        <strong class="text-danger"> Not Available</strong>
                                    @else
                                        <strong class="text-success"> Available </strong>
                                    @endif 
                                </td>  
                                <td>
                                    @if ($values->next_available_date != null)
                                        {{$values->next_available_date}}
                                    @else
                                         Available Now
                                    @endif 
                                    
                                </td> 
                                <td>
                                        <a href="{{route('editDonor',$values->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{route('deleteDonor',$values->id) }}" class="btn btn-danger" style="margin-left: 5%">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

