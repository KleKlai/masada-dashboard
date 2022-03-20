<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInformation as PrimaryDataSource;
use App\Models\PIRanking;
use Carbon\Carbon;

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
        $total_organizations        = PrimaryDataSource::distinct('organization')->count();
        $organizations              = PIRanking::where('category', 'organization')->latest()->take($total_organizations)->get();

        // Gender
        $total_gender               = PrimaryDataSource::distinct('gender')->count();
        $gender                     = PIRanking::where('category', 'gender')->latest()->take($total_gender)->get();

        // Civil Status
        $total_civil_status         = PrimaryDataSource::distinct('civil_status')->count();
        $civil_status               = PIRanking::where('category', 'civil_status')->latest()->take($total_civil_status)->get();

        $rank_by_headquarters = [];

        return view('welcome', compact(
            'total_registration',
            'total_registration_youth',
            'total_organizations',
            'organizations',
            'rank_by_headquarters',
            'gender',
            'civil_status'
        ));
    }
}
