<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Http\Requests;
use App\Http\Requests\Admin\StoreCommentsRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome(){

        $relations = [
            'clients' => \App\Client::get(),
            'employees' => \App\Employee::get(),
            'services' => \App\Service::where('visible' , true)->get(),
            'allServices' => \App\Service::get(),
            'comments' => \App\Comment::orderBy('id', 'desc')->get()->take(3),
        ];
        return view('front.index',$relations);
    }

    public function commentStore(StoreCommentsRequest $request)
    {

        $comment = \App\Comment::create($request->all());



        return redirect()->route('welcome');
    }

    public function store(Requests\Admin\IndexStoreAppointmentsRequest $request)
    {
        $employee = \App\Employee::find($request->employee_id);
        $working_hours = \App\WorkingHour::where('employee_id', $request->employee_id)->whereDay('date', '=', date("d", strtotime($request->date)))->whereTime('start_time', '<=', date("H:i", strtotime("".$request->starting_hour.":".$request->starting_minute.":00")))->whereTime('finish_time', '>=', date("H:i", strtotime("".$request->finish_hour.":".$request->finish_minute.":00")))->get();

        if(!$employee->provides_service($request->service_id))
        {
            return redirect()->back()->withErrors("This employee doesn't provide your selected service")->withInput();
        }
        if($working_hours->isEmpty())
        {
            return redirect()->back()->withErrors("This employee isn't working at your selected time")->withInput();
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

        $message = 'Ваш прием поставлен на ' . $appointment->start_time . ' до '
            . $appointment->finish_time  . '. Ваш обслуживающий: '
            . $employee->first_name . ' '. $employee->last_name;

        $url = 'https://smsc.kz/sys/send.php?login=kasya&psw=2299353a&phones=' . trim($client->phone) . '&mes='.$message;
        file_get_contents($url);

        return view('welcome', compact('appointment'));
    }
}
