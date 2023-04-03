@include('layouts.main')
<!-- content -->
<div class="wrapper row3">
  <div id="container">

     
        <div class="row">
        @foreach ($bloodRequest as $post)
                @if ($post->is_posted == true)

                        @if ($post->managed != $post->no_of_bag)
          
                                <div class="card col-md-3 mb-5">
                                        <article class="clear">
                                                <header>
                                                        <div class="card-header text-warning" id="nav_background">
                                                                Location: {{$post->location}}    
                                                                <p class="text-light">({{$post->blood}})</p>
                                                        </div>
                                                        <div class="card-body" style="font-family: CaviarDreamsBold">
                                                                <div >Blood Group: {{$post->blood}}</div>
                                                                <div >Donation Date: {{$post->donation_date}}</div>
                                                                <div >Donation Time: {{$post->donation_time}}</div>
                                                                <div class="py-3">
                                                                        Patient is (Male, aged 55) needs {{$post->no_of_bag}} bag(s) <span class="text-danger">{{$post->blood}}</span> 
                                                                        blood by {{$post->donation_date}} - {{$post->donation_time}} in {{$post->location}}. managed {{$post->managed}} bag(s).  If you can donate, please contact {{$post->contact_no}} ({{$post->relationship}}s).
                                                                </div>
                                                        </div>
                                                        @if (Auth::check())
                                                        <div class="card-footer">
                                                                <a class="btn btn-primary text-light" href="{{route('make-a-donation',$post->id)}}">Make A Donation &raquo;</a>
                                                        </div>  
                                                        @endif

                                                </header>

                                        </article>

                                </div>
                          @endif
                @endif
        @endforeach

        </div>
    <div class="clear"></div>
  </div>
</div>

@include('site.pertials.footer')