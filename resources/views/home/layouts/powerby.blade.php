@section('powerby')
    


  {{--  Power by  these  Tools  --}}
     <div class="row p-5  justify-content-between ">

          <div class="col-sm-3 text-center">
               <img  src="{{ asset('icon/favicon.ico') }}"  width="80">
               <p  class=" font-weight-bold  text-danger"> Laravel</p>
          </div>
                <div class="col-sm-3  text-center  ">
               <img  src="{{ asset('icon/code2.png') }}" width="80">
               <p class="  font-weight-bold  text-primary "> Vs  Code</p>
          </div>
         
      
          <div class="col-sm-3 text-center ">
               <img  src="{{ asset('icon/mysql_logo.ico') }}" width="150">
               <p class="font-weight-bold text-warning "> My SQL</p>
          </div>
         
     </div>

    
     @endsection