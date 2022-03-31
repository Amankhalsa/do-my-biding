<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPost extends Model
{
    use HasFactory;
        protected $fillable = [
        'user_account_id',
        'category_id',
        'sub_category_id',
        'subsubcategory_id',
        'create_date',
        'postcode',
        'main_image',
        'you_are',
        'post_title',
        'post_detail',
        'add_id',
        'is_seller',
        'is_individual',
        'expected_price',
        'is_price_negotiable',
        'tags',
        'last_renewed_on',
        'status',

    ];
}
















