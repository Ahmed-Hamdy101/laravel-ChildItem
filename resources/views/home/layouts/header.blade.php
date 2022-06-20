
  {{--  Design Layouts for nav  --}}
@section('nav')
<nav class="navbar navbar-expand-sm navbar-dark" id="nav">

   <a href="" class="navbar-brand" id="nav-brand"> C&H </a>  
   
   <div class="navbar-nav" >

     <li class="nav-item"><a href=" "class="nav-link text-black-50 hover" >  Home</a></li>
     <li class="nav-item"><a href="" class="nav-link text-black-50 hover" >Team</a> </li>
        <li class="nav-item"><a href="" class="nav-link text-black-50 hover" >contact</a>
        </li>

   </div>

   <form action="" class="form-inline">
     <input type="search" name="search" id="input" class="form-control" placeholder=" The developer not worked on it ! ">
     <button class="btn btn-sm btn-primary" type="submit">  <i class="bi bi-search"></i></button>
   </form>

</nav>

@endsection
