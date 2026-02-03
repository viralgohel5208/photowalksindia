<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\ContactUsForm;
use Illuminate\Http\Request;

use Session;
use Image;
use File;
use DataTables;

class ContactUsPageContentController extends Controller
{

    public function store(Request $request)
    {
        try {
            $homeId   = ($request->id) ? $request->id : '';
            if ($homeId != '') {
                $item                           = ContactUs::find($homeId);
                Session::flash('alert-message', 'Contactus Data updated successfully.');
            } else {
                $item                           = new ContactUs();
                Session::flash('alert-message', 'Contactus Data added successfully.');
            }
            if ($request->hasFile('banner')) {
                $file   = $request->file('banner');
                if (!File::exists(public_path('uploads/contactus_page'))) {
                    File::makeDirectory(public_path('uploads/contactus_page'), $mode = 0777, true, true);
                }
                $photo  = generateFileName($file->extension());
                if ($photo != '') {
                    if (isset($item->banner) && $item->banner != '' && File::exists(public_path("uploads/contactus_page/" . $item->banner))) {
                        unlink(public_path("uploads/contactus_page/" . $item->banner));
                    }
                    if ($file->getClientOriginalExtension() == 'gif') {
                        $file->move(public_path('uploads/contactus_page/'), $photo);
                    } else {
                        Image::make($file)->save(public_path('uploads/contactus_page/' . $photo));
                    }
                    $item->banner    = $photo;
                }
            }
            if ($request->hasFile('image')) {
                $file   = $request->file('image');
                if (!File::exists(public_path('uploads/contactus_page'))) {
                    File::makeDirectory(public_path('uploads/contactus_page'), $mode = 0777, true, true);
                }
                $photo  = generateFileName($file->extension());
                if ($photo != '') {
                    if (isset($item->image) && $item->image != '' && File::exists(public_path("uploads/contactus_page/" . $item->image))) {
                        unlink(public_path("uploads/contactus_page/" . $item->image));
                    }
                    if ($file->getClientOriginalExtension() == 'gif') {
                        $file->move(public_path('uploads/contactus_page/'), $photo);
                    } else {
                        Image::make($file)->save(public_path('uploads/contactus_page/' . $photo));
                    }
                    $item->image    = $photo;
                }
            }

            $item->desc               = $request->desc;
            
            $item->page_title           = $request->page_title;
            $item->meta_tag             = $request->meta_tag;
            $item->meta_description     = $request->meta_description;
            
            if ($item->save()) {
                Session::flash('alert-class', 'success');
                return redirect()->route('admin.contactus_page_content.edit');
            } else {
                if ($scheduleId != '') {
                    Session::flash('alert-message', 'Schedule updated unsuccessfully.');
                } else {
                    Session::flash('alert-message', 'Schedule added unsuccessfully.');
                }
                Session::flash('alert-class', 'error');
                return redirect()->route('admin.contactus_page_content.edit');
            }
        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class', 'error');
            return redirect()->route('admin.contactus_page_content.edit');
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
            $data['page_title']         = 'Edit Home Page Content';
            $data['breadcrumb'][]       = array(
                'link'      => route('admin.home'),
                'title'     => 'Dashboard'
            );
            $data['breadcrumb'][]       = array(
                'title' => 'Edit'
            );
            $contactUsPageContent                       = ContactUs::where('id', 1)->first();
            if ($contactUsPageContent) {
                $data['contactUsPageContent']           = $contactUsPageContent;
            }
            return view('admin.contactus_page_content.add', $data);
        } catch (\Exception $e) {
            dd($e);
            return abort(404);
        }
    }

    public function register_index()
    {
        try {
            $data                       = [];
            $data['page_title']         = 'Contact US Form List';
            $data['breadcrumb'][]       = array(
                'link'  => route('admin.home'),
                'title' => 'Dashboard'
            );
            $data['breadcrumb'][]       = array(
                'title' => 'List'
            );
            return view('admin.contactus_page_content.register_index', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function register_datatable()
    {
        $schedule = ContactUsForm::query();
        return DataTables::eloquent($schedule)
            ->addColumn('action', function ($schedule) {

                $action      = '';

                $action .= '<a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" class="btn btn-outline-danger btn-sm" href="javascript:void(0);" id="user_id_' . $schedule->id . '" data-id="' . $schedule->id . '" onclick="deleteRecord(this,' . $schedule->id . ');"><i class="fas fa-trash"></i></a>&nbsp;';

                return $action;

            })
            ->editColumn('created_at', function ($schedule) {
                return ($schedule->created_at) ? date('d-m-Y h:i A', strtotime($schedule->created_at)) : '';
            })
            ->filterColumn('created_at', function ($query, $keyword) {
                $query->whereRaw("DATE_FORMAT(schedule.created_at,'%d-%m-%Y') like ?", ["%$keyword%"]);
            })
            ->rawColumns(['action'])->addIndexColumn()
            ->make(true);
    }
    public function registers_delete(Request $request)

    {

        if ($request->ajax()) {

            try {

                $user = ContactUsForm::where('id', $request->id)->first();

                if (!is_null($user)) {

                    if ($user->delete()) {

                        $response['success']    = true;

                        $response['message']    = "Contact Us Form deleted successfully.";

                    } else {

                        $response['success']    = false;

                        $response['message']    = "Contact Us Form deleted unsuccessfully.";

                    }

                } else {

                    $response['success']                = false;

                    $response['message']                = "Contact Us Form record not found.";

                }

            } catch (\Exception $e) {

                $response['success']                    = false;

                $response['message']                    = $e->getMessage();

            }

            return response()->json($response);

        } else {

            return abort(404);

        }

    }
     public function contactExport() {
        $array = ContactUsForm::select()->get()->toArray();

        $data = [];

        if(isset($array) && !empty($array)) {
            foreach($array as $key => $value) {
                $data[$key]['name'] = $value['name'];
                $data[$key]['email'] = $value['email'];
                $data[$key]['mobile'] = $value['mobile'];
                $data[$key]['city'] = $value['city'];
                $data[$key]['message'] = $value['message'];
                $data[$key]['created_at'] = date('d-m-Y', strtotime($value['created_at']));
            }
        }
        if(!empty($data)) {
            $this->ExportFile($data);
            return redirect()->back()->with('success','File Exported successfully..');
        } else {
            return redirect()->back()->with('error','No Record Found..');
        }
    }

    public function ExportFile($records) {
        $filename =  "ContactUs-".time().".xls";      
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$filename\"");

        $heading = false;
            if(!empty($records))
              foreach($records as $row) {
                if(!$heading) {
                  // display field/column names as a first row
                  echo implode("\t", array_keys($row)) . "\n";
                  $heading = true;
                }
                echo implode("\t", array_values($row)) . "\n";
            }
        exit;
    }

}
