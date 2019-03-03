<?php

namespace App\Http\Controllers\Api;

use App\Employee;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Homecontroller extends Controller
{
    public function getEmployees($id){
        $employees = Employee::all();
        return response()->json($employees);
    }

    public function getServices(){
        $services = Service::all();
        return response()->json($services);
    }

    public function store(Requests\Admin\IndexStoreAppointmentsRequest $request)
    {
        $employee = \App\Employee::find($request->employee_id);
        $working_hours = \App\WorkingHour::where('employee_id', $request->employee_id)->whereDay('date', '=', date("d", strtotime($request->date)))->whereTime('start_time', '<=', date("H:i", strtotime("".$request->starting_hour.":".$request->starting_minute.":00")))->whereTime('finish_time', '>=', date("H:i", strtotime("".$request->finish_hour.":".$request->finish_minute.":00")))->get();

        if(!$employee->provides_service($request->service_id))
        {
            response()->json(['success' => false], 200);
        }
        if($working_hours->isEmpty())
        {
            response()->json(['success' => false], 200);
        }

        $client = new Client();
        $client->email = $request->email;
        $client->first_name = $request->first_name ;
        $client->last_name = $request->last_name;
        $client->phone = $request->phone;
        $client->save();

        $appointment = new Appointment();
        $appointment->client_id = $client->id;
        $appointment->employee_id = $request->employee_id;
        $appointment->start_time = "".$request->date." ".$request->starting_hour .":".$request->starting_minute.":00";
        $appointment->finish_time = "".$request->date." ".$request->finish_hour .":".$request->finish_minute.":00";
        $appointment->comments = $request->comments;
        $appointment->save();
        return response()->json(['success' => true], 200);

    }
}
