<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'contacts'; 

    // Define the fillable properties to allow mass assignment
    protected $fillable = [
        'email',
        'instagram',
       
        'linkedin',
        'google',
        'whatsapp',
    ];
}
