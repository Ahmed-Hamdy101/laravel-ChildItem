
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> @yield('title')</title>
     <link rel="icon" href="{{ asset('icon/cop.ico') }}">
     <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/bootstrap/bootstrap_icon.css') }}" rel="stylesheet">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/link.css') }}" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   {{-- add ajax --}}
    </head>
<body >
<header>
{{-- add nav  --}}
@include('home.layouts.header') 
{{-- include file  --}}
@yield('nav')
{{-- include nav --}}
</header>     


<section class="container-fluid" id="main">


    <div class="row">
        
      <div class="col-sm-6 pl-4 p-4" >
      
        @yield('table')
   
      
        <hr>
        <br>
         <h1 class=" display -4 font-weight-bold  text-center text-danger"> Powerd by  <i class="bi bi-arrow-down-square-fill"></i></h1>
        {{-- add home  / power by design --}}
         @include('home.layouts.powerby')
         @yield('powerby')     
         

        </div>


     <div class="col-sm-6 border-left pl-4" >
        
     {{-- add screen --}}
        @include('home.layouts.screen')
        @yield('screen')     

    </div>
  </div>

   
   
   
 </div>

</section>

</body>
</html>