@include('admin.pertials.template')
@include('admin.pertials.nav-top')
@include('admin.pertials.nav-side')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create Donation</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a class="link-dark" href="{{route('dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Donation</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <a href="{{route('all-donations')}}" class="btn btn-primary">ALl Donations</a>
                </div>
            </div>
            <div class="row card mb-4">
                <div class=" col-md-12 card-header">
                    Enter Donation Details
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success mt-2">
        
                   <strong class="h5"> Success! </strong>  {{Session::get('success')}}
        
                </div>
                @endif
                <div class="col-md-10 card-body">
                    <form action="{{route('storeDonation')}}" method="post">
                            @csrf
                        <div class="mx-5">

                            <h6  class="my-3">Donor Name</h6>
                            <select class="form-control" name="donor_id">
                                <option>-------- Select donor -------</option>
                                @foreach ($data as $donor)
                                <option class="form-control" value="{{$donor->id}}">{{$donor->name}}</option>
                                @endforeach
                            </select>              

                            <h6 class="my-3">Donation Place</h6>
                            <input type="text" name="donation_place" class="form-control" required>

                            <h6 class="my-3">Donation Date</h6>
                            <input type="date" name="donation_date" class="form-control" required>

                            <h6 class="my-3">Description</h6>
                            <textarea name="description" id="description" cols="125" rows="5" required></textarea>

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