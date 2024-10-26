<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowAgentsController extends Controller
{
    public function index()
    {
        $allAgents = DB::table('system_users')->where('type', '=', 'Agent')->where('approval', '=', 'approved')->orderBy('created_at', 'desc')->get();
        return view("agents", ['allAgents' => $allAgents]);
    }
}
