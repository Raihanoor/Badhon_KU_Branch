@extends('layouts.app')

@section('content')
{{-- Header Section   --}}
@include('home.pertials.header')
{{-- Navigation --}}
@include('home.pertials.navigation')
{{-- Jumbotron --}}
@include('home.pertials.jumbotron')
<!-- content -->
<div class="wrapper row3">
  <div id="container">
   
    <!-- About Section -->
    @include('home.pertials.about')
    <div class="clear"></div>
  </div>
</div>

@include('home.pertials.footer')

@endsection
