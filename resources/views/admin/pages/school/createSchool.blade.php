@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add New School</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add School</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('all-schools')}}" class="btn btn-primary">ALl Schools</a>
                </div>
            </div>
            <div class="row card mb-4">
                <div class=" col-md-12 card-header">
                    Enter Detals of New School
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success mt-2">
        
                   <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif
                <div class="col-md-10 card-body">
                    <form action="{{route('storeSchool')}}" method="post">
                            @csrf
                        <div class="mx-5">

                            <h6>School Name</h6>
                            <input type="text" name="school_name" class="form-control" required>  
                            
                            <h6 class="my-2">District</h6>
                            <input type="text" name="district" class="form-control" required>

                            <h6 class="my-2">Thana</h6>
                            <input type="text" name="thana" class="form-control" required>

                        </div>

                        <div style="margin: 5% 5% 5% 5%">
                             <input type="submit" class="btn btn-primary" value="Submit">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
</div>