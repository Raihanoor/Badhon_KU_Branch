@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Contact Messages</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Contact Messages</li>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($message as $values)
                            <tr>
                                <td>{{$values->name}}</td>
                                <td>{{$values->email}}</td>                      
                                <td>{{$values->contact}}</td>    
                                <td>{{$values->messege}}</td> 
                                <td>
                                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" class="btn btn-success">Replay</a>
                                        <a href="{{route('deleteMessage',$values->id) }}" class="btn btn-danger" style="margin-left: 5%">Delete</a>
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

