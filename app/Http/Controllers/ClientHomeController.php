<?php

namespace App\Http\Controllers;

use App\Models\ImageProperties;
use App\Models\OrderPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] != "Client") {
                return redirect("/");
            }
            $type = $request->query('type');
            $location = $request->query('location');
            $propertyName = $request->query('propertyName');

            $allProps = DB::table('properties')
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get();

            if ($type != "" && $location != "" && $propertyName != "") {
                $allProps = DB::table('properties')
                    ->where('type', '=', $type)
                    ->where('province', '=', $location)
                    ->where('propertyName', '=', $propertyName)
                    ->orderBy('created_at', 'desc')
                    ->limit(3)
                    ->get();

                if (count($allProps) == 0) {
                    session()->put("errorNotExist", true);
                    $allProps = DB::table('properties')
                        ->orderBy('created_at', 'desc')
                        ->limit(3)
                        ->get();
                }
            }

            $allAgents = DB::table('system_users')->where('type', '=', 'Agent')->where('approval', '=', 'approved')->orderBy('created_at', 'desc')->limit(5)->get();

            $allImages = json_decode(ImageProperties::all(), true);
            $allProv = DB::table('properties')->distinct('province')->get();

            $allPayments = json_decode(DB::table('order_payments')->select('propertyID')->get(), true);

            return view('client.home', ['allProps' => $allProps, "allImages" => $allImages, 'allProv' => $allProv, 'allAgents' => $allAgents, 'allPayments' => $allPayments]);
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
