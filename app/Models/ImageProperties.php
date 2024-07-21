<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProperties extends Model
{
    use HasFactory;
    protected $id = 'imageID';
    protected $table = 'image_properties';

    protected $fillable = [
        'imageID',
        'propertyID',
        "imagePath",
        'created_at',
    ];
}
