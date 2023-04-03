@include('layouts.main')

<!-- content -->
<div class="wrapper row3">
  <div id="container">
    @include('site.pages.donor.side-nav')

    @if (Auth::check())
      <div id="portfolio" class="three_quarter">
        <div class="row">
          @foreach ($data as $item)
          <div class="col-md-4  mt-3">
            <article class="clear">
              <figure class="post-image"><img src="../images/demo/1200x400.gif" alt=""></figure>
              <header>
                <h2 class="blog-post-title"><a href="#">{{$item->name}}</a></h2>
                <div class="blog-post-meta">
                  <ul>
                    <li class="blog-post-date">
                      <h5>Blood Group : <strong class="text-danger">{{$item->blood_group}}</strong></h5>
                    </li>
                  </ul>
                </div>
              </header>
              <div>Email:{{$item->email}} </div>
              <div>Contact No: {{$item->contact_no}} </div>
              <div>Address: {{$item->address}} </div>
              <div>Gender: {{$item->gender}} </div>
              <div>Weight: {{$item->weight}} </div>
              <div>Status:
              @if ($item->next_available_date != null)
                <strong class="text-danger"> Not Available</strong>
              @else
                <strong class="text-success"> Available </strong>
              @endif 
            </div>
            
            </article>
          </div>
          @endforeach
        </div>
    @else
        <div id="portfolio" class="three_quarter">
          <div class="row">
              <div class="col-md-6">
                <div class="alert alert-danger">
                  You are not Logged In. Please <a href="{{route('login')}}">Login</a> |  New <a href="{{route('register')}}">register</a>
                </div>
              </div>
          </div>
        </div>
    @endif



    </div>
    <div class="clear"></div>
  </div>
</div>


@include('site.pertials.footer')