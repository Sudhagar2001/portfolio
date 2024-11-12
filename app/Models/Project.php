<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Define the fields allowed for mass assignment
    protected $fillable = [
        'title',
        'description',
        'technologies',
        'start_date',
        'end_date',
        'image',  // Add the 'image' field to the fillable array
    ];

    // Optionally, if you want to manipulate the dates into a proper format, you can use:
    protected $dates = [
        'start_date',
        'end_date',
    ];

    /**
     * Handle image upload for the project.
     *
     * @param  \Illuminate\Http\UploadedFile  $image
     * @return string
     */
    public function uploadImage($image)
    {
        // Store the image and return the path
        return $image->store('project_images', 'public');
    }
}
