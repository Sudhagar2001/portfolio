<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's conventions
    protected $table = 'educations';

    // Define the fillable attributes
    protected $fillable = [
        'degree',
        'institution',
        'start_date',
        'end_date',
        'grade',
    ];
}
