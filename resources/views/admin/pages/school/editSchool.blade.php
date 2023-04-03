@include('admin.pertials.template')
@include('admin.pertials.nav-top')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 col-md-8">
            <h1 class="mt-4">Edit School</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('all-schools')}}" class="btn btn-primary">ALl Schools</a>
                    <a href="{{route('createSchool')}}" class="btn btn-primary">Add New School</a>
                </div>
            </div>
            <div class="row card mb-4">
                <div class=" col-md-12 card-header">
                    Edit Detals
                </div>
                @foreach($data as $value)
                   <input type="hidden" name="id" value="{{$school_id=$value->id}}">
                @endforeach
                
                <div class="card-body">
                    <form action="{{ route('updateSchool',$school_id) }}" method="post">
                         @csrf
                         <div class="mx-5">
                                     @foreach($data as $value)
                                     <h6>School Name</h6>
                                     <input type="text" name="school_name" class="form-control" value="{{$value->school_name}}" required>  
                                     
                                     <h6 class="my-3">District</h6>
                                     <input type="text" name="district" class="form-control" value="{{$value->district}}" required>
             
                                     <h6 class="my-3">Thana</h6>
                                     <input type="thana" name="thana" class="form-control" value="{{$value->thana}}" required>


                                     <div style="margin: 5% 5% 5% 5%">
                                             <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                   @endforeach
                         </div>
                     </form>
                </div>
            </div>
        </div>
    </main>
</div>