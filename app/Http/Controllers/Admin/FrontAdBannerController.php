<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\frontAdBanner;
// use App\Models\SettingsRegisterUserData;
use Illuminate\Http\Request;

use DataTables;
use Validator;
use Session;
use Image;
use Auth;
use File;
use Str;

class FrontAdBannerController extends Controller
{

    public function store(Request $request)
    {
        $input = $request->all();
        try {
            if ($request->hasFile('schedule_details_ad_banner')) {
                $input['schedule_details_ad_banner'] = $this->commonImageUpload($request,'schedule_details_ad_banner');
            }
            if ($request->hasFile('contact_us_ad_banner')) {
                $input['contact_us_ad_banner'] = $this->commonImageUpload($request,'contact_us_ad_banner');
            }
            foreach ($input as $name => $value) {
                $this->checkBasedAdOnName($name);
                $this->UpdateBasedOnName($name, $value);
            }
            Session::flash('alert-class', 'success');
            return redirect()->route('admin.frontadbanner.edit');
            
            
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class', 'error');
            return redirect()->route('admin.frontadbanner.edit');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        try {
            $data                       = [];
            $data['page_title']         = 'Edit Front Ad Banner';
            $data['breadcrumb'][]       = array(
                'link'      => route('admin.home'),
                'title'     => 'Dashboard'
            );
            $data['breadcrumb'][]       = array(
                'title' => 'Edit'
            );
            $settingData = frontAdBanner::pluck('value','name')->toArray();
            if ($settingData) {
                $data['settingData']        = $settingData;
            }
            return view('admin.frontadbanner.add', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }
    public function UpdateBasedOnName($name, $value)
    {
        return frontAdBanner::where('name', $name)->update(['value' => $value]);
    }

    public function checkBasedAdOnName($name)
    {
        $setting = frontAdBanner::where('name', $name)->get()->first();
        if (is_null($setting)) {
            $setting = frontAdBanner::insert(['name' => $name,'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        }
        return $setting;
    }
    public function commonImageUpload($request,$fine_name){
        $file   = $request->file($fine_name);
        if (!File::exists(public_path('uploads/front_adbanner'))) {
            File::makeDirectory(public_path('uploads/front_adbanner'), $mode = 0777, true, true);
        }
        $photo  = generateFileName($file->extension());
        if ($photo != '') {
            if (isset($input[$fine_name]) && $input[$fine_name] != '' && File::exists(public_path("uploads/front_adbanner/" . $input[$fine_name]))) {
                unlink(public_path("uploads/front_adbanner/" . $input[$fine_name]));
            }
            if ($file->getClientOriginalExtension() == 'gif') {
                $file->move(public_path('uploads/front_adbanner/'), $photo);
            } else {
                Image::make($file)->save(public_path('uploads/front_adbanner/' . $photo));
            }
            return "uploads/front_adbanner/".$photo;
        }
        return '';
    }
}
