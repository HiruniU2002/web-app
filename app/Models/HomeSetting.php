<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{
    use HasFactory;

    protected $fillable =[
        'heading',
        'sub_heading',
        'image_link',
        'top_heading',
        'bottom_heading'
    ];
}
