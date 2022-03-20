<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PIStatistic extends Model
{
    /**
     * This Model class will describe the Personal Information Statistic for the site for easy rending of data.
     */

    use HasFactory;

    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];
}
