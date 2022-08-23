<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name_society',
        'crm',
        'cachet_express',
        'statut'
    ];
    
}
