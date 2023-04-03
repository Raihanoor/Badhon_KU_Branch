@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
        @include('site.pages.donor.side-nav')
     <div class="three_quarter">
    <!-- ################################################################################################ -->
      <section>
        <h1>Blood Search Result</h1>
        <table class="table">
            <tr>
                  <th>Name</th>
                  <th>Blood Group</th>
                  <th>Contact No</th>
                  <th>Email</th>
                  <th>Address</th>  
                  <th>Gender</th> 
                  <th>Availibelity</th> 
            </tr>
          <tbody>
            @foreach($bloodSearch as $value)
            <tr>
                   <td>{{$value->name}}</td>
                   <td>{{$value->blood_group}}</td>
                   <td>{{$value->contact_no}}</td>
                   <td>{{$value->email}}</td>
                   <td>{{$value->address}}</td>
                   <td>{{$value->gender}}</td>
                   <td>
                    @if ($value->next_available_date != null)
                        <strong class="text-danger"> Not Available</strong>
                    @else
                        <strong class="text-success"> Available </strong>
                    @endif 
                </td> 
                   
            </tr>
         
            @endforeach
          </tbody>
        </table>
        <a href="{{route('search')}}" class="btn btn-primary">Go Back to Search</a>
      </section>

     </div>
     

    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')