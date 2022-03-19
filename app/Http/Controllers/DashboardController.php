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

        //Organization
        $total_organizations        = PrimaryDataSource::select('organization')->distinct('organization')->get();
        $organizations_source       = PrimaryDataSource::select('organization')->get();
        $organizations              = $organizations_source->countBy('organization');

        // Gender
        $total_male                 = PrimaryDataSource::where('gender', 'Male')->count();
        $total_female               = PrimaryDataSource::where('gender', 'Female')->count();

        // Civil Status
        $civil_status               = PrimaryDataSource::select('civil_status')->distinct('civil_status')->get();

        $rank_by_headquarters = [];

        return view('welcome', compact(
            'total_registration',
            'total_registration_youth',
            'total_organizations',
            'organizations',
            'rank_by_headquarters',
            'total_male',
            'total_female',
            'civil_status'
        ));
    }
}
