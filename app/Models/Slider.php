<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable=[
        'heading',
        'bottom_heading',
        'image_link',
        'more_info_link'
    ];
    
}
