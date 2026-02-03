<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\ScheduleRegistrationOff;

use DataTables;
use Validator;
use Session;
use Image;
use File;

class RegistrationOffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data                       = [];
            $data['page_title']         = 'Registration Off List';
            $data['breadcrumb'][]       = array(
                'link'  => route('admin.home'),
                'title' => 'Dashboard'
            );
            $data['breadcrumb'][]       = array(
                'title' => 'List'
            );
            return view('admin.registration_off.index', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function add(){
        try {
            $data                       = [];
            $data['page_title']         = 'Add Event';
            $data['breadcrumb'][]       = array(
                'link'  => route('admin.home'),
                'title' => 'Dashboard'
            );
            $data['breadcrumb'][]       = array(
                'title' => 'List'
            );

            $schedule_off = ScheduleRegistrationOff::select('schedule_id')->where('status', 0)->get();
            $schedule = Schedule::whereDate('date_time', '>=', date('Y-m-d'))->where('status', 1)->orderBy('date_time', 'ASC')->get();
            $data['events'] = $schedule;
     
            $data['schedule_off'] = '';
            $offList = array();
            if(!empty($schedule_off)){
                foreach ($schedule_off as $key => $value) {
                    $offList[$key] = $value->schedule_id;
                }
                $data['schedule_off'] = $offList;
            }else{
                $data['schedule_off'] = '';
            }
            return view('admin.registration_off.add', $data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function datatable(Request $request){
        $schedule = ScheduleRegistrationOff::query();
        return DataTables::eloquent($schedule)
        ->addColumn('action', function ($schedule) {
            $action      = '';
            $action .= '<a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" class="btn btn-outline-danger btn-sm" href="javascript:void(0);" id="user_id_' . $schedule->id . '" data-id="' . $schedule->id . '" onclick="deleteRecord(this,' . $schedule->id . ');"><i class="fas fa-trash"></i></a>&nbsp;';

            return $action;

        })
        ->addColumn('event_name', function ($schedule) {
            return ($schedule->city) ? $schedule->scheduleName->title : '';
            return $schedule->schedule_id;
        })
        ->addColumn('city_name', function ($schedule) {
            return ($schedule->city) ? $schedule->city->name : '';
        })
        ->editColumn('created_at', function ($schedule) {
            return ($schedule->created_at) ? date('d-m-Y', strtotime($schedule->created_at)) : '';
        })
        ->rawColumns(['action'])->addIndexColumn()
        ->make(true);
    }

    public function store(Request $request){
        try {
            $rules    = [
                'event_id'               => 'required',
            ];
            $messages = [
                'event_id.required'         => 'The event field is required.',
            ];

            $validator      = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            } else {
                $schedule = Schedule::select('city_id')->where('id', $request->event_id)->first();
                $item               = new ScheduleRegistrationOff();
                $item->schedule_id  = $request->event_id;
                $item->city_id      = $schedule->city_id;
                $item->status       = 0;

                if ($item->save()) {
                    Session::flash('alert-class', 'success');
                    Session::flash('alert-message', 'Schedule added successfully.');
                    return redirect()->route('admin.registration_off.list');
                } else {
                    Session::flash('alert-class', 'error');
                    return redirect()->route('admin.registration_off.list');
                }
            }

        } catch (\Exception $e) {
            Session::flash('alert-message', $e->getMessage());
            Session::flash('alert-class', 'error');
            return redirect()->route('admin.registration_off.list');
        }

    }

    public function destroy(Request $request){
        if ($request->ajax()) {
            try {
                $schedule = ScheduleRegistrationOff::where('id', $request->id)->first();
                if (!is_null($schedule)) {
                    if ($schedule->delete()) {
                        $response['success']    = true;
                        $response['message']    = "Event deleted successfully.";
                    } else {
                        $response['success']    = false;
                        $response['message']    = "Event deleted unsuccessfully.";
                    }
                } else {
                    $response['success']                = false;
                    $response['message']                = "Event record not found.";
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
}
