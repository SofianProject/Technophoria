<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'competition_category' => 'required',
            'institution' => 'required',
        ]);

        Team::create([
            'user_id' => Auth::id(),
            'team_name' => $request->team_name,
            'competition_category' => $request->competition_category,
            'institution' => $request->institution,
        ]);

        return redirect('/dashboard')->with('success', 'Berhasil mendaftar!');
    }
}