<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tracking_num', 'origin', 'destination','daysIntransit','DeliveredWith','CurrentLocation','Lng','Lat','OrderStatus',
    ];

}
