@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Blood Requests</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Requests</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div>
                        <a href="{{route('dashboard')}}" class="btn btn-primary mb-3">Dashboard</a>
                    </div>

                    @if(Session::has('success'))
                    <div class="alert alert-success mt-3">
            
                       <strong class="h5"> Success! </strong>  {{Session::get('success')}}
            
                    </div>
                    @endif

                    <table id="datatablesSimple" style="border: 1px black">
                        <thead>
                            <tr>
                                <th>Blood Group</th>
                                <th>Contact No</th>
                                <th>Donation Date</th>
                                <th>Donation Time</th>
                                <th>No Of Bag</th>
                                <th>Managed</th>
                                <th>Location</th>
                                <th>Relationship</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($message as $values)
                            <tr>
                                <td>{{$values->blood}}</td>                      
                                <td>{{$values->contact_no}}</td>    
                                <td>{{$values->donation_date}}</td>    
                                <td>{{$values->donation_time}}</td>    
                                <td>{{$values->no_of_bag}}</td>    
                                <td>{{$values->managed}}</td>    
                                <td>{{$values->location}}</td>    
                                <td>{{$values->relationship}}</td>       
                                <td>{{$values->message}}</td> 
                                <td>
                                        <a href="{{route('create-post',$values->id) }}" class="btn btn-success mb-1">Post</a>
                                        <a href="{{route('deleteBloodRequest',$values->id) }}" class="btn btn-danger">Delete</a>
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