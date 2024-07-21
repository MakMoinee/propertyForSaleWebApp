<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
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

            $mUsers = DB::table('system_users')
                ->where('type', '<>', 'Admin')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $actionType = ['disapproved', 'approved'];

            return view('admin.users', ['users' => $mUsers, 'actionType' => $actionType]);
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

            if ($user['type'] != "Admin") {
                return redirect("/");
            }

            if ($request->btnApproved) {
                $isUpdate = DB::table('system_users')->where('userID', '=', $id)->update([
                    'approval' => "approved",
                ]);

                if ($isUpdate > 0) {
                    session()->put("successApproved", true);
                } else {
                    session()->put("errorApproved", true);
                }
            } else if ($request->btnDisApproved) {
                $isUpdate = DB::table('system_users')->where('userID', '=', $id)->update([
                    'approval' => "disapproved",
                ]);

                if ($isUpdate > 0) {
                    session()->put("successDisapproved", true);
                } else {
                    session()->put("errorDisapproved", true);
                }
            }
            return redirect("/admin_users");
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
