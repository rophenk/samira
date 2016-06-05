<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttachmentIncoming extends Model
{
    protected $table = 'attachmentIncoming';

    public function attachment() 
    {
    return $this->belongsTo('App\Incoming'); 
    }
}
