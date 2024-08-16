<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $id = 'propertyID';
    protected $table = 'properties';

    protected $fillable = [
        'propertyID',
        'userID',
        "propertyName",
        "price",
        "contactNumber",
        'street',
        'city',
        'province',
        'zip',
        'otherDetails',
        'type',
        'created_at',
    ];
}
