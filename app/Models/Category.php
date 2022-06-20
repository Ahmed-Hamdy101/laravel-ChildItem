<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    //  to protect the database or save the database ( security ) 
    protected $fillable  =['category_sku' , 'catagory_sku_parent','category_list'];

    
}
