<?php

namespace App\Http\Controllers;

use App\Models\ImageProperties;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProperInfoController extends Controller
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

            $myProperties = DB::table('properties')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $allProperties = json_decode(Properties::all(), true);

            $allImage = json_decode(ImageProperties::all(), true);

            $imgArray = array();
            $propertyStatus = array();

            $mySale = DB::table('vwagentsales')->get();
            foreach ($allProperties as $m) {
                foreach ($allImage as $a) {
                    if ($a["propertyID"] == $m["propertyID"]) {
                        $imgArray[$m["propertyID"]] = $a;
                    }
                }

                foreach ($mySale as $m) {
                    if ($a["propertyID"] == $m->propertyID && $m->payment_status == 'approved') {
                        $propertyStatus[$a["propertyID"]] = true;
                    }
                }
            }

            return view('admin.property', ['properties' => $myProperties, 'imgArray' => $imgArray, 'propertyStatus' => $propertyStatus]);
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
