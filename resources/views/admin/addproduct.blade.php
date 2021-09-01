<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add product</title>
    
    <link rel="icon" href="{{asset('adminassets/images/dashboard/favicon.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('adminassets/images/dashboard/favicon.png')}}" type="image/x-icon" >
    
     <script src="{{ asset('js/app.js') }}" defer></script>
  
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <link rel="stylesheet" href="{{asset('adminassets/css/vendors/prism.css')}}">
  <link rel="stylesheet" href="{{asset('adminassets/css/vendors/chartist.css')}}">
  <link rel="stylesheet" href="{{asset('adminassets/css/admin.css')}}">
  <link rel="stylesheet" href="{{asset('adminassets/css/custom.css')}}">
   @livewireStyles
   <style>
    .hide-discount{
      display:none;
    }
  </style>
</head>
<body ">
<!-- page-wrapper Start-->
<div class="page-wrapper">
  @livewire('admin.header')
  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    @livewire('admin.addproduct')
    @livewire('admin.footer')

  </div>
</div>
<!-- ./wrapper -->
 
<!-- jQuery -->
<script src="{{asset('adminassets/js/jquery-3.3.1.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminassets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('adminassets/js/icons/feather-icon/feather.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('adminassets/js/icons/feather-icon/feather-icon.js')}}"></script>

<script src="{{asset('adminassets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('adminassets/js/chart/chartist/chartist.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminassets/js/chart/chartjs/chart.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminassets/js/lazysizes.min.js')}}"></script>
<script src="{{asset('adminassets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('adminassets/js/clipboard/clipboard.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminassets/js/custom-card/custom-card.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminassets/js/counter/jquery.waypoints.min.js')}}"></script>
<!-- fancyfab App -->
<script src="{{asset('adminassets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('adminassets/js/counter/counter-custom.js')}}" defer></script>
<script src="{{asset('adminassets/js/chart/peity-chart/peity.jquery.js')}}"></script>
<script src="{{asset('adminassets/js/chart/sparkline/sparkline.js')}}"></script>
<script src="{{asset('adminassets/js/admin-customizer.js')}}"></script>
<script src="{{asset('adminassets/js/dashboard/default.js')}}"></script>
<script src="{{asset('adminassets/js/chat-menu.js')}}"></script>
<script src="{{asset('adminassets/js/height-equal.js')}}"></script>
<script src="{{asset('adminassets/js/lazysizes.min.js')}}"></script>
<script src="{{asset('adminassets/js/admin-script.js')}}"></script>
    @livewireScripts
    <script>
       $(document).ready(function(){
        //discount input
        $('#dis').addClass('hide-discount');
        $('#product_category').on('change',function(){
          $('#dis').addClass('hide-discount');
        sel=$(this).val();
        console.log(sel);
        if(sel =='bridal' )
        {
            $('#dis').removeClass('hide-discount');
        }else{
          $('#dis').addClass('hide-discount');
        }
      });
    });
    </script>
</body>
</html>
