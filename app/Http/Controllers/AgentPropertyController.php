<?php

namespace App\Http\Controllers;

use App\Models\ImageProperties;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentPropertyController extends Controller
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
            $myProperties = DB::table('properties')
                ->where('userID', '=', $user['userID'])
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            $allProperties = json_decode(Properties::all(), true);

            $allImage = json_decode(ImageProperties::all(), true);

            $imgArray = array();

            foreach ($allProperties as $m) {
                foreach ($allImage as $a) {
                    if ($a["propertyID"] == $m["propertyID"]) {
                        $imgArray[$m["propertyID"]] = $m;
                    }
                }
            }

            return view('agent.property', ['properties' => $myProperties, 'imgArray' => $imgArray]);
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Agent") {
                return redirect("/");
            }

            if ($request->btnAddProperty) {
                $newProperty = new Properties();
                $newProperty->userID = $user['userID'];
                $newProperty->propertyName = $request->propertyName;
                $newProperty->price = $request->price;
                $newProperty->contactNumber = $request->phoneNumber;
                $newProperty->location = $request->location;
                $newProperty->otherDetails = $request->otherDetails;
                $newProperty->type = $request->type;
                $isSave =  $newProperty->save();
                if ($isSave) {
                    session()->put("successAddProperty", true);
                } else {
                    session()->put("errorAddProperty", true);
                }
            }



            return redirect("/agent_property");
        }
        return redirect("/");
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
    public function destroy(Request $request, string $id)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Agent") {
                return redirect("/");
            }

            if ($request->btnDeleteProperty) {
                $isDeleted = DB::table('properties')->where('propertyID', '=', $id)->delete();
                if ($isDeleted > 0) {
                    session()->put('successDeleteProp', true);
                } else {
                    session()->put('errorDeleteProp', true);
                }
            }
            return redirect("/agent_property");
        }
        return redirect("/");
    }
}
