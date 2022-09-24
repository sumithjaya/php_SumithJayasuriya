<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesStaff;
use App\Models\SalesRoutes;

class StaffController extends Controller
{
    public function viewSalesStaffs()
    {
        //get all the staff data from the database
        $staffData = SalesStaff::all();

        $data = [
            'staff_data' => $staffData,
        ];

        return view('sales_staff_view',$data);
    }

    public function addNewStaff(){

        // create new staff entry into the database
        //get avaibale route entries
        $routeData = SalesRoutes::all();

        $data = [
            'route_data' => $routeData,
        ];

        return view('sales_staff_add',$data);
    }

    public function saveNewStaff(Request $request)
    {

        //create new staff object
        $salesStaff = new SalesStaff();

        //format the date for mysql
        $date=date_create($request->input('joined_date'));
        $formatedDate =  date_format($date,"Y-m-d H:i:s");

        $salesStaff->full_name = $request->input('full_name');
        $salesStaff->email = $request->input('email');
        $salesStaff->telephone = $request->input('telephone');
        $salesStaff->current_route = $request->input('current_route');
        $salesStaff->joined_date =  $formatedDate;
        $salesStaff->comments = $request->input('comments');
        $salesStaff->created_at = NOW();
        $salesStaff->updated_at = NOW();
        //save the new staff entry to the database
        $salesStaff->save();

        return redirect('/');
    }

    public function editStaff($id)
    {
        //get sales route entries
        $routeData = SalesRoutes::all();
        // get the selected staff entry data
        $staff_data = SalesStaff::where([
            'id' => $id,
        ])->first();

        $data = [
            'staff_data' => $staff_data,
            'route_data' => $routeData,
        ];

        return view('sales_staff_edit',$data);
    }

    public function viewStaff($id)
    {
        //view the staff details in the blade template
        $staff_data = SalesStaff::where([
            'id' => $id,
        ])->first();

        $data = [
            'staff_data' => $staff_data,
        ];

        return view('sales_staff_single_view',$data);
    }

    public function updateStaff(Request $request)
    {
       $staff_id = $request->input('staff_id');

       $date=date_create($request->input('joined_date'));
       $formatedDate =  date_format($date,"Y-m-d H:i:s");


        //update the staff entry
       SalesStaff::where([
        'id' => $staff_id
       ])->update([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'telephone' => $request->input('telephone'),
            'current_route' => $request->input('current_route'),
            'joined_date' => $formatedDate,
            'comments' => $request->input('comments'),
       ]);

       return redirect('/');

    }

    public function deleteStaff($id)
    {
        // delete the selected staff entry
        $staff_data = SalesStaff::where([
            'id' => $id,
        ])->delete();

        return redirect('/');
    }
}
