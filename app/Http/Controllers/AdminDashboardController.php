<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Admin") {
                return redirect("/");
            }

            $clientCount = count(json_decode(DB::table('system_users')->where('type', '=', 'Client')->get(), true));
            $agentCount = count(json_decode(DB::table('system_users')->where('type', '=', 'Agent')->get(), true));

            return view('admin.dashboard', [
                'clientCount' => $clientCount,
                'agentCount' => $agentCount
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
