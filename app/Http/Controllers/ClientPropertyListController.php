<?php

namespace App\Http\Controllers;

use App\Models\ImageProperties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientPropertyListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Client") {
                return redirect("/");
            }
            $allProps = DB::table('properties')
                ->orderBy('created_at', 'desc')
                ->limit(20)
                ->get();

            $allProv = DB::table('properties')->distinct('province')->get();

            $allImages = json_decode(ImageProperties::all(), true);

            return view('client.properties', ['allProps' => $allProps, "allImages" => $allImages, 'allProv' => $allProv]);
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Client") {
                return redirect("/");
            }

            $data = DB::table('properties')->where('propertyID', '=', $id)->get();
            $imgData = DB::table('image_properties')->where('propertyID', '=', $id)->get();

            // dd([$data,$imgData]);

            return view('client.property_detail', ['details' => $data, 'imgData' => $imgData]);
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
