@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Schools</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Schools</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <a href="{{route('createSchool')}}" class="btn btn-primary mb-3"> Add New School</a>
                    </div>

                    @if(Session::has('success'))
                    <div class="alert alert-success mt-3">
            
                       <strong class="h5"> Success! </strong>  {{Session::get('success')}}
            
                    </div>
                    @endif

                    <table id="datatablesSimple" style="border: 1px black">
                        <thead>
                            <tr>
                                <th>School Name</th>
                                <th>District</th>
                                <th>Thana</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($data as $values)
                            <tr>
                                <td>{{$values->school_name}}</td>
                                <td>{{$values->district}}</td>
                                <td>{{$values->thana}}</td>                       
                                <td>
                                        <a href="{{route('editSchool',$values->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{route('deleteSchool',$values->id) }}" class="btn btn-danger" style="margin-left: 5%">Delete</a>
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

