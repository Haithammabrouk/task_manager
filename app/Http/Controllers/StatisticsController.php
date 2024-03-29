<?php

namespace App\Http\Controllers;

use App\Jobs\UpdateStatistics;
use App\Models\Statistics;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {

        UpdateStatistics::dispatch();
        
        $statistics = Statistics::paginate(10);

        return view('tasks.statistics', compact('statistics'));
    }
}
