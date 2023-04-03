@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Patients</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Patients</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <a href="{{route('createPatient')}}" class="btn btn-primary mb-3"> Add New Patient</a>
                    </div>

                    @if(Session::has('success'))
                    <div class="alert alert-success mt-3">
            
                       <strong class="h5"> Success! </strong>  {{Session::get('success')}}
            
                    </div>
                    @endif

                    <table id="datatablesSimple" style="border: 1px black">
                        <thead>
                            <tr>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Blood Group</th>
                                    <th>Contact No</th>
                                    <th>Diseases</th>
                                    <th>Address</th>
                                    <th>Recovary Status</th>
                                    <th>Action</th>
                                </tr>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $values)
                            <tr>
                                <td>{{$values->name}}</td>
                                <td>{{$values->email}}</td> 
                                <td>{{$values->blood_group}}</td>
                                <td>{{$values->contact}}</td>    
                                <td>{{$values->desises}}</td> 
                                <td>{{$values->address}}</td> 
                                <td>Recovered</td>
                                <td>
                                        <a href="{{route('editPatient',$values->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{route('deletePatient',$values->id) }}" class="btn btn-danger" style="margin-left: 5%">Delete</a>
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

