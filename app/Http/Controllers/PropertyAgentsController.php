<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyAgentsController extends Controller
{
    public function index()
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Client") {
                return redirect("/");
            }

            $allAgents = DB::table('system_users')->where('type', '=', 'Agent')->where('approval', '=', 'approved')->orderBy('created_at', 'desc')->get();
            return view("client.property_agents", ['allAgents' => $allAgents]);
        }
        return redirect("/");
    }
}