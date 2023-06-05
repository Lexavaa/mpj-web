<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CropController extends Controller
{
    public function index()
    {
        $image = Image::orderByDesc('id')->first();
        // dd($image->toArray());
        return view('crop', compact('image'));
    }

    public function upload(Request $request)
    {
        $input = $request->all();
        $rules = ['base64image' => 'required'];
        $messages = [];
        $validator = Validator::make($input, $rules, $messages);
    
        if ($validator->fails()) {
            $arr = ["status" => 400, "msg" => $validator->errors()->first(), "result" => []];
        } else {
            try {
                if (!empty($input['base64image'])) {
                    $folderPath = Storage::disk('public')->path('logo-pesantren');
                    $image_parts = explode(";base64,", $input['base64image']);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $image_type = $image_type_aux[1];
                    $image_base64 = base64_decode($image_parts[1]);
                    $filename = time() . '.' . $image_type;
                    $file = $folderPath . '/' . $filename;
                    file_put_contents($file, $image_base64);
    
                    $Image = new Image;
                    $Image->image = $filename;
                    $Image->save();
                }
    
                $msg = 'Image uploaded successfully.';
                session()->flash('success', $msg);
            } catch (\Illuminate\Database\QueryException $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                }
                session()->flash('failed', $msg);
            } catch (\Exception $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                }
                session()->flash('failed', $msg);
            }
        }
        return redirect()->back();
    }
}
