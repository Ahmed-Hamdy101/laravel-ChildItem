<?php

namespace App\Http\Controllers;
use App\Models\Category;
use GuzzleHttp\Psr7\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoriesControllers extends Controller
{
     
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function index( )
{ 
     $categories= Category::all()->take(2);  // limit to 2 categroy  we can also define a varible with a default zero  value  to get two first categories 
     return   view('index',compact('categories'));   /// view for blade return the data in array 
}


/**
 *  @param  \App\Models\Category  $cat  // model for database
 * @return \Illuminate\Http\Response 
 */
public function parent(  Request  $req ){
     $cat_id = $req->id;  // get id from get method as ' query string ' 
     $parent=Category::where('category_sku_parent' , '=' ,$cat_id)->get();    //   retrive all data from the database when paren = 0   Eloquents as database model 
     return    view('parent' , compact('parent')); // view for blade return the data in array  
}




/**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $cat
     * @return \Illuminate\Http\Response
     */
    
    public function child( Request  $request ){
       $cat_id = $request->ajax_subcat; // get request
       $subcategories = Category::where('category_sku_parent' , '=' ,$cat_id)->get(); // Eloquents as database model 
       return response()->json($subcategories);  //  get json data
}

}
