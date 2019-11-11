<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable  = [
      'internId','grade','slug','download_count','paid_status'    
    ]
}
