<?php

namespace App\Http\Controllers;

use App\Jobs\UpdateStatistics;
use App\Models\Statistics;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function admins()
    {
        UpdateStatistics::dispatch();

        $admins = User::where('is_admin', true)->paginate(10);
        return view('admins', compact('admins'));
    }



    public function users()
    {
        UpdateStatistics::dispatch();

        $users = User::where('is_admin', false)->paginate(10);
        return view('users', compact('users'));
    }
}
