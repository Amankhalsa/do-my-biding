<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'sub_subcategory_name',
        'Sub_subcategory_slug',
    ];
    public function categoryname(){
        return $this->belongsTo(Category::class,'category_id','id');
      }
    public function subcatname(){
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
      }
      
}
