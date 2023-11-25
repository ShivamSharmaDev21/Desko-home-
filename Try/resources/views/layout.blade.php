@include('include.header')
@yield('body')
<?php $viedo = 'no' ; 
  $viedo = isset($youtube) ? "yes" : 'no'; // to maintain the youtube viedo in custom next page 
?>
@include('include.footer' , ['viedo' => $viedo])
 
@include('include.google_analytics')
@include('include.clarity')
@include('include.facebook_pixel')
@include('include.google_tag_header')
@include('include.google_ads')