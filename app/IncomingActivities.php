<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomingActivities extends Model
{
    protected $table = 'incomingActivities';

     /**
     * Get the user that owns the phone.
     */
    public function incoming() 
    {
    return $this->belongsTo('App\Incoming', 'incomingID', 'id'); 
    }

}
