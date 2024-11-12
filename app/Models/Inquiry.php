<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'inquiries';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'email',
        'message',
    ];

    // Optional: You can define the table name explicitly if it's different from the default.
    // protected $table = 'inquiries';

    // Optional: You can define the dates if you don't want to use the default 'created_at' and 'updated_at'.
    // protected $dates = ['created_at', 'updated_at'];
}
