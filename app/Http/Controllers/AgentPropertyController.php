<?php

namespace App\Http\Controllers;

use App\Models\ImageProperties;
use App\Models\Properties;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
                        $imgArray[$m["propertyID"]] = $a;
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
                $newProperty->beds = $request->beds;
                $newProperty->baths = $request->baths;
                $newProperty->lotArea = $request->lot;
                $newProperty->street = $request->street;
                $newProperty->brgy = $request->brgy;
                $newProperty->city = $request->city;
                $newProperty->province = $request->province;
                $newProperty->zip = $request->zipcode;
                $newProperty->otherDetails = $request->otherDetails;
                $newProperty->type = $request->type;
                $isSave =  $newProperty->save();
                if ($isSave) {
                    session()->put("successAddProperty", true);
                } else {
                    session()->put("errorAddProperty", true);
                }
            } else if ($request->btnAddPropertyImage) {
                $files = $request->file('images');
                $fileNames = "";
                $IsFailed = false;
                $count = 1;
                $data = array();
                if ($files) {
                    foreach ($request->file('images') as $file) {

                        $mimeType = $file->getMimeType();
                        if ($mimeType == "image/png" || $mimeType == "image/jpg" || $mimeType == "image/JPG" || $mimeType == "image/JPEG" || $mimeType == "image/jpeg" || $mimeType == "image/PNG") {
                            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/data/img_properties';
                            if (env('APP_ENV') == 'prod') {
                                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/public' . "/data/img_properties/";
                            } else {
                                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/data/img_properties/";
                            }
                            $fileName = strtotime(now()) . "_" . $count .  "." . $file->getClientOriginalExtension();
                            $file->move($destinationPath, $fileName);
                            $data[] = $fileName;
                            $count++;
                            continue;
                        } else {
                            session()->put("errorSavingImg", true);
                            break;
                        }
                    }
                    if ($IsFailed) {
                        return redirect("/agent_property");
                    }

                    $ifExist = json_decode(DB::table('image_properties')->where('propertyID', '=', $request->propertyID)->get(), true);
                    if (count($ifExist) > 0) {

                        try {
                            $imagePaths = json_decode($ifExist[0]['imagePath'], true);
                        } catch (Exception $e) {
                        }


                        $updateCount = DB::table('image_properties')->where('imageID', '=', $ifExist[0]['imageID'])->update([
                            'imagePath' => $data,
                        ]);
                        if ($updateCount > 0) {
                            session()->put("successAddImage", true);
                        } else {
                            session()->put("errorAddImage", true);
                        }
                    } else {
                        $newImgProperty = new ImageProperties();
                        $newImgProperty->propertyID = $request->propertyID;
                        $newImgProperty->imagePath = implode(',', $data);
                        $isSave = $newImgProperty->save();
                        if ($isSave) {
                            session()->put("successAddImage", true);
                        } else {
                            session()->put("errorAddImage", true);
                        }
                    }
                } else {
                    session()->put("errorImageEmpty", true);
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
                try {
                    $originalDirectoryPath = $request->origImagePath;
                    if ($originalDirectoryPath) {
                        $dataImg = explode(',', $request->origImagePath);
                        foreach ($dataImg as $ai) {
                            if (env('APP_ENV') == 'prod') {
                                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/public' . "/data/img_properties/" . $ai;
                            } else {
                                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . "/data/img_properties/" . $ai;
                            }
                            File::delete($destinationPath);
                        }
                    }
                } catch (Exception $e1) {
                }
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
