<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Http\Controllers\Controller;

class SystemCalendarController extends Controller
{

    public function index()
    {
        $events = [];

        $appointments = Order::with('category')->get();

        foreach ($appointments as $appointment) {
            if (!$appointment->dateOrder) {
                continue;
            }

            $events[] = [
                'title' => $appointment->name ." - ".$appointment->phone." ".$appointment->category->name ,
                'start' => $appointment->dateOrder. " ". $appointment->timeOrder,
                
            ];
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
