<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

  protected $fillable = [
        'parent_category_id',
        'category_name',
        'maximum_images_allowed',
        'post_validity_interval_in_days',
        'category_slug_en',
        'category_icon',



    ];

}
