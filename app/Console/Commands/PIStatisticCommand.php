<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PersonalInformation as PrimaryDataSource;
use App\Models\PIStatistic;

class PIStatisticCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'PI:stats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run calculation for personal information statistic.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Registration
        $total_registration         = PrimaryDataSource::count();
        $total_registration_youth   = PrimaryDataSource::where('isYouth', 1)->count();
        // Organization
        $total_organizations        = PrimaryDataSource::select('organization')->distinct('organization')->get();

        // Gender
        $male       = PrimaryDataSource::where('gender', 'Male')->count();
        $female     = PrimaryDataSource::where('gender', 'Female')->count();
        // $calc = $male+1-$male/$male;
        // dd($calc*100);
        // Civil Status
        $civil_status   = PrimaryDataSource::select('civil_status')->distinct('civil_status')->get();

        // Get Last Record
        $latest_record = PIStatistic::latest()->first();

        // Condition (If latest_record null or empty ) as is the data

        // Begin Calculation

        $total_registration_masada_representation       = $total_registration + 5 - $total_registration / $total_registration;
        $total_registration_masada_youth_representation = 435 - 235 / 435;
        $total_organization_representation              = $total_organizations + 5 - $total_organizations / $total_organizations;
        $total_gender_male_representation               = $male + 1 - $male / $male;
        $total_gender_female_representation             = $female + 1 - $female / $female;

        PIStatistic::create([
            'total_registration_masada_representation'      => $total_registration_masada_representation*100,
            'total_registration_masada'                     => $total_registration,
            'total_registration_masada_youth_representation'=> $total_registration_masada_youth_representation*100,
            'total_registration_masada_youth'               => $total_registration_youth,
            'total_verified_registrant'                     => 0,
            'total_organization_representation'             => $total_organization_representation*100,
            'total_organization'                            => $total_organizations,
            'total_gender_male_representation'              => $total_gender_male_representation*100,
            'total_gender_male'                             => $male,
            'total_gender_female_representation'            => $total_gender_female_representation*100,
            'total_gender_female'                           => $female,
        ]);

        return 0;
    }
}
