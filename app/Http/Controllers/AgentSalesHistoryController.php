<?php

namespace App\Http\Controllers;

use App\Models\SystemUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentSalesHistoryController extends Controller
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
            $allSales = DB::table('vwagentsales')->where('myID', '=', $user['userID'])->get();
            $allUsers = SystemUsers::all();
            $customer = array();

            foreach ($allSales as $a) {
                foreach ($allUsers as $u) {
                    if ($u->userID == $a->userID) {
                        $customer[$a->propertyID] = $u;
                    }
                }
            }

            return view('agent.sales_history', ['customer' => $customer, 'allSales' => $allSales]);
        }
        return redirect("/");
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
    public function show(string $id, Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Agent") {
                return redirect("/");
            }


            $query = json_decode(DB::table('vwagentsales')->where('myID', '=', $user['userID'])->where('propertyID', '=', $id)->get(), true);
            $exist = (count($query) == 1);

            if (!$exist) {
                session()->put("errorNotExist", true);
                return redirect("/agent_sales");
            } else {
                $data = json_decode(DB::table('order_payments')->where('propertyID', '=', $id)->get(), true);
                return view('agent.detail_sales', ['payment' => $data[0]]);
            }
        }
        return redirect("/");
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
