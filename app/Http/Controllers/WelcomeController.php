<?php

namespace App\Http\Controllers;

use App\Models\ImageProperties;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($user['type'] == "Admin") {
                return redirect("/admin_dashboard");
            } else if ($user['type'] == "Agent") {
                return redirect("/agent_dashboard");
            }
        }

        $allProps = DB::table('properties')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $allImages = json_decode(ImageProperties::all(), true);
        return view("welcome", ['allProps' => $allProps, "allImages" => $allImages]);
    }
}
