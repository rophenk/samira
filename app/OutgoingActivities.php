<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutgoingActivities extends Model
{
    protected $table = 'outgoingActivities';

    /**
     * Get the user that owns the phone.
     */
    public function outgoing() 
    {
    return $this->belongsTo('App\Outgoing', 'outgoingID', 'id'); 
    }

}
