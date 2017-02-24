<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IPAddress extends Model
{
    protected $table = 'ip_addresses';

    protected $fillable = array('app_name');
}
