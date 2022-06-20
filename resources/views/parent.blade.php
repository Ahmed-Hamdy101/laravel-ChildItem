@extends("home.index")  
{{--  instence of index   --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('title')
 Parent Categories 
@endsection

 

{{-- section for html tag  --}}
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
     
     {{--  forr each  data sets   fetch specific one  as  fetchAll('PDO::FETCH_ASSOC')    --}}
   @foreach(  $parent as $pin )
     {{--  Open block code PHP --}}
  
     {{-- //   fetch   list & the query string  --}}
     {{-- // fetch id  --}}
     {{-- // fetch parent id --}}
  @php      
           echo 
           "<tr> 
               <th scope='row'> 
                    $pin->category_sku    
               </th>
               
               <td> 
                 $pin->category_sku_parent   
               </td>
               
               <td> 
                <ul  >
          
                    <a href='parent/$pin->category_sku '  class='text-decoration-none'  name='category' id='category'  >  $pin->category_list <i class='bi bi-folder-symlink'></i></a>     
                    </ul>
                    </td>
                    </tr>
                    "; 
                    @endphp
{{-- end php code block --}}
@endforeach 
            {{--  end foreach  --}}
</tbody>
           </table> 
   {{-- end table  --}}
@endsection
{{-- end section tag --}}
<script>
// script tag start typing  your javascript / jquery / ajax


// get id attr from category
  $('#category').on('change',function(e){
   // initial variables
  var cat_id = e.target.value;

  // ajax code  and  create the query string for json
  $.get('/ajax_subcat?cat_id='+cat_id , function (data) { 
// for each data coming from  database     
  $.each(data , function(parent , subcatObj){
   //for subcategory inside ul   add  the actual data  
    $('#subcategory').append(' <li> <a href="  '+ subcatObj.category_sku+' ">'+ subcatObj.category_list+' </a> </li>')
    
  });
  
});

});
  
  </script>