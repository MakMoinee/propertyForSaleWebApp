<?php

namespace App\Http\Controllers;

use App\Models\SystemUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        if (session()->exists('users')) {
            return redirect("/");
        }
        if ($request->btnCreateAccount) {
            $queryData = json_decode(DB::table('system_users')->where('email', '=', $request->email)->get(), true);
            if (count($queryData) > 0) {
                session()->put('emailExist', true);
            } else {
                $password = $request->password;
                $confirmPassword = $request->confirmPass;

                if ($password == $confirmPassword) {
                    $newUser = new SystemUsers();
                    $newUser->firstName = $request->firstName;
                    $newUser->middleName = $request->middleName;
                    $newUser->lastName = $request->lastName;
                    $newUser->address = $request->address;
                    $newUser->birthDate = $request->birthDate;
                    $newUser->gender = $request->gender2;
                    $newUser->countryCode = $request->countryCode;
                    $newUser->phoneNumber = $request->phoneNumber;
                    $newUser->email = $request->email;
                    $newUser->password = Hash::make($password);
                    $accountType = $request->accountType;
                    $newUser->type = $accountType;
                    if ($accountType == "Client") {
                        $newUser->approval = 'approved';
                    }
                    $newUser->status = 'Active Now';
                    $isSave = $newUser->save();
                    if ($isSave) {
                        session()->put('successCreate', true);
                    } else {
                        session()->put('errorCreate', true);
                    }
                } else {
                    session()->put('passwordNotMatch', true);
                }
            }
        } else if ($request->btnLogin) {
            $query = json_decode(DB::table('system_users')->where('email', '=', $request->email)->get(), true);
            if (count($query) > 0) {
                $user = array();
                foreach ($query as $q) {
                    if (password_verify($request->password, $q['password'])) {
                        $user = $q;
                        break;
                    }
                }
                if (count($user) == 0) {
                    session()->put("errorLogin", true);
                    return redirect("/");
                }
                if ($user['approval'] != "approved") {
                    session()->put("loginNotApproved", true);
                    return redirect("/");
                }
                session()->put("users", $user);
                if ($user['type'] == "Admin") {
                    session()->put("successLoginAdmin", true);
                    return redirect("/admin_dashboard");
                } else if ($user['type'] == "Agent") {
                    session()->put("successLoginAgent", true);
                    return redirect("/agent_dashboard");
                } else {
                    return redirect("/client_home");
                }
            } else {
                session()->put("errorLogin", true);
            }
        }
        return redirect("/");
    }
}
