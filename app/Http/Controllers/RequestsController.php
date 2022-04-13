<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function index()
    {
        // where status 0
        $data = Registration::where('status', 0)->get();
        return view('admin::requests.index', compact('data'));
    }
    public function users()
    {
        $data = Registration::where('status', 1)->get();
        return view('admin::requests.users', compact('data'));
    }
    public function deletedUsers()
    {
        $data = Registration::where('status', 2)->get();
        return view('admin::requests.deleted_users', compact('data'));
    }
    public function approve($id)
    {
        $data = Registration::find($id);
        $data->status = 1;
        $data->save();
        $notification =
            [
                'success' => 'User Approved Successfully',
            ];
        return redirect()->route('requests.index')->with($notification);
    }
    public function cancel($id)
    {
        $data = Registration::find($id);
        $data->status = 2;
        $data->save();
        return redirect()->route('requests.index');
    }
    public function getInformation($id)
    {
        $data = Registration::find($id);
        //return $data;
        return view("admin::requests.view_request_info", ["info"=>$data]);
    }
}
