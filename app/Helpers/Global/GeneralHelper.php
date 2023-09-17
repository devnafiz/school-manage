<?php

use Carbon\Carbon;
use App\Models\Vehicle;

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'Laravel Boilerplate');
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     * @return Carbon
     *
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (! function_exists('homeRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function homeRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin()) {
                return 'admin.dashboard';
            }

            if (auth()->user()->isUser()) {
                return 'frontend.user.dashboard';
            }
        }

        return 'frontend.index';
    }

    if(!function_exists('vehicle_names')){

        function vehicle_names($value){

            $vehicle_names = null;
        foreach ($value as $val) {
             
            $vehicle_name = Vehicle::where('id', $val->pivot->vehicle_id)->pluck('vehicle_no')->first();
//dd($vehicle_name);
            $vehicle_names .= '<li>'.$vehicle_name . '</li>';

        }
         $vehicle_data = [
            'vehicle_names' => substr($vehicle_names, 0, strlen($vehicle_names) - 1)
            ];
        return $vehicle_data;

        }
    }
}
