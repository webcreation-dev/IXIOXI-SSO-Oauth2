<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
    ];

    public $timestamps = false;

    // public function user() {
    //     return $this->belongsToMany(User::class,"user_roles", "role_id", "user_id");
    // }
}
