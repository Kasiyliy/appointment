<?php

namespace App\Http\Controllers\Api;
use App\Appointment;
use App\Client;
use App\Employee;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getEmployees(Request $request){
        $employees = Employee::select('employees.*')->join('working_hours', function ($join) use ($request) {
            $join->on('employees.id', '=', 'working_hours.employee_id')
                ->where('working_hours.date', '=', $request->date);
        })->get();
        $service = \App\Service::find($request->service_id);


        return response()->json($employees);
    }

    public function getServices(){
        $services = Service::all();
        return response()->json($services);
    }

    public function getService(Request $request){
        $service = Service::findOrFail($request->service_id);
        return response()->json($service);
    }

    public function store(Request $request)
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
        $appointment->start_time = $request->start_time;
        $appointment->finish_time = $request->finish_time;
        $appointment->comments = $request->comments;
        $appointment->save();


        $message = 'Your appointment is on ' . $appointment->start_time . ' till '
        . $appointment->finish_time  . '. You will be serviced by '
        . $employee->firt_name . ' '. $employee->last_name;

        $url = 'https://smsc.kz/sys/send.php?login=kasya&psw=2299353a&phones=' . trim($client->phone) . '&mes='.$message;
        file_get_contents($url);


        return response()->json(['success' => true], 200);

    }
}
