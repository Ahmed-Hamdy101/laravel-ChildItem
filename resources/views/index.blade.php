@extends("home.index")
{{-- instance of index --}}
{{-- title of page --}}
@section('title')
Categories
@endsection


 {{--  create table  --}}
@section('table')
  <table class="table table-striped">
     <thead>
       <tr>
         <th scope="col">id</th>
         <th scope="col">Parent</th>
         <th scope="col"> Categoy List </th>
         
     </tr>
</thead>

<tbody>


     {{--   Retrive the result from database and add specfic data --}}
   
   @foreach(  $categories as $in )
     @php      
           echo 
           "<tr> 
               <th scope='row'> 
            
                    $in->category_sku  
               </th>
               
               <td>
                 $in->catagory_sku_parent   
               </td>
               
               <td>
                    <a href=' index/$in->category_sku/parent'  class='text-decoration-none'>  $in->category_list <i class='bi bi-folder-symlink'></i></a>     
               </td>
               </tr>
                    "; 
               @endphp

         @endforeach
               
             </tbody>
           </table> 
   
@endsection

