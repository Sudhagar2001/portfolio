<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Project;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch the total counts
        $educationCount = Education::count();
        $projectCount = Project::count();
        $userCount = User::count();

        // Pass the counts to the view
        return view('admin.dashboard', compact('educationCount', 'projectCount', 'userCount'));
    }
}

