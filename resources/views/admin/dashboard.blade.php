            @include('admin.pertials.template')
            @include('admin.pertials.nav-top')
            @include('admin.pertials.nav-side')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid p-5">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Donors</div>
                                    <div class="text-center p-3 h2">
                                        
                                            {{ $donor->count() }}
                                        
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('all-donors')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Schools</div>
                                    <div class="text-center p-3 h2">
                                        {{ $school->count() }}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('all-schools')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Requests</div>
                                    <div class="text-center p-3 h2">
                                        {{ $bloodRequest->count() }}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('all-requests')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Donations</div>
                                    <div class="text-center p-3 h2">
                                        {{ $donations->count() }}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('all-donations')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total Patients</div>
                                    <div class="text-center p-3 h2">
                                        {{ $patient->count() }}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('all-patients')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Users</div>
                                    <div class="text-center p-3 h2">
                                        {{ $user->count() }}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('dashboard')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Messages</div>
                                    <div class="text-center p-3 h2">
                                        
                                            {{ $contact->count() }}
                                        
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route('message-contact')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card my-4">
                            <div class="card-header h3">
                                <i class="fas fa-table me-1"></i>
                                Available Blood List
                            </div>
                            @php
                            $a=0; $aa=0; $b=0; $bb=0; $o=0; $oo=0; $ab=0; $aabb=0;
                            @endphp
                            
                            @foreach ($availableDonor as $item)
                                  @if ($item->blood_group=='A+')
                                     @php
                                         $a=$a+1;
                                     @endphp 
                                  @endif   
                                  @if ($item->blood_group=='A-')
                                  @php
                                      $aa=$aa+1;
                                  @endphp 
                                  @endif   
                                  @if ($item->blood_group=='B+')
                                  @php
                                      $b=$b+1;
                                  @endphp 
                                @endif   
                                @if ($item->blood_group=='B-')
                                @php
                                    $bb=$bb+1;
                                @endphp 
                                @endif  
                                @if ($item->blood_group=='O+')
                                @php
                                    $o=$o+1;
                                @endphp 
                                 @endif   
                                 @if ($item->blood_group=='O-')
                                 @php
                                     $oo=$oo+1;
                                 @endphp 
                                 @endif   
                                 @if ($item->blood_group=='AB+')
                                 @php
                                     $ab=$ab+1;
                                 @endphp 
                                @endif   
                                @if ($item->blood_group=='AB-')
                                @php
                                    $aabb=$aabb+1;
                                @endphp 
                                @endif    
                            @endforeach

                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead class="bg-secondary">
                                        <tr class="h5 text-white">
                                            <th>A+</th>
                                            <th>B+</th>
                                            <th>O+</th>
                                            <th>AB+</th>
                                            <th>A-</th>
                                            <th>B-</th>
                                            <th>O-</th>
                                            <th>AB-</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">{{$a}}</th>
                                        <th scope="row">{{$b}}</th>
                                        <th scope="row">{{$o}}</th>
                                        <th scope="row">{{$ab}}</th>
                                        <th scope="row">{{$aa}}</th>
                                        <th scope="row">{{$bb}}</th>
                                        <th scope="row">{{$oo}}</th>
                                        <th scope="row">{{$aabb}}</th>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

