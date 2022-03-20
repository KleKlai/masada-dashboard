<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PersonalInformation as PrimaryDataSource;
use App\Models\PIRanking;
use Illuminate\Support\Facades\DB;

class PIRankCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'PI:rank';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run cron job for PI ranking';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        DB::transaction(function () {

            // Organization
            $organizations_source       = PrimaryDataSource::select('organization')->get();
            $organizations              = $organizations_source->countBy('organization')->toArray();

            foreach($organizations as $key => $organization)
            {
                PIRanking::create([
                    'category'  => 'organization',
                    'name'      => $key,
                    'count'     => $organization,
                    'max'       => max($organizations),
                    'percentage'=> $organization/max($organizations)*100
                ]);
            }

            // Civil Status

            $civil_source               = PrimaryDataSource::select('civil_status')->get();
            $civil_status               = $civil_source->countBy('civil_status')->toArray();

            foreach($civil_status as $key => $civil)
            {
                PIRanking::create([
                    'category'  => 'civil_status',
                    'name'      => $key,
                    'count'     => $civil,
                    'max'       => max($civil_status),
                    'percentage'=> $civil/max($civil_status)*100
                ]);
            }

            $gender_source              = PrimaryDataSource::select('gender')->get();
            $genders                    = $gender_source->countBy('gender')->toArray();

            foreach($genders as $key => $gender)
            {
                PIRanking::create([
                    'category'  => 'gender',
                    'name'      => $key,
                    'count'     => $gender,
                    'max'       => max($genders),
                    'percentage'=> $gender/max($genders)*100
                ]);
            }

            // Pre process Gender Data
            // Get Highest gender percentage
            $gender_max     = PIRanking::where('category', 'gender')->where('count', max($genders))->latest()->first();
            $gender_min     = PIRanking::where('category', 'gender')->where('count', min($genders))->latest()->first();

            $gender_max->update([
                'percentage'    => $gender_max->percentage - $gender_min->percentage
            ]);

        }, 5);

        return 0;
    }
}
