<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentProfileController extends Controller
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

            $currentYear = date('Y');
            $years = range(1990, $currentYear);

            $monthText = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

            $birthMonth =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('m');
            $birthYear =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('Y');
            $birthDay =  (new DateTime($user['birthDate']))->setTimezone(new DateTimeZone('Asia/Manila'))->format('d');




            return view('agent.profile', [
                'currentUser' => $user,
                "months" => 12,
                'yrs' => $years,
                'monthText' => $monthText,
                'birthMonth' => $birthMonth,
                'birthYear' => $birthYear,
                'birthDay' => $birthDay,
            ]);
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Agent") {
                return redirect("/");
            }
            if ($request->btnUpdateAgentProfile) {
                $queryExistArr = json_decode(DB::table('system_users')->where('userID', '=', $id)->get(), true);
                if (count($queryExistArr) > 0) {
                    $updateCount = DB::table('system_users')->where('userID', '=', $id)->update([
                        'firstName' => $request->firstName,
                        'middleName' => $request->middleName,
                        'lastName' => $request->lastName,
                        'phoneNumber' => $request->phoneNumber,
                        'birthDate' => $request->year . '-' . $request->month . '-' . $request->day,
                    ]);
                    if ($updateCount > 0) {
                        session()->put('successUpdate', true);
                        $user = json_decode(DB::table('system_users')->where('userID', '=', $id)->get(), true);
                        session()->put('users', $user[0]);
                    } else {
                        session()->put('errorUpdateProfile', true);
                    }
                } else {
                    session()->put('errorUpdateProfile', true);
                }
            }
            return redirect("/agent_profile");
        }
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
