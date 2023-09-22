<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    public function vehicles(){

    	return $this->belongsToMany(Route::class,'vehicle_routes','route_id','vehicle_id');
    }

    public function vehicle(){

    	return $this->belongsTo(Vehicle::class,'vehicle_id', 'id');
    }

    public function picups(){

    	return $this->belongsToMany(Picuppoint::class,' picup_routes','route_id','pickup_id');
    }

   
}
