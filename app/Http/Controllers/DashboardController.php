<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInformation as PrimaryDataSource;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['verified']);
    // }

    public function index()
    {
        $total_registration         = PrimaryDataSource::count();
        $total_registration_youth   = PrimaryDataSource::where('isYouth', 1)->count();
        $organizations              = PrimaryDataSource::select('organization')->distinct()->get();

        $rank_by_headquarters = [];

        return view('welcome', compact(
            'total_registration',
            'total_registration_youth',
            'organizations',
            'rank_by_headquarters'
        ));
    }
}
