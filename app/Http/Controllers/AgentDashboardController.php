<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Agent") {
                return redirect("/");
            }

            $allProperties = json_decode(DB::table('properties')->where('userID', '=', $user['userID'])->get(), true);

            $query = DB::table('vwagentsales')->where('myID', '=', $user['userID'])->get();
            $totalSales = 0;
            foreach ($query as $q) {
                if ($q->payment_status == 'approved') {
                    $totalSales += $q->amount;
                }
            }

            return view('agent.dashboard', ['allProperties' => $allProperties, 'totalSales' => $totalSales]);
        }
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

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
