<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentTransactionDetailsController extends Controller
{

    public function index(Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);
         
            if ($user['type'] != "Agent") {
                return redirect("/");
            }

            $pid = $request->query('pid');

            $query = json_decode(DB::table('vwagentsales')->where('myID', '=', $user['userID'])->where('propertyID', '=', $pid)->get(), true);
            $exist = (count($query) == 1);

            if (!$exist) {
                session()->put("errorNotExist", true);
                return redirect("/sales_history");
            } else {
                $data = json_decode(DB::table('order_payments')->where('userID', '=', $user['userID'])->where('propertyID', '=', $pid)->get(), true);
                return view('agent.detail_sales', ['payment' => $data[0]]);
            }
        }
        return redirect("/");
    }
}
